<?php
    session_start();
    if(isset($_POST['addtocart']))
    {
        
        if(isset($_SESSION['phoneno']) && isset($_SESSION['name']) && $_SESSION['loggedin']==true)
        {
            $var2= $_POST['product_id'];
            echo $var2;
            echo $_SESSION['name'];
        }
        else{
            
        }
        
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
    /* ------COUNTER----- */
    .counter {
        width: 100%;
        margin: auto;
        display: flex;
        align-items: center;
        /* justify-content: center; */
    }
    .counter input {
        width: 50px;
        border: 0;
        line-height: 30px;
        font-size: 20px;
        text-align: center;
        background: #15314b;
        color: #fff;
        appearance: none;
        outline: 0;
    }
    .counter span {
        display: block;
        font-size: 25px;
        padding: 0 10px;
        cursor: pointer;
        color: #15314b;
        user-select: none;
    }
    .addtocart{
        border: 1px solid #15314b;
        color: #15314b;
        transition: 0.4s;
    }
    .addtocart:hover{
        background-color: #15314b;
        color: white;
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
        width: 9rem;
        height: 4rem;
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
        .addtocart{
            font-size: 0.7rem;
            width: 6.5rem;
        }
        
    } 
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

    <section class="individualproduct">
        <?php
            include('connection.php');
            if(isset($_POST['add'])){
                $var = $_POST['product_id'];
            }
            // $var=$_SESSION['var'];
            $query1 = "SELECT product.product_name, product.product_pic, product.description, product.generics, 
                    product.usedfor, product.price, product.indication, product.sideeffects, 
                    product.when_not_to_use, product.dosage, product.storage, product.quantity, 
                    brand.brand_name FROM product JOIN brand ON product.brand_id = brand.brand_id 
                    WHERE product_id='$var'";
            $result = mysqli_query($conn,$query1);
            $result2=mysqli_fetch_array($result);
        ?>
        <div class="product">
            <div class="row text-centre px-5 py-5">
                <div class="col-md-5">
                    <img style="width: 100%;" src="<?php echo $result2['product_pic'] ?>" alt="">
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h3><?php echo $result2['product_name'] ?></h3>
                            <p><?php echo $result2['brand_name'] ?></p>
                            <h5>Rs. <?php echo $result2['price'] ?></h5>
                            <form action="cart.php" method="POST">
                                <label for="quantity">Quantity (<?php echo $result2['quantity'] ?> left in stock):</label>
                                <!-- FOR COUNTING QUANTITY OF ITEMS -->
                                <div class="counter">
                                    <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                    <input type="text" name="quantity" value="1">
                                    <span class="up"  onClick='increaseCount(event, this)'>+</span>
                                    <input type="hidden" name="product_id" value="<?php echo $var ?>">
                                    <input type="hidden" name="product_name" value="<?php echo $result2['product_name'] ?>">
                                    <input type="hidden" name="product_pic" value="<?php echo $result2['product_pic'] ?>">
                                    <input type="hidden" name="price" value="<?php echo $result2['price'] ?>">
                                    <input type="submit" style="width: fit-content;" name="addtocart" class="col-md-12 btn  addtocart"
                                     value="Add to Cart">
                                        
                                </div>
                                
                            </form>
                            <div class="myfilter">
                                <hr class="divider">
                                <div id="myBtnContainer">
                                    <button class="btn" onclick="filterSelection('desc')">Description</button>
                                    <button class="btn" onclick="filterSelection('generics')">Generics</button>
                                    <button class="btn" onclick="filterSelection('used')">Used for</button>
                                    <button class="btn" onclick="filterSelection('indication')">Indication</button>
                                    <button class="btn" onclick="filterSelection('sideeff')">Side Effects</button>
                                    <button class="btn" onclick="filterSelection('nottouse')">When not to use</button>
                                    <button class="btn" onclick="filterSelection('dose')">Dosage</button>
                                    <button class="btn" onclick="filterSelection('store')">Storage</button>
                                </div>
                                <div class="filtercontainer">
                                    <div class="filterDiv desc"><p><?php echo $result2['description'] ?></p></div>
                                    <div class="filterDiv used"><p><?php echo $result2['usedfor'] ?></p></div>
                                    <div class="filterDiv generics"><p><?php echo $result2['generics'] ?></p></div>
                                    <div class="filterDiv indication"><p><?php echo $result2['indication'] ?></p></div>
                                    <div class="filterDiv sideeff"><p><?php echo $result2['sideeffects'] ?></p></div>
                                    <div class="filterDiv nottouse"><p><?php echo $result2['when_not_to_use'] ?></p></div>
                                    <div class="filterDiv dose"><p><?php echo $result2['dosage'] ?></p></div>
                                    <div class="filterDiv store"><p><?php echo $result2['storage'] ?></p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- -----QUANTITY COUNTER-------- -->
    <script type="text/javascript">
        function increaseCount(a, b) {
          var input = b.previousElementSibling;
          var value = parseInt(input.value, 10); 
          <?php $qty=$result2['quantity']; ?>
          var range = "<?php echo $qty; ?>"
          if (value < range) {
            value = isNaN(value)? 0 : value;
            value ++;
            input.value = value;
          }
          
        }
        function decreaseCount(a, b) {
          var input = b.nextElementSibling;
          var value = parseInt(input.value, 10); 
          if (value > 1) {
            value = isNaN(value)? 0 : value;
            value --;
            input.value = value;
          }
        }
    </script>
    <!-- -----BOOTSTRAP------ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
</body>
</html>