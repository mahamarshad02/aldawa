<?php
    include "connection.php";
    session_start();
    $userid=$_SESSION['userid'];
    if(!isset ($_SESSION['name']) && isset($_SESSION['phoneno']) && $_SESSION['loggedin']==true){
        echo"
            <script>
                alert('You must login first');
                window.location.href= 'login.php';
            </script>";
    }
    if(isset($_POST['update']))
    {
        $phoneno=$_POST['phoneno'];
        $name=$_POST['name'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $postal_code=$_POST['postal_code'];
        $city=$_POST['city'];

        $updatequery="UPDATE `registered_users` SET `phoneno`='$phoneno',
        `name`='$name',`password`='$password',`email`='$email',
        `address`='$address',`postal_code`='$postal_code',`city`='$city' WHERE userid= '$userid'";
        $result=mysqli_query($conn,$updatequery);
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
        justify-content: center;
        /* width: 90%; */
        display: flex;
        flex-wrap: wrap;
        margin: auto;
        gap: 40px;
        padding-top: 2%;
        /* background-color: #D0F0EB; */
        background-color: white;
        height: 100%;
        padding-bottom: 5%;
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
        background-color: #f1f1f1;
        cursor: pointer;
        width: 11rem;
        height: 4.5rem;
        margin-bottom: 2px;
    }

    /* Add a light grey background on mouse-over */
    .btn:hover {
        background-color: #ddd;
    }

    /* Add a dark background to the active button */
    .btn.active {
        background-color: #666;
        color: white;
    }
    @media screen and (max-width:485px) {
        .btn{
            font-size: 0.7rem;
            width: 6.5rem;
        }
        .filterDiv p{
            font-size: 0.7rem;
        }
        
    } 
    .mydiv{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .mydiv table{
        width: 75%;
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
                            <a class="nav-link" href="#categories">CATEGORIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactus">CONTACT</a>
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
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- -----HEAD----- -->
        <div class="myfilter">
            <div id="myBtnContainer">
                <button class="btn" onclick="filterSelection('history')">
                    <i class="fa fa-history" aria-hidden="true"></i>
                    <span>Order History</span>
                </button>
                <button class="btn" onclick="filterSelection('edit')">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    <span>Edit Profile</span>
                </button>
                <button class="btn" onclick="filterSelection('profile')">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <span>My Profile</span>
                </button>
            </div>
            <div class="filtercontainer">
                <div class="filterDiv profile">
                    <div class="mydiv">
                        <table class="table" style="width: 50%;">
                            <tbody>
                            <?php
                                $query="SELECT * FROM `registered_users` WHERE userid=$userid ";
                                $result2=mysqli_query($conn,$query);
                                $result3=mysqli_fetch_array($result2);
                             ?>
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo $_SESSION['name'] ?></td>
                                </tr>
                                <tr>
                                    <th>Phone No</th>
                                    <td><?php echo $_SESSION['phoneno'] ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $result3['email'] ?></td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td><?php echo $result3['address'] ?></td>
                                </tr>
                                <tr>
                                    <th>Postal Code</th>
                                    <td><?php echo $result3['postal_code'] ?></td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td><?php echo $result3['city'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="filterDiv history">
                    <div class="mydiv">
                        <table class="table" style="overflow-x:auto;">
                            <tr>
                                <th>Order ID</th>
                                <th>Order Date & Time</th>
                                <th>Products</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                            <?php
                                $selectquery1="SELECT * FROM `order` WHERE userid='$userid'"; 
                                $runselectquery1=mysqli_query($conn,$selectquery1);
                                while($order=mysqli_fetch_array($runselectquery1))
                                {
                                    $order_id=$order['order_id'];
                                    ?>
                                    <tr>
                                        <td><?php echo $order['order_id']?></td>
                                        <td><?php echo $order['datetime']?></td>
                                        <td>
                                            <table class="table">
                                            <?php
                                                $selectquery2="SELECT * FROM `order_details` WHERE order_id='$order_id'"; 
                                                $runselectquery2=mysqli_query($conn,$selectquery2);
                                                while($orderdetails=mysqli_fetch_array($runselectquery2))
                                                {?>
                                                    <tr>
                                                        <?php 
                                                            $product_id=$orderdetails['product_id'];
                                                            $selectquery3="SELECT `product_name` from `product`
                                                                            WHERE product_id =$product_id";
                                                            $runselectquery3=mysqli_query($conn,$selectquery3);
                                                            $product=mysqli_fetch_array($runselectquery3);
                                                        ?>
                                                        <td><?php echo $product['product_name'] ?></td>
                                                    </tr>
                                                    
                                                <?php
                                                }
                                            ?>
                                            </table>
                                        </td>
                                        <td><?php echo $order['total']?></td>
                                        <td><?php echo $order['status']?></td>
                                    </tr>

                                <?php
                                }
                            ?>
                        </table>

                    </div>
                </div>
                <div class="filterDiv edit">
                    <div class="mydiv">
                        <form action="userdashboard.php" method="POST">
                            <table class="table">
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
                                        <th>Password</th>
                                        <td>
                                            <input type="password" id="password" name="password" value="<?php echo $result3['password'] ?>">
                                            <div>
                                                <input type="checkbox" onclick="myFunction()">Show Password
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><input type="email" name="email" value="<?php echo $result3['email'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td><input type="text" name="address" value="<?php echo $result3['address'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Postal Code</th>
                                        <td><input type="tel" name="postal_code" <?php echo $result3['postal_code'] ?>></td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td><input type="text" name="city" value="<?php echo $result3['city'] ?>"></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            
                            <input type="submit" value="Update" name="update">
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- ------SCRIPTS------ -->
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
    
    <!-- ----PASSWORD SHOW/HIDE---- -->
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } 
            else {
                x.type = "password";
            }
        }

    </script>

    

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