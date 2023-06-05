<?php
    session_start();
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

    <title>AlDawa</title>
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
                <h1 style="font-family: 'Dancing Script', cursive; font-weight:bold;">My Cart</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-9 col-md-6 col-lg-9">
                <table class="table table-bordered text-center">
                    <thead class="text-white" style="background-color: #15314b;">
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php 
                            
                            if(isset($_SESSION['cart']))
                            {
                                $total=0;
                                $finaltotal=0;
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $total = $value['price'] * $value['quantity'];
                                    $finaltotal += $value['price'] * $value['quantity'];
                                    ?>
                                    <form action="cart.php" method="POST">
                                        <tr style="align-items: center;">
                                            <input type="hidden" name="product_id" value="<?php echo $value['product_id'] ?>">
                                            <td><input type="hidden" name="product_pic" value="<?php echo $value['product_pic'] ?>"><img style="height: 100px; width:100px" src="<?php echo $value['product_pic'] ?>" alt=""></td>
                                            <td><input type="hidden" name="product_name" value="<?php echo $value['product_name'] ?>"><?php echo $value['product_name'] ?></td>
                                            <td><input type="hidden" name="price" value="<?php echo $value['price'] ?>">Rs. <?php echo $value['price'] ?></td>
                                            <td><input type="text" name="quantity" value="<?php echo $value['quantity'] ?>"></td>
                                            <td><?php echo $total ?></td>
                                            <td><button name="update" class="btn">Update</button></td>
                                            <td><button name="remove" class="btn">Delete</button></td>
                                            <input type="hidden" name="item" value="<?php echo $value['product_name'] ?>">
                                        </tr>
                                    </form>
                                    <?php
                                }
                                $_SESSION['finaltotal']=$finaltotal;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3 bg-light">
                <h3>Total</h3>
                <h2><?php echo $finaltotal;  ?></h2>
                <a href="checkout.php"><button class="btn">CHECKOUT</button></a>
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