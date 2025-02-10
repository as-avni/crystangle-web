<?php
include './includes/connect.php';
include './functions/commom_function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script async data-id="five-server" src="http://localhost:5500/fiveserver.js"></script>
    <title>Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS File -->
    <link rel="stylesheet" href="./style.css">
    <style>
        .cart-img{
            width: 80px;
            height: 80px;
        }
    </style>
    
</head>
<body>
    <div class="contaier-fluid p-0">
        <?php
        include './includes/navbar.php';
        cart(); 
        ?>

    <!-- Seccond Child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-custom1">
            <ul class="navbar-nav me-auto pl-3" style="padding-left: 50px;">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome, &nbsp; Sir </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </nav>
    
    <!-- Third Child -->
        <div class="bg-light">
            <h3 class="text-center">Crystangle, Shop</h3>
            <p class="text-center">
                Your Dream Destinaion for wearable articrafts.
            </p>
        </div>
    
    <!-- Fourth Child -->   
    <div class="container">
        <div class="row">
            <h3 class="text-center">Your Cart</h3>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Product Title</th>
                        <th>Product Image</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Remove</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    global $con;
                    $total = 0;
                    $ip = get_client_ip_address();
                    $select_cart = "select * from cart_details where ip_address='$ip'";
                    $run_cart = mysqli_query($con, $select_cart);
                    while($row_cart = mysqli_fetch_assoc($run_cart)){
                        $product_id = $row_cart['product_id'];
                        $product_price = "select * from products where product_id=$product_id";
                        $run_price = mysqli_query($con, $product_price);
                        while($row_price = mysqli_fetch_assoc($run_price)){
                            $product_price = array($row_price['product_price']);
                            $price_list = $row_price['product_price'];
                            $product_title = $row_price['product_title'];
                            $product_image1 = $row_price['product_image1'];
                            $values = array_sum($product_price);
                            $total += $values;
                        
                    
                        echo "<tr>
                            <td>$product_title</td>
                            <td><img src='./admin_pannel/product_images/$product_image1' alt='' class='cart-img'></td>
                            <td><input type='text' name='' id=''></td>
                            <td>$price_list</td>
                            <td><input type='checkbox'></td>
                            <td col-span='2'>
                                <button class='bg-info p-3 border-0 mx-3'>Update</button>
                                <button class='bg-info p-3 border-0 mx-3'>Remove</button>
                            </td>
                        </tr>";

                }
            }
                    ?>
                
                </tbody>
            </table>

            <!-- subtotal -->
            <div class="d-flex mb-5">
                <h4 class="px-3">Subtotal : <stron class="text-info"><?php totalCartPrice(); ?></strong></h4>
                <a href="index.php"><button class="bg-info p-3 border-0 mx-3">Continue Shopping</button></a>
                <a href="#"><button class="bg-info p-3 border-0">Checkout</button></a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php 
    include './includes/footer.php';
    ?>
    
    </div>



    <!-- Bootsrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>
</body>
</html>