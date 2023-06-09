<?php
    require('config.php');
    session_start();
    include('connection.php');
    $userid=$_SESSION['userid'];
    if(!isset($_SESSION['phoneno']))
    {
        echo"
            <script>
                alert('You must login first');
                window.location.href='login.php';
            </script>
        ";
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
    
    <!-- =========ICONS============== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Al-Dawa</title>
</head>
<style>
    *{
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
    }
    body{
        background-color: #f7f6f6;
    }
    /* -----HEADER------ */
    .navbar{
        background-color: #3883ab;
        backdrop-filter: blur(10px);
        z-index: 100;
        width: 100%;
    }
    .navbar li{
        padding-left: 10px;
        padding-right: 10px;
    }
    .navbar li a{
        color: white
    }
    .navbar li a:hover{
        background-color: #f7f6f6;
        color: #3883ab;
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
    .btn{
        border: 2px solid #3883ab;
        color: #3883ab;
        transition: 0.4s;
        font-weight: bold;
    }
    .btn:hover{
        background-color: #3883ab;
        color: white;
    }
</style>
<body>
    <section class="header">
        <!-- ------NAVBAR------ -->
        <nav id="navbar" class="navbar navbar-expand-lg sticky-top px-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img style="width: 50px;" src="./test/newlogo.png" alt=""></a>
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
                                <li><a style="color: #3883ab;" class="dropdown-item" href="personalcare.php">PERSONAL CARE</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a style="color: #15314b;" class="dropdown-item" href="syrup&suspension.php">SYRUPS & SUSPENSION</a></li> 
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mycart.php">
                                <i class="fa fa-shopping-cart" style="font-size: 24px;" aria-hidden="true"></i>
                                (<?php echo count($_SESSION['cart']); ?>)
                            </a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                    <?php 
                        
                        if(isset($_SESSION['phoneno'])){
                            ?>  
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a style="border: 2px solid; border-color: #f7f6f6;" 
                                        class="nav-link" href="logout.php">LOGOUT</a>
                                    </li>
                                </ul>
                            <?php
                        }
                        else{
                            ?>
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
                            <?php
                        }
                    ?>
                </div>
            </div>
        </nav>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5 rounded" style="background-color:#f7f6f6;">
                <h1 style="font-family: 'Dancing Script', cursive; font-weight:bold;">Checkout</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mydiv">
            <div class="col-lg-6 py-1 text-center" style="background-color: rgba(56, 131, 171, 0.24);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);">
                <h2 style="font-family: 'Dancing Script', cursive; font-weight:bold;">Billing Details</h2>
                
                <form action="submit.php" method="POST">
                    <table class="table text-center">
                        <?php
                            $query="SELECT * FROM `registered_users` WHERE userid=$userid ";
                            $result2=mysqli_query($conn,$query);
                            $result3=mysqli_fetch_array($result2);
                        ?>
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td><input type="text" name="name" value="<?php echo $_SESSION['name'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Phone No</th>
                                <td><input type="text" name="phoneno" value="<?php echo $_SESSION['phoneno'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><input type="text" name="email" value="<?php echo $result3['email'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><input type="text" name="address" value="<?php echo $result3['address'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Postal Code</th>
                                <td><input type="text" name="postal_code" value="<?php echo $result3['postal_code'] ?>"></td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td><input type="text" name="city" value="<?php echo $result3['city'] ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <input type="submit" class="btn" value="Place Order" name="placeorder">
                        
                        
                
                    </div>
                    
                </form>
            </div>

            <div class="col-lg-5" style="margin-left: 5px;">
                <div class="row">
                    <div class="col-lg-12 text-center mb-5 " style="background-color: rgba(56, 131, 171, 0.24);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);">
                        <h2 style="font-family: 'Dancing Script', cursive; font-weight:bold;">Your Order</h2>
                        <?php 
                            $total=0;
                            $finaltotal=0;
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $total = $value['price'] * $value['quantity'];
                                $finaltotal += $value['price'] * $value['quantity'];
                                ?>
                                    <div class="row">
                                        <div class="col-6">
                                            <p><?php echo $value['product_name'] ?></p>
                                        </div>
                                        <div class="col-2">
                                            <p> x <?php echo $value['quantity'] ?></p>
                                        </div>
                                        <div class="col-4">
                                            <p>Rs. <?php echo $total ?></p>
                                        </div>
                                    </div>
                                <?php
                            }
                        ?>
                        <div class="row">
                            <div class="col-8">
                                <h4 style="font-weight: bold;">Total</h4>
                            </div>
                            <div class="col-4">
                                <h4 style="font-weight: bold;">Rs. <?php echo $finaltotal ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>

    
    <?php 
        // session_destroy(); 
    ?>
    <!-- -----BOOTSTRAP------ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>