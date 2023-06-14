<?php
    session_start();
    include('connection.php');
    require('config.php');
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
    if(isset($_POST['placeorder']))
    {
        //random orderID
        function randomKey($limit)
        {
            $values = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
            $count = strlen($values);
            $count--;
            $key=NULL;
                for($x=1;$x<=$limit;$x++)
                {
                    $rand_var = rand(0,$count);
                    $key .= substr($values,$rand_var,1);
                }
            
            return strtolower($key);
        }
        $_SESSION['orderid']=randomKey(8);
        $orderid= $_SESSION['orderid'];

        $address=$_POST['address'];
        $postal_code=$_POST['postal_code'];
        $city=$_POST['city'];
        $total=$_SESSION['finaltotal'];
        $status='processing';
        $orderquery="INSERT INTO `order`(`order_id`, `userid`, `datetime`, `address`, `postal_code`, `city`, 
        `total`,`status`) VALUES ('$orderid','$userid',current_timestamp(),'$address','$postal_code','$city',
        '$total','$status')";
        $run_orderquery=mysqli_query($conn,$orderquery);

        foreach($_SESSION['cart'] as $key => $value)
        {
            $product_id=$value['product_id'];
            $orderdetailquery="INSERT INTO `order_details`(`order_id`, `product_id`) 
                                VALUES ('$orderid','$product_id')";
            $run_orderdetailquery=mysqli_query($conn,$orderdetailquery);
        }

        

    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    .btn{
        border: 1px solid #15314b;
        color: #15314b;
        transition: 0.4s;
    }
    .btn:hover{
        background-color: #15314b;
        color: white;
    }
</style>
<body>
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
                                        <a class="nav-link" href="logout.php">LOGOUT</a>
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
            <div class="col-lg-12 text-center bg-light mb-5 rounded">
                <h1 style="font-family: 'Dancing Script', cursive; font-weight:bold;">Order Summary</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 text-center">
                <div class="row">
                    <div class="col-6">
                        <p>Order ID</p>
                    </div>
                    <div class="col-6">
                        <p><?php echo $orderid?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Phone No.</p>
                    </div>
                    <div class="col-6">
                        <p><?php echo $_SESSION['phoneno']?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Address</p>
                    </div>
                    <div class="col-6">
                        <p><?php echo $address?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Postal Code</p>
                    </div>
                    <div class="col-6">
                        <p><?php echo $postal_code?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>City</p>
                    </div>
                    <div class="col-6">
                        <p><?php echo $city?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h4 style="font-weight: bold;">Payment amount</h4>
                    </div>
                    <div class="col-6">
                        <h4 style="font-weight: bold;">Rs. <?php echo $_SESSION['finaltotal'] ?></h4>
                    </div>
                </div>
                <?php 
                if($run_orderquery && $run_orderdetailquery)
                {?>
                    <form action="pay.php" method="POST">
                    
                    <script 
                        src="https://checkout.stripe.com/checkout.js" 
                        class="stripe-button"
                        data-key="<?php echo $publishable_key?>"
                        data-amount="<?php echo ($_SESSION['finaltotal']*100)?>"
                        data-name="<?php echo "payment by". $_SESSION['phoneno']?>"
                        data-description=""
                        data-image=""
                        data-currency="pkr"
                        >

                    </script>
                    
                </form>

                    <?php
                    
                    
                }?>
                
            </div>

        </div>

    </div>

    <!-- -----BOOTSTRAP------ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
</body>
</html>