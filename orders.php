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
    if(isset($_POST['update']))
    {
        $status=$_POST['status'];
        $orderid=$_SESSION['order_id'];
        $update_query="UPDATE `order` SET `status`='$status' WHERE order_id='$orderid'";
        $run_update_query=mysqli_query($conn,$update_query);
        if($run_update_query)
        {
            echo"
                <script>
                    alert('Order Status updated succcessfully!');
                    window.location.href='orders.php';
                </script>
            ";
        }
    }
    if(isset($_POST['delete']))
    {
        $orderid=$_SESSION['order_id'];
        $delete_query="DELETE FROM `order` WHERE  order_id='$orderid'";
        $run_delete_query=mysqli_query($conn,$delete_query);
        if($run_delete_query)
        {
            echo"
                <script>
                    alert('Order deleted succcessfully!');
                    window.location.href='orders.php';
                </script>
            ";
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
    .allusers{
        display: flex;
        justify-content: center;
        align-items: center;
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
                <div class="col-lg-12 text-center bg-light mb-5 rounded">
                    <h1 style="font-family: 'Dancing Script', cursive; font-weight:bold; letter-spacing: 0.2rem;">
                    Orders</h1>
                </div>
            </div>
        </div>

        <div class="allusers">
            <div class="users">
                <table class="table text-center table-bordered">
                            <tr>
                                <th>Order ID</th>
                                <th>Order Date & Time</th>
                                <th colspan="2">Placed by</th>
                                <th colspan="3">Shipping Address</th>
                                <th>Total Amount</th>
                                <th>Order Status</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                    
                <?php 
                    $query="SELECT * FROM `order`";
                    $result = mysqli_query($conn,$query);
                    while($result2=mysqli_fetch_array($result))
                    {?>
                        <tr>
                            <form action="orders.php" method="POST">
                                <td><?php echo $result2['order_id'] ?></td>
                                <td><?php echo $result2['datetime'] ?></td>
                                <td><?php echo $result2['userid'] ?></td>
                                <?php 
                                    $_SESSION['order_id']=$result2['order_id'];
                                    $userid = $result2['userid'];
                                    $userquery= "SELECT `name` from `registered_users` where userid='$userid'";
                                    $run_userquery=mysqli_query($conn,$userquery);
                                    $result3=mysqli_fetch_array($run_userquery);
                                ?>
                                <td><?php echo $result3['name'] ?></td>
                                <td><?php echo $result2['address'] ?></td>
                                <td><?php echo $result2['postal_code'] ?></td>
                                <td><?php echo $result2['city'] ?></td>
                                <td><?php echo $result2['total'] ?></td>
                                <td>
                                    <select class="form-select" name="status">
                                        <option selected><?php echo $result2['status']?></option>
                                        <option >processing</option>
                                        <option >cancelled</option>
                                        <option >dispatched</option>
                                        <option >shipped</option>
                                    </select>
                                </td>
                                <td><input type="submit" class="btn" name="update" value="Update" ></td>
                                <td><input type="submit" class="btn" name="delete" value="Delete" ></td>
                            </form>
                        </tr>
                    <?php 
                    }
                ?>
                </table>
            </div>
            
        </div>
    </section>

   <!-- -----BOOTSTRAP------ -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
</body>
</html>