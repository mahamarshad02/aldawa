<?php
    include('connection.php');
    session_start();
    // session_destroy();
    // $_SESSION['cart']=array();
    $product_id= $_POST['product_id'];
    $product_name= $_POST['product_name'];
    $product_pic=$_POST['product_pic'];
    $price=$_POST['price'];
    $quantity = $_POST['quantity'];
    if(isset($_POST['addtocart']))
    {
        if(isset($_SESSION['phoneno']) && isset($_SESSION['name']) && $_SESSION['loggedin']==true)
        {
            

            $check_product=array_column($_SESSION['cart'],'product_name');
            if(in_array($product_name, $check_product))
            {
                
                echo"
                <script>
                    alert('Product already added in cart. To buy more of this product, please update your cart.');
                    window.location.href= 'mycart.php';
                </script>";
                
            }
            else
            {
                $_SESSION['cart'][]= array('product_id' => $product_id, 'product_name' => $product_name, 
                                            'product_pic' => $product_pic,'price' => $price, 
                                            'quantity' => $quantity);
                // print_r($_SESSION['cart']);
                header("location: mycart.php");
            }
            
        }
        else{
            echo"
            <script>
                alert('You must login first.');
                window.location.href= 'login.php';
            </script>
            ";
        }
        
       


        // echo $product_id . "-----";
        // echo $quantity . "-----";
        // echo $price;
    }

    //deleting products from cart
    if(isset($_POST['remove']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['product_name'] === $_POST['item'])
            {
                unset($_SESSION['cart'][$key]);
                //rearrange array index
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                header('location: mycart.php');
            }
        }
    }

    //updating products in cart
    if(isset($_POST['update']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['product_name'] === $_POST['item'])
            {
                $_SESSION['cart'][$key]= array('product_id' => $product_id,'product_name' => $product_name, 
                                                'product_pic' => $product_pic,'price' => $price, 
                                                'quantity' => $quantity);
                // print_r($_SESSION['cart']);
                header("location: mycart.php");
            }
        }
    }
?>
