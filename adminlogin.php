<?php
    include "connection.php";
    if(isset($_POST['login']))
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        $query= "SELECT * FROM `admin` WHERE username ='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);
        $name=mysqli_fetch_array($result);
        $num = mysqli_num_rows($result);
        if($num ==1)
        {
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['adminusername']=$username;
            header('location: adminwelcome.php');
        }
    }
    //session_destroy();
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
        opacity: 0.7;
        width: 40%;
        height: 580px;
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
    <div class="myform">
        <div class="formimg">
            <img src="./images/loginicon2.png" alt="">
        </div>
        
        <div class="formcontent">
            <h1 style="text-align:center;">WELCOME ADMIN !</h1>
            <form id="loginform" action="adminlogin.php" method="post">
                
                <p style="margin-block-end: 0em;">Admin Username</p>
                <input class="a" for="username" type="text" name="username" 
                placeholder="Enter username" required>


                <p style="margin-block-end: 0em;">Password</p>
                <input class="a" for="password" type="password" name="password" placeholder="Enter Password" required>
               
                <input style="margin-block-start: 2em;" name="login" class="a send" type="submit" value="Login"><br>
                
                <p><a href="index.html">Click here </a> to return to home page.</p>
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