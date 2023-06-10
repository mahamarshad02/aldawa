from flask import Flask, render_template, request, jsonify
from chatterbot import ChatBot
from chatterbot.trainers import ListTrainer

app = Flask(__name__)

# Create a chatbot instance
chatbot = ChatBot("My Bot")

# Training the chatbot with some conversation data
conversation = [
    "Hi there!",
    "How are you doing?",
    "I'm doing great.",
    "That is good to hear",
    "Thank you.",
    "Thank you for letting us know. We will verify your payment and update the status accordingly.",
    "You're welcome.",
    "My name is My Bot",
   "Of course! What are you looking for?",
   "Yes, we have ongoing promotions on certain products",
   "Absolutely! We accept all major credit cards.",
   "Shipping times may vary depending on your location and the selected shipping method",
   "We have a hassle-free return policy within X days of purchase. If you're not satisfied with your order, you can initiate a return and get a refund or exchange.",
   "We sell a wide range of medical products, including over-the-counter medications, vitamins and supplements, first aid supplies",
   "We currently only offer over-the-counter medications and health products",
   " Yes, once your order is shipped, we will provide you with a tracking number.",
   "Yes, all our products comply with relevant regulatory standards and guidelines",
   "You can reach our customer support team through our website's contact form or by calling our customer service hotline,",
   "If you need to ask anything,feel free to ask",
    "Thank you for letting us know. We will verify your payment and update the status accordingly.",
    "We accept various payment methods, including credit cards, debit cards, PayPal, and bank transfers. Which payment method would you like to use?",
    "I apologize for the inconvenience. Please provide me with more details about the error"
]

trainer = ListTrainer(chatbot)
trainer.train(conversation)


@app.route("/")
def index():
    return render_template("index.html")


@app.route("/get_response", methods=["POST"])
def get_response():
    user_input = request.form.get("user_input")
    response = chatbot.get_response(user_input).text
    return jsonify({"bot_response": response})


if __name__ == "__main__":
    app.run()

