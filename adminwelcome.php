<?php
    session_start();
    if(!isset($_SESSION['adminusername']) ){
        echo"
            <script>
            alert('Admin must login first');
            window.location.href='adminlogin.php';
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
    
    <!-- ------SWIPER JS------ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.3.5/swiper-bundle.min.css"
        integrity="sha512-cSswotORLwhq0E9mRjme7FmZhAzRdnZQJpOdaZFZDVPwUXM2kTsS97nzH7EKd3eWMEbrPqBLAT0nPKBf0qEAcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    .mycards{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        flex-direction: column;
    }
    .mycards .allcards{
        width: 90%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 2rem;
    }
    .mycards .allcards .card{
        display: flex;
        justify-content: center;
        align-items: center;
        background-color:  rgba(56, 131, 171, 0.16);
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    }
    .mycards .allcards .card .card-body{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .btn a{
        text-decoration: none;
        color:#3883ab
    }
    .btn{
        border: #3883ab 1px solid;
        color: #3883ab;
        transition: 0.5s;
        margin-bottom: 2%;
    }
    .btn:hover{
        background-color: #3883ab;
        color: white;

    }
    .btn:hover a{
        color: white;

    }
</style>
<body>
    <!-- -----HEADER----- -->
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
                            <a class="nav-link" href="adminwelcome.php">DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="orders.php">ORDERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="payment.php">PAYMENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="users.php">USERS</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                BRANDS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a style="color: #3883ab;" class="dropdown-item" href="addbrands.php">ADD BRANDS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a style="color: #3883ab;" class="dropdown-item" href="viewbrands.php">VIEW BRANDS</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PRODUCTS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a style="color: #3883ab;" class="dropdown-item" href="addproducts.php">ADD PRODUCTS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a style="color: #3883ab;" class="dropdown-item" href="deleteproducts.php">VIEW & DELETE PRODUCTS</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a style="border: 2px solid; border-color: #f7f6f6;"  
                            class="nav-link" href="adminlogout.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- -----HEAD----- -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5 " style="background-color:  rgba(56, 131, 171, 0.24);">
                    <h1 style="font-family: 'Dancing Script', cursive; font-weight:bold; letter-spacing: 0.2rem;">
                    Welcome <?php echo $_SESSION['adminusername']; ?></h1>
                </div>
            </div>
        </div>

        <div class="mycards">
            <div class="allcards">
                
                <div class="card" style="width: 250px; height:300px;">
                    <div class="card-body">
                        <img width="48" height="48" src="https://img.icons8.com/fluency/48/tag.png" alt="tag"/>
                        <h5 class="card-title">Brands</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Our Products' Brands</h6>
                        <p class="card-text">Click here to view all brands of our procuts.</p>
                        <button class="btn"><a href="viewbrands.php" class="card-link">View brands</a></button>
                        <button class="btn"><a href="addbrands.php" class="card-link">Add brands</a></button>
                        
                    </div>
                </div>
                <div class="card" style="width: 250px; height:300px;">
                    <div class="card-body">
                        <img width="48" height="48" src="https://img.icons8.com/emoji/48/package-.png" alt="package-"/>
                        <h5 class="card-title">Products</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Our Prodcuts</h6>
                        <p class="card-text">Click on the following links to view, add or delete products.</p>
                        <button class="btn"><a href="addproducts.php" class="card-link">Add products</a></button>
                        <button class="btn"><a href="deleteproducts.php" class="card-link">View/delete Products</a></button>
                        
                    </div>
                </div>
                <div class="card" style="width: 250px; height:300px;">
                    <div class="card-body">
                        <img width="48" height="48" src="https://img.icons8.com/color/48/group-foreground-selected.png" alt="group-foreground-selected"/>
                        <h5 class="card-title">Users</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Registered Users</h6>
                        <p class="card-text">Click here to view all details related to our registered users.</p>
                        <button class="btn"><a href="users.php" class="card-link">Users</a></button>
                        
                    </div>
                </div>
                <div class="card" style="width: 250px; height:300px;">
                    <div class="card-body">
                        <img width="48" height="48" src="https://img.icons8.com/fluency/48/purchase-order.png" alt="purchase-order"/>
                        <h5 class="card-title">Orders</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Manage & view orders</h6>
                        <p class="card-text">Click here to view & manage all orders.</p>
                        <button class="btn"><a href="orders.php">Manage orders</a></button>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- -----BOOTSTRAP------ -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 

   <script>
        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 400
            });
        ScrollReveal().reveal('h1',{delay:400, origin:'top'});

        ScrollReveal({
                reset:true,
                distance: '60px',
                duration: 2500,
                delay: 400
            });
        ScrollReveal().reveal('.allcards',{delay:400, origin:'bottom'});
   </script>
</body>
</html>