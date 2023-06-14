<?php
    session_start();
    include('connection.php');
    require('config.php');
    \Stripe\Stripe::setVerifySslCerts(false);

    $token=$_POST['stripeToken'];

    $data=\Stripe\Charge::create(array(
        "amount"=>$_SESSION['finaltotal']*100,
        "currency"=>"pkr",
        "description"=>"payment",
        "source"=>$token,
    ));
    
    
    $cardid= $data['id'];
    $orderid=$_SESSION['orderid'];
    $userid=$_SESSION['userid'];

    $paymentquery="INSERT INTO `payment`(`order_id`, `userid`, `card_id`)
                                VALUES ('$orderid','$userid','$cardid')";
    $run_orderquery=mysqli_query($conn,$paymentquery);

    //emptying the cart as soon as the payment is made
    $_SESSION['cart']=array();
    $_SESSION['orderid'];

    echo"
    <script>
        alert('Your transaction has been completed successfully');
        window.location.href='welcome.php';
    </script>
    ";
?>