<?php
    include "connection.php";
    session_start();
    if(!isset ($_SESSION['name']) && isset($_SESSION['phoneno']) && $_SESSION['loggedin']==true){
        echo"
            <script>
                alert('You must login first');
                window.location.href= 'login.php';
            </script>";
    }
    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./images/icon.png" />
    <!-- ------BOOTSTRAP------ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- ------FONTS------ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <!-- GOogle fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    
    <!-- ------SWIPER JS------ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.3.5/swiper-bundle.min.css"
        integrity="sha512-cSswotORLwhq0E9mRjme7FmZhAzRdnZQJpOdaZFZDVPwUXM2kTsS97nzH7EKd3eWMEbrPqBLAT0nPKBf0qEAcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- -----SCROLL REVEAL----- -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- =========ICONS============== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Aldawa</title>
</head>
<style>
    *{
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
    }
    /* -----HEADER------ */
    .navbar{
        background-color: #15314b;
    }
    .navbar li{
        padding-left: 10px;
        padding-right: 10px;
    }
    .navbar li a{
        font-weight: bold;
        color: white
    }
    /* for sticky navbar */
    .sticky { 
        position: fixed;
        /* top: 0; */
        width: 100%;
    }
    .sticky2{
        margin-top: 86px;
    }
    
    .head{
        background-image: url("./images/bg16.png");
        height: 90vh;
        width: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        justify-content: center;
        /* width: 90%; */
        display: flex;
        flex-wrap: wrap;
        margin: auto;
        gap: 40px;
        padding-top: 2%;
        /* background-color: #D0F0EB; */
        /* background-color: white; */
        /* height: 100%; */
        padding-bottom: 5%;
    }
    .head-content{
        width: 500px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .head img{
        width: 90%;
    }
    .talk{
        width: 500px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        /* flex-direction: column; */
    }
    .headertxt{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .headerbutton {
        display: inline-block;
        border: 2px solid;
        border-color: #15314b;
        background-color: #AED3EB;
        color: black;
        padding: 0.75rem 1rem;
        border-radius: 0.8rem;
        font-weight: medium;
        transition: 0.4s;
    }
    .headerbutton:hover {
        background-color: #15314b;
        color: white;
    }
    /* -----CATEGORIES------ */
    .categories{
        /* background-color: #239191; */
        /* background-color: #AED3EB; */
        background-color: white;
    }
    .category{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        
    }
    .category_heading{
        text-align: center;
        padding-top: 5%;
    }
    .categories_cards{
        position: relative;
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        margin: 40px 0;
        gap: 3rem;
    }
    .categories_cards .category_box{
        position: relative;
        width: 230px;
        height: 230px;
        background-color: #AED3EB;
        box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
                    inset -5px -5px 15px rgba(255, 255, 255, 0.1),
                    5px 5px 15px rgba(0, 0, 0, 0.3),
                    -5px -5px 15px rgba(255, 255, 255, 0.1);
        border-radius: 15px;

    }
    .categories_cards .category_box .card{
        position: absolute;
        width: 200px;
        height: 200px;
        /* background: #29a8a8; */
        background: #15314bcb;
        margin: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.5s;
    }
    .categories_cards .category_box .card:hover{
        background-color: #15314b;
        transform: translateY(-30px);
        box-shadow: 0 40px 60px rgba(0, 0, 0, 0.5);
    }
    .categories_cards .category_box .card:hover .categorytxt h5 {
        color: white;
        text-align: center;
    }
    .categories_cards .category_box .card:hover .categorytxt i {
        color: white;
    }
    .categories_cards .category_box .card .categorytxt{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        
    }
    .categories_cards .category_box .card .categorytxt h5{
        color: white;
        text-align: center;
    }  

    /* -----CONTACT US----- */
    .contact {
        justify-content: center;
        width: 90%;
        display: flex;
        flex-wrap: wrap;
        /* margin: auto; */
        gap: 10px;
    }

    .contact__title {
        text-align: center;
        margin-bottom: 30px;

    }
    .contact__info {
        display: flex;
        gap: 30px;
    }
    .contact__button {
        color: white;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        column-gap: 0.25rem;
        cursor: pointer;
    }
    .contact_button:hover .contact_button-icon {
        transform: translateX(0.25rem);
    }
    .talk {
        width: 400px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .content {
        width: 600px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .contact-form {
        width: 80%;
    }
    .content h6 {
        font-size: 0.8rem;
        margin-top: 1rem;
        margin-bottom: 0.3rem;
    }
    .content .contact-form input,
    .content .contact-form textarea {
        width: 100%;
        background-color: white;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
        padding: 10px;
        font-size: 0.9rem;
        border-radius: 0.4rem;
        border: 1px solid black;
    }
    .content .contact-form textarea {
        resize: none;
        height: 200px;
    }
    .content .contact-form .send {
        border: none;
        /* background-color: #239191; */
        background-color: #AED3EB;
        border: #15314b 2px solid;
        color: #15314b;
        outline: none;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        margin-top: 1rem;
        width: 100%;
    }
    .content .contact-form .send:hover {
        transition: 0.4s;
        /* background-color: cadetblue;
        color: white; */
        background-color: #15314b;
        color: white;
    }
    .map {
        border: 0;
        margin: 1px;
        border-radius: 10px;
        width: 400px;
        height: 500px;
    }
    .contactus {
        /* background-color: #bef8f3; */
        background-color: white;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: large;
        font-weight: 900;
    }

    /* -----FOOTER------ */
    .section-7 {
        display: flex;
        justify-content: flex-end;
        align-items: flex-end;
    }

    .footer {
        position: relative;
        width: 100%;
        /* background-color: #239191; */
        background-color: #15314b;
        min-height: 100px;
        padding: 20px 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .footer .socialicon,
    .footer .menu {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px 0;
        flex-wrap: wrap;
    }

    .footer .socialicon li,
    .footer .menu li {
        list-style: none;
    }

    .footer .socialicon li a {
        font-size: 2em;
        color: white;
        margin: 0 20px;
        display: inline-block;
        transition: 0.5s;
    }
    .footer .socialicon li a::before{
        font-size: 2em;
        color: white;
        margin: 0 20px;
        display: inline-block;
        transition: 0.5s;
    }
    .footer .socialicon li a:hover {
        transform: translateY(-10px);
    }

    .footer .menu li a {
        font-size: 1.2em;
        font-weight: bold;
        color: white;
        margin: 0 10px;
        display: inline-block;
        transition: 0.5s;
        text-decoration: none;
        opacity: 0.7;
    }

    .footer .menu li a:hover {
        opacity: 1;
    }
    /* ----------MEDIA QUERIES FOR HEAD-------------- */
    @media screen and ( max-width: 840px){
        .head{
            background-image: linear-gradient(#AED3EB,#AED3EB);
        }
        .head-content{
            display: none;
        }
    }
</style>
<body>
    <!-- -----HEADER----- -->
    <section class="header">
        <!-- ------NAVBAR------ -->
        <nav id="navbar" class="navbar navbar-expand-lg sticky-top px-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img style="width: 100%;" src="images/logo2.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="welcome.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="userdashboard.php">DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="welcome.php#categories">CATEGORIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="welcome.php#contactus">CONTACT</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">SHOP</a>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SHOP
                            </a>
                            <ul class="dropdown-menu">
                                <li><a style="color: #15314b;" class="dropdown-item" href="tablets&capsules.php">TABLETS & CAPSULES</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a style="color: #15314b;" class="dropdown-item" href="equipment.php">MEDICAL EQUIPMENT</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a style="color: #15314b;" class="dropdown-item" href="personalcare.php">PERSONAL CARE</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a style="color: #15314b;" class="dropdown-item" href="syrup&suspension.php">SYRUPS & SUSPENSION</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mycart.php">
                                <i class="fa fa-shopping-cart" style="font-size: 24px;" aria-hidden="true"></i>
                                (<?php 
                                    if(isset($_SESSION['cart'])){
                                        echo count($_SESSION['cart']);
                                    }
                                    else{
                                        echo'0';
                                    }
                                 ?>)
                            </a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- -----HEAD----- -->
        <div id ='head' class="head">
            <div class="head-content reveal1">
                <!-- <img src="images/headerimg3.png" alt=""> -->
                <!-- <video style="width: 550px;" class="video1" playsinline autoplay muted >
                    <source src="./images/test5.mp4">
                </video> -->
            </div>
            <div class="talk reveal1">
                <div class="headertxt">
                    <h1 style="margin: 0px 0px 0px; padding-top: 20px; font-weight: bold; 
                    letter-spacing: 0.2rem; text-align: center; font-size: 4rem; font-family: 'Dancing Script', cursive;">
                    Welcome <?php echo $_SESSION['name'] ?></h1>
                    <div>
                        <a href="userdashboard.php"><button class="headerbutton">Dashboard</button></a>
                    </div>
                    
                </div>
            </div>
      </div>        
    </section>

    <!-- -----CATEGORIES----- -->
    <section class="categories" id="categories">
        <h2 class="category_heading"
            style="margin: 0px 0px 0px; padding-top: 100px; font-weight: bolder; letter-spacing: 0.7rem; 
            text-align: center;">CATEGORIES</h2>
        <div class="category"> 
            <div class="categories_cards">
                <div class="category_box">
                    <a href="tablets&capsules.php" style="color: black;">
                        <div class="card">
                            <div class="categoryimg">
                                <img width="64" height="64" src="https://img.icons8.com/external-justicon-flat-justicon/64/external-medicine-hospital-justicon-flat-justicon.png" alt="external-medicine-hospital-justicon-flat-justicon"/>
                                <!-- <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/pill.png" alt="pill"/> -->
                            </div>
                            <div class="categorytxt" style="margin-top: 10%;">
                                <h5>Tablets & Capsules</h5>
                                <i class="fa fa-chevron-right" style="font-size:24px"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="category_box">
                    <a href="equipment.php" style="color: black;">
                        <div class="card">
                            <div class="categoryimg">
                                <img width="64" height="64" src="https://img.icons8.com/fluency/96/tonometer.png" alt="tonometer"/>
                                <!-- <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/pill.png" alt="pill"/> -->
                            </div>
                            <div class="categorytxt" style="margin-top: 10%;">
                                <h5>Medical Equipments</h5>
                                <i class="fa fa-chevron-right" style="font-size:24px"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="category_box">
                    <a href="personalcare.php" style="color: black;">
                        <div class="card">
                            <div class="categoryimg">
                                <img width="64" height="64" src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/external-benefits-activism-flaticons-flat-flat-icons.png" alt="external-benefits-activism-flaticons-flat-flat-icons"/>
                                <!-- <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/pill.png" alt="pill"/> -->
                            </div>
                            <div class="categorytxt" style="margin-top: 10%;">
                                <h5>Personal Care & Hygiene</h5>
                                <i class="fa fa-chevron-right" style="font-size:24px"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="category_box">
                    <a href="syrup&suspension.php" style="color: black;">
                        <div class="card">
                            <div class="categoryimg">
                                <img width="62" height="62" src="https://img.icons8.com/external-rabit-jes-flat-rabit-jes/62/external-syrup-pharmacy-rabit-jes-flat-rabit-jes.png" alt="external-syrup-pharmacy-rabit-jes-flat-rabit-jes"/>
                            </div>
                            <div class="categorytxt" style="margin-top: 10%;">
                                <h5>Syrups & Suspensions</h5>
                                <i class="fa fa-chevron-right" style="font-size:24px"></i>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </section>

     <!-- -----CONTACT US------ -->
    <section id="contactus" class="contactus p-5">
        <h1
            style="margin: 0px 0px 0px; padding-top: 20px; font-weight: bolder; letter-spacing: 0.5rem; text-align: center;">
            CONTACT US</h1>
        <div class="contact py-4">
            <div class="content reveal1">
                <h4> Write us your message</h4>
                <form action="https://formspree.io/f/mbjepwpj" method="post" class="contact-form">
                    <h6>Name</h6>
                    <input type="text" name="name" placeholder="Your Name">
                    <h6>Email Address</h6>
                    <input type="text" name="email" placeholder="Email Address">
                    <h6>Message</h6>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Write Message Here..."></textarea>
                    <input type="submit" name="send" id="" value="Send" class="send">
                </form>
            </div>

            <div class="contact-card mt-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d924236.0498210717!2d67.1554619!3d25.1932024!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh!5e0!3m2!1sen!2s!4v1680745136405!5m2!1sen!2s"
                    class="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        </div>
    </section>

    <!-- -----FOOTER------ -->
    <section class="section-7">
        <div class="footer py-5">
            <ul class="socialicon">
                <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                <li><a href=""><i class="fa fa-instagram"></i></a></li>
            </ul>
            <ul class="menu">
                <li><a href="welcome.php#header">Home</a></li>
                <li><a href="tablets&capsules.php">Tablets & Capsules</a></li>
                <li><a href="equipment.php">Medical Equipment</a></li>
                <li><a href="personalcare.php">Personal Care</a></li>
                <li><a href="syrup&suspension.php">Syrups & Suspension</a></li>
                <li><a href="welcome.php#categories">Categories</a></li>
                <li><a href="welcome.php#contactus">Contact</a></li>
            </ul>
            <p style="color: white; opacity: 0.7;">Copyright © 2023 AL-DAWA | Powered by Al-dawa medicos</p>
        </div>

    </section>
    

    <!-- ------SCRIPTS------ -->

    <script>
        // ScrollReveal({
        //         reset:true,
        //         distance: '60px',
        //         duration: 2500,
        //         delay: 400
        //     });
        // ScrollReveal().reveal('.head-content',{delay:400, origin:'left'});

        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 400
            });
        ScrollReveal().reveal('.talk',{delay:400, origin:'right'});

        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 400
            });
        ScrollReveal().reveal('.signupbtn',{delay:400, origin:'bottom'});

        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 400
            });
        ScrollReveal().reveal('.swiper-container',{delay:400, origin:'bottom'});

        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 300
            });
        ScrollReveal().reveal('.about',{delay:300, distance: '0px',opacity: 0});

        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 300
            });
        ScrollReveal().reveal('.categories_cards',{delay:300, distance: '0px',opacity: 0});

        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 400
            });
        ScrollReveal().reveal('.aboutcontent',{delay:400, origin:'left'});

        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 400
            });
        ScrollReveal().reveal('.aboutpara',{delay:400, origin:'right'});

        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 400
            });
        ScrollReveal().reveal('.content',{delay:400, origin:'left'});

        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 400
            });
        ScrollReveal().reveal('.contact-card',{delay:400, origin:'right'});

        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 400
            });
        ScrollReveal().reveal('.section-7',{delay:400, origin:'bottom'});

    </script>

    <!-- -----BOOTSTRAP------ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
</body>
</html>