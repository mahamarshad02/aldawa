<?php
    include "connection.php";
    if (isset($_POST['signup'])) {
        $phoneno = $_POST['phoneno'];
        $name= $_POST['name'];
        $password= $_POST['password'];
        $cpassword=$_POST['cpassword'];
        $user_exists_query = "SELECT * FROM `registered_users` WHERE phoneno='$phoneno'";
        $result = mysqli_query($conn, $user_exists_query);
    
        if ($result) {
            if (mysqli_num_rows($result) > 0) #executed if phoneno already taken
            {
                $result_fetch = mysqli_fetch_assoc($result);
                if ($result_fetch['phoneno'] == $_POST['phoneno']) {
                    echo "
                        <script>
                            alert('Phone No. already taken');
                            window.location.href='signup.php';
                        </script>    
                    ";
                }
            } else #executed if no one has taken username or email
            {
                $phoneno = $_POST["phoneno"];
                $name= $_POST['name'];
                $password= $_POST['password'];
                if ($password == $cpassword) {
                    $query = "INSERT INTO `registered_users`(`phoneno`, `name`, `password`, `datetime`) VALUES ('$phoneno','$name','$password',current_timestamp())";
                    $result = mysqli_query($conn, $query);
                    echo "
                        <script>
                            alert('You have registered successfully. You can now login.');
                            window.location.href='login.php';
                        </script>
                    ";
                    
                } else {
                    echo "
                        <script>
                            alert('Password does not match. Make sure you enter same password.');
                            window.location.href='signup.php';
                        </script>
                    ";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./images/icon.png" />
    <!-- -----FONTS------ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <!-- -----SCROLL REVEAL----- -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Al-Dawa</title>
</head>
<style>
    * {
        overflow-x: hidden;
        font-family: 'Montserrat', sans-serif;
    }

    body {
        background-image: url("./images/loginbg2.png");
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .myform {
        background-color: white;
        opacity: 0.8;
        width: 40%;
        height: 640px;
        /* margin-left: 480px;
        margin-top: 100px; */
        border-radius: 10px;
        /* position: relative; */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 3%;
    }

    .a {
        width: 90%;
        height: 40px;
        margin-bottom: 10px;
        border-radius: 6px;
    }

    .send{
        transition: 0.4s;
        background-color: #AED3EB;
        color: black;
    }
    .send:hover{
        background-color: #15314b;
        color: white;
        opacity: 1;
    }
    .formimg{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    img {
        position: absolute;
        border-radius: 50px;
        height: 100px;
        width: 100px;
        margin-top: -10px;
    }
    /* .formcontent{
        display: flex;
        align-items: center;
        justify-content: center;
    } */
    #loginform{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 100%;
    }
    @media screen and (max-width:900px) {
        .myform{
            width: 80%;
            opacity: 0.9;
        }
    }
    @media screen and (max-width:401px) {
        .myform{
            opacity: 0.9;
        }
        #loginform input{
            width: 77%;
        }
    }
</style>
<body>
<div class="myform">
        <div class="formimg">
            <img src="./images/loginicon2.png" alt="">
        </div>
        
        <div class="formcontent">
            <h1 style="text-align:center; margin-top:55px;">HEY THERE !</h1>
            <form id="loginform" action="signup.php" method="post">

                <p style="margin-block-end: 0em;">Phone No (ex:+923xxxxxxxxx)</p>
                <input class="a" for="phoneno" type="tel" name="phoneno" 
                placeholder="+923000000000" pattern="[\+]\d{2}\d{10}" required>

                <p style="margin-block-end: 0em;">Name</p>
                <input class="a" for="name" type="text" name="name" 
                placeholder="Your Name" required>
                
                <p style="margin-block-end: 0em;">Password</p>
                <input class="a" for="password" type="password" name="password" placeholder="Enter Password">
                <p style="margin-block-end: 0em;">Confirm Password</p>
                <input class="a" for="cpassword" type="password" name="cpassword" placeholder="Confirm Password">
                <p style="margin-block-start: 0em;">Make sure to enter same password.</p>
                <input class="a send" name="signup" type="submit" value="Signup"><br>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
        
    </div>
    
    <script>
        ScrollReveal({
                reset:true,
                duration: 2500,
                delay: 300
            });
        ScrollReveal().reveal('.formcontent',{delay:300, distance: '0px',opacity: 0});
    </script>
</body>
</html>