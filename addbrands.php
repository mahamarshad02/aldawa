<?php
    include('connection.php');
    session_start();
    if(!isset($_SESSION['adminusername']) ){
        echo"
            <script>
            alert('Admin must login first');
            window.location.href='adminlogin.php';
            </script>
        ";
    }
    if(isset($_POST['addbrand'])){
        $brand_name= $_POST['brand_name'];
        $file = $_FILES['brand_pic'];

        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        if($fileerror==0)
        {
            $destfile = 'upload/'.$filename;
            //echo "$destfile";
            move_uploaded_file($filepath,$destfile);
            $insertquery = "INSERT INTO `brand`(`brand_name`, `brand_pic`) VALUES ('$brand_name','$destfile')";
            mysqli_query($conn,$insertquery);
        }
        echo"
        <script>
            alert('Brand added successfully');
            window.location.href='addbrands.php';
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
    /* -----FILTER----- */
    .myfilter{
        text-align: center;
    }
    .filtercontainer{
        display: flex;
        justify-content: center;
        overflow: hidden;
    }
    .container {
        overflow: hidden;
    }

    .filterDiv {
        color: black;
        width: 90%;
        line-height: 1.5;
        text-align: center;
        margin-top: 2%;
        display: none /* Hidden by default */
    }

    /* The "show" class is added to the filtered elements */
    .show {
        display: block;
    }

    /* Style the buttons */
    .btn {
        border: none;
        outline: none;
        padding: 12px 16px;
        border: 1px solid #15314b;
        color: #15314b;
        transition: 0.4s;
        cursor: pointer;
        width: 11rem;
        height: 4.5rem;
        margin-bottom: 2px;
    }

    /* Add a light grey background on mouse-over */
    .btn:hover {
        background-color: #15314b;
        color: white;
    }

    /* Add a dark background to the active button */
    .btn.active {
        background-color: #666;
        color: white;
    }
    @media screen and (max-width:485px) {
        .btn{
            font-size: 0.7rem;
            width: 5.5rem;
        }
        .filterDiv p{
            font-size: 0.7rem;
        }
    } 


    /* ---ADD PRODUCTS FORM--- */
    .formcontent{
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    .formcontent .myform{
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 2%;
        padding-bottom: 3%;
        width: 50%;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.4);
    }
    .formcontent .myform form{
        width: 100%;
    }
    .formcontent .myform div{
        width: 100%;
    }
    .formcontent .myform div input{
        border-radius: 9px;
        height: 35px;
    }
    .formcontent .myform div select{
        border-radius: 9px;
        height: 35px;
    }
    .formcontent .myform div textarea{
        border-radius: 9px;
    }
    .add{
        width: 90%;
        height: 45px;
        
    }
    @media screen and (max-width:700px) {
        .formcontent .myform{
            width: 85%;
        }
        .formcontent .myform div label{
            font-size: 0.8rem;
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
                            <a class="nav-link" href="adminwelcome.php">DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="orders.php">ORDERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="users.php">USERS</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                BRANDS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a style="color: #15314b;" class="dropdown-item" href="addbrands.php">ADD BRANDS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a style="color: #15314b;" class="dropdown-item" href="viewbrands.php">VIEW BRANDS</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PRODUCTS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a style="color: #15314b;" class="dropdown-item" href="addproducts.php">ADD PRODUCTS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a style="color: #15314b;" class="dropdown-item" href="deleteproducts.php">VIEW & DELETE PRODUCTS</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="adminlogout.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- -----HEAD----- -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center bg-light rounded">
                    <h1 style="font-family: 'Dancing Script', cursive; font-weight:bold; letter-spacing: 0.2rem;">
                    Add Brands
                    </h1>
                </div>
            </div>
        </div>

        <!-- -----ADD PRODUCTS FORM----- -->
        <div class="myfilter">
            <hr class="divider">
            <div class="formcontent">
                <div class="myform">
                    <form action="addbrands.php" method="POST" enctype="multipart/form-data">
                        <div class="row mb-2">
                            <label for="brand_name" class="col-6">Brand Name</label>
                            <input type="text" class="col-6" name="brand_name">
                        </div>
                        <div class="row mb-2">
                            <label for="brand_pic" class="col-6">Brand Logo</label>
                            <input type="file" class="col-6" name="brand_pic">
                        </div>
                        

                        <button type="submit" name="addbrand" class="btn add">
                            Add Brand
                        </button>
                    </form>
                </div>
            </div>
        </div>
             

        
    </div>
              
    </section>
    

   <!-- -----BOOTSTRAP------ -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
</body>
</html>