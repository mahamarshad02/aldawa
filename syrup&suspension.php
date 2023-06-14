<?php
    session_start();
    include('connection.php');
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
    
    <!-- -----SCROLL REVEAL----- -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- =========ICONS============== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <title>Al-Dawa</title>
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
    /* ------MEDICINE----- */
    .medicine h3{
        font-weight: bold;
        padding-left: 2%;
        padding-top: 2%;
    }
    /* .categories{
        background-color: #239191;
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
    /* .categories_cards .category_box{
        position: relative;
        width: 230px;
        height: 230px;
        box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
                    inset -5px -5px 15px rgba(255, 255, 255, 0.1),
                    5px 5px 15px rgba(0, 0, 0, 0.3),
                    -5px -5px 15px rgba(255, 255, 255, 0.1);
        border-radius: 15px;

    } */
    .categories_cards  .card{
        position: relative;
        width: 200px;
        height: 200px;
        /* background: #29a8a8; */
        margin: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.5s;
    }
    /* .categories_cards .category_box .card:hover{
        transform: translateY(-30px);
        box-shadow: 0 40px 60px rgba(0, 0, 0, 0.5);
    } */
    /* .categories_cards .category_box .card:hover .categorytxt h5 {
        color: white;
        text-align: center;
    } */
    /* .categories_cards .category_box .card:hover .categorytxt i {
        color: white;
    } */
    .categories_cards .card .categorytxt{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        
    }
    .categories_cards .card .categorytxt h5{
        color: black;
        text-align: center;
    }  

    .mycards{
        position: relative;
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        margin: 10px 0;
        gap: 2rem;
    }

    .mycards .card{
        border: 1px solid #15314b;
        position: relative;
        width: 250px;
        height: 350px;
        margin: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .mycards .card .content{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .mycards .card .content .imgbox{
        position: relative;
        height: 150px;
        width: 150px;
        overflow: hidden;
        font-size: 100px;
        color: #fff;
        justify-content: center;
        align-items: center;
    }
    .mycards .card .content .imgbox img{
        width: 100%;
        height: 100%;
        position: absolute;
    }
    .mycards .card .content .txtbox{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        flex-direction: column;
    }
    .mycards .card .content .txtbox h5{
        /* text-transform: uppercase; */
        text-align: center;
    }
    .btn{
        border: 1px solid #15314b;
        transition: 0.4s;
    }
    .btn:hover{
        background-color: #15314b;
        color: white;
    }
    @media screen and (max-width:605px) {
        .mycards .card{
            width: 150px;
            height: 290px;
            margin: 5px;
        }
        .mycards .card .content .imgbox{
            height: 90px;
             width: 100px;
        }
        .mycards .card .content .txtbox h5{
            font-size: 1rem;
        }
    } */
</style>
<body>
    <section class="header">
        <!-- ------NAVBAR------ -->
        <?php 
            if(isset($_SESSION['phoneno']))
            {?>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SHOP
                            </a>
                            <ul class="dropdown-menu">
                                <li><a style="color: #15314b;" class="dropdown-item" href="tablets&capsules.php">TABLETS & CAPSULES</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a style="color: #15314b;" class="dropdown-item" href="equipment.php">MEDICAL EQUIPMENT</a></li>
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
            <?php
            }
            else
            {?>
                <nav id="navbar" class="navbar navbar-expand-lg sticky-top px-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img style="width: 100%;" src="images/logo2.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#categories">CATEGORIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#section-4">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#section-5">TESTIMONIALS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#contactus">CONTACT</a>
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
                                <li><a style="color: #15314b;" class="dropdown-item" href="syrup&suspension.php">SYRUPS & SUSPENSION</a></li> 
                            </ul>
                        </li>
                        
                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                    
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ACCOUNT
                            </a>
                            <ul class="dropdown-menu">
                                <li><a style="color: #15314b;" class="dropdown-item" href="login.php">USER</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a style="color: #15314b;" class="dropdown-item" href="adminlogin.php">ADMIN</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
            <?php
            }
        ?>
    </section>

    <section class="medicine">
        <div class="py-3 px-5 text-center">
            <h3 style="font-family: 'Dancing Script', cursive;letter-spacing:2px;">Shop > Syrups & Suspension</h3>
        </div>
        <div class="mycards">
            <?php
                $query1 = "SELECT * FROM product WHERE category_id = 4";
                $result = mysqli_query($conn,$query1);
                while($result2=mysqli_fetch_array($result))
                {
                    ?>
                        <div class="card">
                            <div class="content">
                                <div class="imgbox">
                                    <img style="width: 100%; height: 100%;" src="<?php echo $result2['product_pic'] ?>"/>
                                </div>
                                <div class="txtbox py-3">
                                    <h5><?php echo $result2['product_name']?></h5>
                                    <p>Rs. <?php echo $result2['price'] ?></p>
                                    <form action="individualproduct.php" method="post">
                                        <input type="hidden" name="product_id" value="<?php echo $result2['product_id'] ?>">
                                        <input type="submit" name="add" class="btn" value="View More">
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
            
          <!-- <div class="card">
                <div class="content">
                    <div class="imgbox">
                        <img style="width: 100%; height: 100%;" src="./images/pic.png"/>
                    </div>
                    <div class="txtbox py-3">
                        <h5>Panadol 500Mg Tablets</h5>
                        <p>Rs. 200</p>
                        <form action="shopindividual.php" method="post">
                            <input type="submit" name="add" class="btn btn-outline-danger" value="View More">
                        </form>
                    </div>
                </div>
          </div>
          <div class="card">
                <div class="content">
                    <div class="imgbox">
                        <img style="width: 100%; height: 100%;" src="./images/pic.png"/>
                    </div>
                    <div class="txtbox py-3">
                        <h5>Panadol 500Mg Tablets</h5>
                        <p>Rs. 200</p>
                        <form action="shopindividual.php" method="post">
                            <input type="submit" name="add" class="btn btn-outline-danger" value="View More">
                        </form>
                    </div>
                </div>
          </div>
          <div class="card">
                <div class="content">
                    <div class="imgbox">
                        <img style="width: 100%; height: 100%;" src="./images/pic.png"/>
                    </div>
                    <div class="txtbox py-3">
                        <h5>Panadol 500Mg Tablets</h5>
                        <p>Rs. 200</p>
                        <form action="shopindividual.php" method="post">
                            <input type="submit" name="add" class="btn btn-outline-danger" value="View More">
                        </form>
                    </div>
                </div>
          </div> -->
          
        </div>

    </section>

    <!-- -----BOOTSTRAP------ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
</body>
</html>