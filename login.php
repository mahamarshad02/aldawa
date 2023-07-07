<?php
    include "connection.php";
    session_start();
    if(isset($_SESSION['phoneno'])){
        header('location: welcome.php');
    }
    if(isset($_POST['login']))
    {
        $phoneno=$_POST["phoneno"];
        $password=$_POST["password"];
        $query= "SELECT * FROM `registered_users` WHERE phoneno ='$phoneno' AND password='$password'";
        $result = mysqli_query($conn, $query);
        $name=mysqli_fetch_array($result);
        $num = mysqli_num_rows($result);
        if($num ==1)
        {
            $_SESSION['userid']=$name['userid'];
            $_SESSION['loggedin']=true;
            $_SESSION['phoneno']=$phoneno;
            $_SESSION['name']=$name['name'];
            $_SESSION['cart']=array();
            header('location: welcome.php');
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
    :root {
        --gradient-percent: 0%;
    }

    body {
        /* background-image: url("./images/loginbg2.png"); */
        background: linear-gradient(90deg, rgba(0, 49, 84, .8) var(--gradient-percent), rgba(154, 198, 229, 1) 100%);
        padding-bottom: 5%;
        
        height: 100vh;
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
        height: 580px;
        /* margin-left: 480px;
        margin-top: 100px; */
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
        margin-bottom: 5px;
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
        margin-top: -60px;
        /* margin-left: 197px; */
    }
    #loginform{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 100%;
    }
    .nav{
        margin-left: 134px;
    }
    .nav a{
        padding: 0px 20px;
        font-weight: bold;
        text-decoration: none;
        color: gray;
    }
    #indicator{
        width: 100px;
        border: none;
        background: #ee9696;
        height: 3px;
        margin-top: 5px;
        margin-left: 19px;
        transform: translateX(100px);
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
</style>
<body>
    <?php
        // if($loginalert)
        // {
        //     echo'<p id="showalert" style="background-color : #e4fccc;">You are logged in.</p>';
        // }
        // if($loginerror)
        // {
        //     echo'<p id="showalert" style="background-color : #fb6767;">Incorrect credentials.</p>';
        // }
    ?>
    <div class="myform">
        <div class="formimg">
            <img src="./images/loginicon2.png" alt="">
        </div>
        
        <div class="formcontent">
            <h1 style="text-align:center;">WELCOME BACK !</h1>
            <h3 style="text-align:center;">Login below to explore more</h3>
            <form id="loginform" action="login.php" method="post">
                
                <p style="margin-block-end: 0em;">Phone No (ex:+923xxxxxxxxx)</p>
                <input class="a" for="phoneno" type="tel" name="phoneno" 
                placeholder="+923000000000" pattern="[\+]\d{2}\d{10}" 
                maxlength = "13" minlength = "13" required>


                <p style="margin-block-end: 0em;">Password</p>
                <input class="a" for="password" type="password" name="password" placeholder="Enter Password" required>
               
                <input style="margin-block-start: 2em;" name="login" class="a send" type="submit" value="Login"><br>
                <p>Don't have an account? <a href="signup.php">Sign up</a></p>
                <p><a href="index2.php">Click here </a> to return to home page.</p>
            </form>
        </div>
        
    </div>

    <script>
        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 300
            });
        ScrollReveal().reveal('.formcontent',{delay:300, distance: '0px',opacity: 0});
    </script>
</body>
</html>