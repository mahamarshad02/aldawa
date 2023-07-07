<?php
    require('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./images/icon.png" />
    <!-- ------FONTS------ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <!-- ------BOOTSTRAP------ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- =========ICONS============== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ------SWIPER JS------ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.3.5/swiper-bundle.min.css"
        integrity="sha512-cSswotORLwhq0E9mRjme7FmZhAzRdnZQJpOdaZFZDVPwUXM2kTsS97nzH7EKd3eWMEbrPqBLAT0nPKBf0qEAcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- -----SCROLL REVEAL----- -->
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <title>MediMart</title>
</head>
<style>
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
    }
    body{
        background-color: #f7f6f6;
    }
    .navbar{
        background-color: #3883abb2;
        backdrop-filter: blur(10px);
        z-index: 100;
        width: 100%;
    }
    .dropdown-menu{
        background-color: rgba(255, 255, 255, 0.911);
        backdrop-filter: blur(10px);
        z-index: 100;
    }
    .navbar li{
        padding-left: 10px;
        padding-right: 10px;
    }
    .navbar li a{
        font-weight: bold;
        color: white;
    }
    .navbar li a:hover{
        background-color: #f7f6f6;
        color: #3883ab;
    }
    .herosection{
        display: flex;
        justify-content: center;
        
    }
    .box {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10%;
    }

header {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 10;
	width: 100%;
	display: flex;
	justify-content: space-between;
	align-items: center;
	color: #fff;
}



@media (max-width: 1000px) {
	
}
@media (max-width: 700px) {
	header {
		flex-direction: column;
	}
	header h2 {
		margin-bottom: 15px;
	}
	header .nav li {
		margin: 0 7px;
	}
}
.box .adiv{
    background-color: #ced1d3c7; 
    padding: 3%; 
    border-radius: 15px; 
    width: 50%;
}
.box {
	position: relative;
	justify-content: center;
	color: #fff;
	text-align: center;
    height: 100vh;
    /* width: 92%; */
}
.box video {
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100vh;
	object-fit: cover;
	z-index: -1;
}
.box h1 {
	margin-bottom: 15px;
	font-size: 65px;
	text-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
}
.box h3 {
	margin-bottom: 40px;
	font-size: 25px;
}
    .headerbutton {
        display: inline-block;
        /* background-color: #34cccc; */
        border: 2px solid;
        border-color: #3883ab;
        /* border-color: white; */
        color: #3883ab;
        padding: 0.75rem 1rem;
        border-radius: 0.8rem;
        font-weight: medium;
        transition: 0.4s;
    }
    .headerbutton:hover {
        /* background-color: #28a0a0; */
        background-color: #3883ab;
        /* background-color: white; */
        color: white;
    }
    @media (max-width: 950px) and (min-width:600px){
        .box .adiv{
            width: 70%;
        }
    }
    @media (max-width: 599px){
        .box .adiv{
            width: 80%;
        }
    }
@media (max-width: 800px) {
	.box {
		min-height: 600px;
	}
	.box h1 {
		font-size: 32px;
	}
	.box h3 {
		font-size: 20px;
	}
}

/* ------HOT DEALS------- */
.hotdeals{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        flex-direction: column;
        padding-top: 4%;
        padding-bottom: 3%;
    }
    .hotdeals .dealcards{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 2rem;
    }
    .hotdeals .dealcards .eachdealcard{
        background-color: #f0e9e9;
        height: 200px;
        width: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        transition: 0.5s;
        padding-left: 2%;
        padding-right: 2%;
    }
    .hotdeals .dealcards .eachdealcard:hover{
        transform: translateY(-15px);
        box-shadow: 0 40px 60px rgba(0, 0, 0, 0.5);
    }
    @media (max-width:960px) and (min-width:630px){
        .hotdeals .dealcards .eachdealcard{
            height: 210px;
            width: 150px;
        }
        
    }
    @media (max-width:629px){
        .hotdeals .dealcards .eachdealcard{
            height: 100px;
            width: 100px;
        }
        .hotdeals .dealcards .eachdealcard img{
            height: 35px;
            width: 35px;
        }
        .hotdeals .dealcards .eachdealcard h5{
            font-size: 0.6rem;
        }
        .hotdeals .dealcards .eachdealcard p{
            font-size: 0.45rem;
        }
    }
    /* -----OUR BRANDS---- */
    .brands{
        height: 50vh;
        display: grid;
	    place-items: center;
    }
    .slider{
        height: 250px;
        margin: auto;
        position: relative;
        width: 90%;
        display: grid;
        place-items: center;
        overflow: hidden;
    }
    .slide-track{
        display: flex;
        width: calc(250px * 18);
        animation: scroll 40s linear infinite;
    }
    .slide-track:hover{
        animation-play-state: paused;
    }
    @keyframes scroll{
        
        0%{
            transform: translateX(0);
        }
        100%{
            transform: translateX(calc(-250px * 9));
        }
    }

    .slide{
        height: 200px;
        width: 250px;
        display: flex;
        align-items: center;
        padding: 15px;
        perspective: 100px;
    }
    .brandpic{
        width: 150px;
        height: 150px;
        transition: transform 1s;
        
    }
    .brandpic:hover{
        transform: translateZ(20px);
    }

    @media (max-width:960px) and (min-width:630px){
        .brandpic{
            height: 100px;
            width: 100px;
        }
    }
    @media (max-width:629px){
        .brandpic{
            width: 70px;
            height: 70px;
        }
    }
    /* -----CATEGORIES---- */
    .categories{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        flex-direction: column;
        padding-top: 4%;
        padding-bottom: 3%;
    }
    .categories .categorycards{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 2rem;
    }
    .categories .categorycards a{
        text-decoration: none;
        color: white;
    }
    .categories .categorycards .each_cat_card{
        background-color: #f0e9e9;
        height: 200px;
        width: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        transition: 0.5s;
        padding-left: 2%;
        padding-right: 2%;
    }
    .categories .categorycards .each_cat_card:hover{
        transform: translateY(-15px);
        box-shadow: 0 40px 60px rgba(0, 0, 0, 0.5);
    }
    .categories .categorycards .each_cat_card .two, .four{
        color: #15314b;
    }
    .categories .categorycards .each_cat_card:hover .one{
        color: rgb(185, 45, 45);
    }
    .categories .categorycards .each_cat_card:hover .two{
        color: blue;
    }
    .categories .categorycards .each_cat_card:hover .three{
        color: orange;
    }
    .categories .categorycards .each_cat_card:hover .four{
        color: #664229;
    }


    /* -----TESTIMONIALS------ */
    /* -----SECTION-5------ */
    #section-5 {
        /* background-color: #239191; */
        background-color: #f7f6f6;
    }

    .testimonials {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 30px;
    }
    .test {
        height: 200px;
        width: 200px;
        background-color: white;
        box-shadow: 0 7px 20px 5px #00000088;
        text-align: center;
    }
    /* -----SECTION-6------ */
    .section-6 {
        position: relative;
        width: 100%;
        height: 90vh;
        display: flex;
        justify-content: center;
        align-items: center;
        /* background-color: #239191; */
        background-color: #f7f6f6;
    }

    .swiper-container {
        width: 100%;
        padding-top: 20px;
        padding-bottom: 20px;

    }
    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 400px;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.4);
        filter: blur(4px);

    }
    .swiper-slide-active {
        filter: blur(0px);

    }
    .testimonialBox {
        width: 100%;
        position: relative;
        padding: 40px;
        /* background-color: #caf7f2; */
        background-color: #3883ab;
    }
    .testimonialBox .quote {
        position: absolute;
        top: 20px;
        right: 30px;
    }
    .swiper-container-3d .swiper-slide-shadow-left,
    .swiper-container-3d .swiper-slide-shadow-left {
        background-image: none;
    }
    .test-content {
        width: 200px;
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
        background-color: #3883ab;
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
        margin: 0 20px;
        display: inline-block;
        transition: 0.5s;
        text-decoration: none;
        opacity: 0.7;
    }

    .footer .menu li a:hover {
        opacity: 1;
    }
    
</style>
<body>
    <section class="herosection">
        <header>
            <!-- ------NAVBAR------ -->
            <nav id="navbar" class="navbar navbar-expand-lg sticky-top px-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img style="width: 50px;" src="./test/newlogo.png" alt="">
                        <!-- <h3>MediMart</h3> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#head">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#categories">CATEGORIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.html">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section-5">TESTIMONIALS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contactus.html">CONTACT</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">SHOP</a>
                            </li> -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    SHOP
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a style="color: #3883ab;" class="dropdown-item" href="tablets&capsules.php">TABLETS & CAPSULES</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a style="color: #3883ab;" class="dropdown-item" href="equipment.php">MEDICAL EQUIPMENT</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a style="color: #3883ab;" class="dropdown-item" href="personalcare.php">PERSONAL CARE</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a style="color: #3883ab;" class="dropdown-item" href="syrup&suspension.php">SYRUPS & SUSPENSION</a></li>
                                    
                                    
                                </ul>
                            </li>
                            
                        </ul>
                        <!-- <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> -->
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li  class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" 
                                data-bs-toggle="dropdown" aria-expanded="false" style="border: 2px solid;
                                border-color: #f7f6f6; ">
                                    ACCOUNT
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a style="color: #3883ab;" class="dropdown-item" href="login.php">USER</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a style="color: #3883ab;" class="dropdown-item" href="adminlogin.php">ADMIN</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        <section class="box">  
            
            <video src="./test/vid1.mp4" autoplay muted loop></video>
            <div class='adiv'>
                <h1 style="color: #15314b;">MediMart</h1> 
            <h6 style="color: #15314b;">Welcome to our e-medical store, where we provide a wide range of healthcare products and
                services to meet all your medical needs. At our store, we aim to make healthcare accessible and
                convenient for everyone, from the comfort of your own home</h6>
                <div class="signupbtn">
                    <a style="text-decoration: none;" href="signup.php" class="headerbutton">Sign Up</a>
                </div>
            </div>
            
        </section>
    </section>

    <!-- ----HOT DEALS----- -->
    <section class="hotdeals" id="hotdeals">
        <div>
            <h2 style="margin: 0px 0px 0px;  font-weight: bolder; letter-spacing: 0.7rem; 
            text-align: center; padding-bottom: 5%;">HOT DEALS FOR YOU</h2>
        </div>
        <div class="dealcards">
            <div class="eachdealcard" style="background-color: #3883ab;">
                <img width="64" height="64" src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/external-cashback-black-friday-cyber-monday-flaticons-flat-flat-icons-2.png" alt="external-cashback-black-friday-cyber-monday-flaticons-flat-flat-icons-2"/>
                <h5 style="text-align: center;color: white; font-weight: bold;">2.5% Cashback</h5>
                <p style="text-align: center; color: white;">Get money back on your purchases!</p>
            </div>
            <div class="eachdealcard">
                <img width="48" height="48" src="https://img.icons8.com/color/48/return.png" alt="return"/>
                <h5 style="text-align: center;font-weight: bold;">Return back Policy</h5>
                <p style="text-align: center; "> Hassle-free returns for your peace of mind.</p>
            </div>
            <div class="eachdealcard" style="background-color: #3883ab;">
                <img width="48" height="48" src="https://img.icons8.com/color/48/wallet--v1.png" alt="wallet--v1"/>
                <h5 style="text-align: center;color: white; font-weight: bold;">Save money</h5>
                <p style="text-align: center; color: white;">Unlock savings on every purchase!</p>
            </div>
        </div>
        
    </section>

    

    <!-- -----CATEGORIES----- -->
    <section class="categories" id="categories">
        <div>
            <h2 style="margin: 0px 0px 0px;  font-weight: bolder; letter-spacing: 0.7rem; 
            text-align: center; padding-bottom: 10%;">CATEGORIES</h2>
        </div>
        <div class="categorycards">
            <a href="tablets&capsules.php">
                <div class="each_cat_card" style="background-color: #3883ab;">
                    <img width="64" height="64" src="https://img.icons8.com/external-justicon-flat-justicon/64/external-medicine-hospital-justicon-flat-justicon.png" alt="external-medicine-hospital-justicon-flat-justicon"/>
                    <h5 style="color: white; font-weight: bold;">Tablets & Capsules</h5>
                    <i class="fa fa-chevron-right one" style="font-size:24px"></i>
                </div>
            </a>
            
            <a href="equipment.php">
                <div class="each_cat_card">
                    <img width="64" height="64" src="https://img.icons8.com/fluency/96/tonometer.png" alt="tonometer"/>
                    <h5 style="color:#3883ab;font-weight: bold;">Medical Equipments</h5>
                    <i class="fa fa-chevron-right two" style="font-size:24px;"></i>
                </div>
            </a>
            
            <a href="">
                <div class="each_cat_card" style="background-color: #3883ab;">
                    <img width="64" height="64" src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/external-personal-care-cbd-oil-flaticons-flat-flat-icons.png" alt="external-personal-care-cbd-oil-flaticons-flat-flat-icons"/>
                    <h5 style=" font-weight: bold;">Personal Care</h5>
                    <i class="fa fa-chevron-right three" style="font-size:24px"></i>
                </div>
            </a>

            <a href="syrup&suspension.php">
                <div class="each_cat_card">
                    <img width="62" height="62" src="https://img.icons8.com/external-rabit-jes-flat-rabit-jes/62/external-syrup-pharmacy-rabit-jes-flat-rabit-jes.png" alt="external-syrup-pharmacy-rabit-jes-flat-rabit-jes"/>
                    <h5 style="color:#3883ab; font-weight: bold;">Syrups & Suspensions</h5>
                    <i class="fa fa-chevron-right four" style="font-size:24px; "></i>
                </div>
            </a>
            
        </div>
        
    </section>

    <!-- ----OUR BRANDS------ -->
    <section class="brands" id="brands">
        <div>
            <h2 style="margin: 0px 0px 0px;  font-weight: bolder; letter-spacing: 0.7rem; 
            text-align: center; padding-bottom: 5%;">OUR BRANDS</h2>
        </div>
        <div class="slider">
            <div class="slide-track">
            <?php 
                $query= "SELECT * FROM `brand`";
                $runquery=mysqli_query($conn,$query);
                while($result=mysqli_fetch_array($runquery))
                {?>
                    <div>
                        <img class="brandpic" src="<?php echo $result['brand_pic'] ?>" alt="">
                    </div>
                <?php 
                }
            ?>
            
            <?php 
                $query= "SELECT * FROM `brand`";
                $runquery=mysqli_query($conn,$query);
                while($result=mysqli_fetch_array($runquery))
                {?>
                    <div>
                        <img class="brandpic" src="<?php echo $result['brand_pic'] ?>" alt="">
                    </div>
                <?php 
                }
            ?>

            <?php 
                $query= "SELECT * FROM `brand`";
                $runquery=mysqli_query($conn,$query);
                while($result=mysqli_fetch_array($runquery))
                {?>
                    <div>
                        <img class="brandpic" src="<?php echo $result['brand_pic'] ?>" alt="">
                    </div>
                <?php 
                }
            ?>
        
        
            </div>
        
        </div>
    </section>

    <!-- -----TESTIMONIALS----- -->
    <section>
        <!-- ------SECTION-5------ -->
        <section id="section-5">
            <div style="text-align: center;">
                <h1 style="margin: 0px 0px 0px; padding-top: 40px; font-weight: bolder; letter-spacing: 0.5rem; ">
                    TESTIMONIALS</h1>
            </div>
        </section>
        <!-- -----SECTION-6----- -->
        <section  class="section-6">
            <div style="width: 90%;" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            <img class="quote" src="https://img.icons8.com/ios/100/null/quote-right.png" />
                            <div class="test-content">
                                <p style="margin-top: 85px;color:white;">"I am very satisfied with the packaging.Very few
                                    services deliver the product in one piece"</p>
                                <p style="color: white;">Aliza Suhail</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            <img class="quote" src="https://img.icons8.com/ios/100/null/quote-right.png" />
                            <div class="test-content">
                                <p style="margin-top: 85px; color: white;">"I am very satisfied with the packaging. Very few
                                    services deliver the product in one piece"</p>
                                <p style="color: white;">Rafia Shakeel</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            <img class="quote" src="https://img.icons8.com/ios/100/null/quote-right.png" />
                            <div class="test-content">
                                <p style="margin-top: 85px; color: white;">"Living in Pakistan very few stores offer
                                    online medical servies from around the world. This is a great platform to find medicines
                                    at ease"</p>
                                <p style="color: white;">Maryam Khalid</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            <img class="quote" src="https://img.icons8.com/ios/100/null/quote-right.png" />
                            <div class="test-content">
                                <p style="margin-top: 85px; color: white;">"The products are 100% original. Highly
                                    recommend"</p>
                                <p style="color: white;">Zainab Kashif</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            <img class="quote" src="https://img.icons8.com/ios/100/null/quote-right.png" />
                            <div class="test-content">
                                <p style="margin-top: 85px; color: white;">"I am very satisfied with the packaging. Very few
                                    services deliver the product in one piece"</p>
                                <p style="color: white;">Maham Arshad</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </section>
    
    <!-- -----FOOTER------ -->
    <section class="section-7">
        <div class="footer py-5">
            <ul class="socialicon">
                <li><a href="https://www.facebook.com/profile.php?id=100093626680699" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="https://www.linkedin.com/in/al-dawa-e-medical-store-6a951527b" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/invites/contact/?i=1jcbgfsaz9wrc&utm_content=rs9sqzn" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <ul class="menu">
                <li><a href="index2.html">Home</a></li>
                <li><a href="aboutus.html">About us</a></li>
                <li><a href="index2.html#section-5">Testimonials</a></li>
                <li><a href="contactus.html">Contact</a></li>
            </ul>
            <p style="color: white; opacity: 0.7;">Copyright © 2023 AL-DAWA | Powered by Al-dawa medicos</p>
        </div>

    </section>

    <!-- ------SWIPER START------ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.3.5/swiper-bundle.min.js"
        integrity="sha512-WyDLvA6BFfISVB1uUsGN4kmN4uS+IrBdUtva0iTGRGINnThBfzY/kAKffuFXkwKDqpzlgziZFyM/YaUwPUiHnA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: true,
            },
            loop: true,
        });
    </script>
    <!-- -----SWIPER END------ -->

    <!-- -----SCROLL ANIMATIONS---- -->
    <script>
        

        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 400
            });
        ScrollReveal().reveal('.adiv h1',{delay:400, origin:'top'});

        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 400
            });
        ScrollReveal().reveal('.adiv h6',{delay:400, origin:'top'});

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
        ScrollReveal().reveal('.dealcards',{delay:400, origin:'right'});

        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 400
            });
        ScrollReveal().reveal('.categorycards',{delay:400, origin:'left'});

        ScrollReveal({
                reset:true,
                distance: '-60px',
                duration: 2500,
                delay: 300
            });
        ScrollReveal().reveal('.swiper-container',{delay:300, distance: '0px',opacity: 0});

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