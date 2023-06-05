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
    /* .formcontent .mytable{
        display: flex;
        justify-content: center;
        align-items: center;
        padding-bottom: 3%;
        width: 100%;
    } */
    .formcontent .mytable th,td{
        padding: 15px 10px;
    }
    .formcontent .mytable th{
        background-color: #15314b;
        color: white;
    }
    .del{
        width: 6rem;
        background-color: #ddd;

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
                    View & Delete Products</h1>
                </div>
            </div>
        </div>

        <!-- ----VIEW & DEL PRODUCTS---- -->
        <div class="myfilter">
            <hr class="divider">
            <div id="myBtnContainer">
                <button class="btn" onclick="filterSelection('every')">All Products</button>
                <button class="btn" onclick="filterSelection('desc')">Tablets & Capsules</button>
                <button class="btn" onclick="filterSelection('generics')">Medical Equipment</button>
                <button class="btn" onclick="filterSelection('used')">Personal Care</button>
                <button class="btn" onclick="filterSelection('indication')">Syrups & Suspension</button>
            </div>
            <div class="filtercontainer">
                <div class="filterDiv every">
                    <div class="formcontent">
                        <div class="mytable" style="overflow-x:auto;">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Image</th>
                                    <th>Brand ID</th>
                                    <th>Category ID</th>
                                    <th>Generics</th>
                                    <th>Used for</th>
                                    <th>Price</th>
                                    <th>Storage</th>
                                    <th>Quantity</th>
                                    <th>Delete</th>
                                </tr>
                                
                                
                                <?php
                                    $selectquery= "SELECT * FROM product";
                                    $query= mysqli_query($conn,$selectquery);
                                    while($result=mysqli_fetch_array($query)){
                                ?>
                                <tr> 
                                    <td><img style="width: 100px; height:100px;" src="<?php echo $result['product_pic'] ?>" alt=""></td>
                                    <td><?php echo $result['product_id'] ?></td>
                                    <td><?php echo $result['product_name'] ?></td>
                                    <td><?php echo $result['brand_id'] ?></td>
                                    <td><?php echo $result['category_id'] ?></td>
                                    <td><?php echo $result['generics'] ?></td>
                                    <td><?php echo $result['usedfor'] ?></td>
                                    <td><?php echo $result['price'] ?></td>
                                    <td><?php echo $result['storage'] ?></td>
                                    <td><?php echo $result['quantity'] ?></td>
                                    <td><a href="delete.php?delete=<?php echo $result['product_id'] ?>"><button class="btn del"><i style="font-size: 24px;" class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                                </tr>
                                <?php 
                                    }
                                ?>
                                
                            </table>                  
                        </div>
                    </div>
                </div>
                <div class="filterDiv desc">
                    <div class="formcontent">
                        <div class="mytable" style="overflow-x:auto;">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Image</th>
                                    <th>Brand ID</th>
                                    <th>Category ID</th>
                                    <th>Generics</th>
                                    <th>Used for</th>
                                    <th>Price</th>
                                    <th>Storage</th>
                                    <th>Quantity</th>
                                    <th>Delete</th>
                                </tr>
                                
                                
                                <?php
                                    $selectquery= "SELECT * FROM product WHERE category_id=1";
                                    $query= mysqli_query($conn,$selectquery);
                                    while($result=mysqli_fetch_array($query)){
                                ?>
                                <tr> 
                                    <td><img style="width: 100px; height:100px;" src="<?php echo $result['product_pic'] ?>" alt=""></td>
                                    <td><?php echo $result['product_id'] ?></td>
                                    <td><?php echo $result['product_name'] ?></td>
                                    <td><?php echo $result['brand_id'] ?></td>
                                    <td><?php echo $result['category_id'] ?></td>
                                    <td><?php echo $result['generics'] ?></td>
                                    <td><?php echo $result['usedfor'] ?></td>
                                    <td><?php echo $result['price'] ?></td>
                                    <td><?php echo $result['storage'] ?></td>
                                    <td><?php echo $result['quantity'] ?></td>
                                    <td><a href="delete.php?delete=<?php echo $result['product_id'] ?>"><button class="btn del"><i style="font-size: 24px;" class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                                </tr>
                                <?php 
                                    }
                                ?>
                                
                            </table>                  
                        </div>
                    </div>
                </div>
                
                <div class="filterDiv generics">
                    <div class="formcontent">
                        <div class="mytable" style="overflow-x:auto;">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Image</th>
                                    <th>Brand ID</th>
                                    <th>Category ID</th>
                                    <th>Generics</th>
                                    <th>Used for</th>
                                    <th>Price</th>
                                    <th>Storage</th>
                                    <th>Quantity</th>
                                    <th>Delete</th>
                                </tr>
                                
                                
                                <?php
                                    $selectquery= "SELECT * FROM product WHERE category_id=2";
                                    $query= mysqli_query($conn,$selectquery);
                                    while($result=mysqli_fetch_array($query)){
                                ?>
                                <tr> 
                                    <td><img style="width: 100px; height:100px;" src="<?php echo $result['product_pic'] ?>" alt=""></td>
                                    <td><?php echo $result['product_id'] ?></td>
                                    <td><?php echo $result['product_name'] ?></td>
                                    <td><?php echo $result['brand_id'] ?></td>
                                    <td><?php echo $result['category_id'] ?></td>
                                    <td><?php echo $result['generics'] ?></td>
                                    <td><?php echo $result['usedfor'] ?></td>
                                    <td><?php echo $result['price'] ?></td>
                                    <td><?php echo $result['storage'] ?></td>
                                    <td><?php echo $result['quantity'] ?></td>
                                    <td><a href="delete.php?delete=<?php echo $result['product_id'] ?>"><button class="btn del"><i style="font-size: 24px;" class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                                </tr>
                                <?php 
                                    }
                                ?>
                                
                            </table>                  
                        </div>
                    </div>
                </div>
                <div class="filterDiv used">
                <div class="formcontent">
                        <div class="mytable" style="overflow-x:auto;">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Image</th>
                                    <th>Brand ID</th>
                                    <th>Category ID</th>
                                    <th>Generics</th>
                                    <th>Used for</th>
                                    <th>Price</th>
                                    <th>Storage</th>
                                    <th>Quantity</th>
                                    <th>Delete</th>
                                </tr>
                                
                                
                                <?php
                                    $selectquery= "SELECT * FROM product WHERE category_id=3";
                                    $query= mysqli_query($conn,$selectquery);
                                    while($result=mysqli_fetch_array($query)){
                                ?>
                                <tr> 
                                    <td><img style="width: 100px; height:100px;" src="<?php echo $result['product_pic'] ?>" alt=""></td>
                                    <td><?php echo $result['product_id'] ?></td>
                                    <td><?php echo $result['product_name'] ?></td>
                                    <td><?php echo $result['brand_id'] ?></td>
                                    <td><?php echo $result['category_id'] ?></td>
                                    <td><?php echo $result['generics'] ?></td>
                                    <td><?php echo $result['usedfor'] ?></td>
                                    <td><?php echo $result['price'] ?></td>
                                    <td><?php echo $result['storage'] ?></td>
                                    <td><?php echo $result['quantity'] ?></td>
                                    <td><a href="delete.php?delete=<?php echo $result['product_id'] ?>"><button class="btn del"><i style="font-size: 24px;" class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                                </tr>
                                <?php 
                                    }
                                ?>
                                
                            </table>                  
                        </div>
                    </div>
                </div>
                <div class="filterDiv indication">
                    <div class="formcontent">
                        <div class="mytable" style="overflow-x:auto;">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Image</th>
                                    <th>Brand ID</th>
                                    <th>Category ID</th>
                                    <th>Generics</th>
                                    <th>Used for</th>
                                    <th>Price</th>
                                    <th>Storage</th>
                                    <th>Quantity</th>
                                    <th>Delete</th>
                                </tr>
                                
                                
                                <?php
                                    $selectquery= "SELECT * FROM product WHERE category_id=4";
                                    $query= mysqli_query($conn,$selectquery);
                                    while($result=mysqli_fetch_array($query)){
                                ?>
                                <tr> 
                                    <td><img style="width: 100px; height:100px;" src="<?php echo $result['product_pic'] ?>" alt=""></td>
                                    <td><?php echo $result['product_id'] ?></td>
                                    <td><?php echo $result['product_name'] ?></td>
                                    <td><?php echo $result['brand_id'] ?></td>
                                    <td><?php echo $result['category_id'] ?></td>
                                    <td><?php echo $result['generics'] ?></td>
                                    <td><?php echo $result['usedfor'] ?></td>
                                    <td><?php echo $result['price'] ?></td>
                                    <td><?php echo $result['storage'] ?></td>
                                    <td><?php echo $result['quantity'] ?></td>
                                    <td><a href="delete.php?delete=<?php echo $result['product_id'] ?>"><button class="btn del"><i style="font-size: 24px;" class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                                </tr>
                                <?php 
                                    }
                                ?>
                                
                            </table>                  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- -----FILTER----- -->
    <script>
        //filterSelection("all")
        function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
        }

        // Show filtered elements
        function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
            }
        }
        }

        // Hide elements that are not selected
        function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
        }

        // Add active class to the current control button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
        }
    </script>

   <!-- -----BOOTSTRAP------ -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
</body>
</html>