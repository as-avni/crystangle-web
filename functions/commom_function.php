<?php

// include section
include "includes/connect.php";

//get product
function displayProduct()
{

    global $con;

    if (!isset($_GET['category'])){

        $select_products = "select * from products order by rand() limit 0,9";
        $result_products = mysqli_query($con, $select_products);
        while($row_products = mysqli_fetch_assoc($result_products))
        {

            $product_id = $row_products["product_id"];
            $product_title = $row_products["product_title"];
            $product_description = $row_products["product_description"];
            $product_keywords = $row_products["product_keywords"];
            $product_image1 = $row_products["product_image1"];
            $product_price = $row_products["product_price"];
            $category_id = $row_products["category_id"];

            echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <a href = 'product_details.php?product_id=$product_id'><img src='./admin_pannel/product_images/$product_image1' class='card-img-top' alt='...'></a>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-text'>$product_price</p>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>                            
                    </div>
                </div>
            </div>";
        }
        
    }
    
}

// display all products
function displayAllProducts(){
    global $con;

    if (!isset($_GET['category'])){

        $select_products = "select * from products order by rand()";
        $result_products = mysqli_query($con, $select_products);
        while($row_products = mysqli_fetch_assoc($result_products))
        {

            $product_id = $row_products["product_id"];
            $product_title = $row_products["product_title"];
            $product_description = $row_products["product_description"];
            $product_keywords = $row_products["product_keywords"];
            $product_image1 = $row_products["product_image1"];
            $product_price = $row_products["product_price"];
            $category_id = $row_products["category_id"];

            echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <a href = 'product_details.php?product_id=$product_id'><img src='./admin_pannel/product_images/$product_image1' class='card-img-top' alt='...'></a>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-text'>$product_price</p>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>                            
                    </div>
                </div>
            </div>";
        }
        
    }
}



// display product by category
function displayProductByCategory()
{
    global $con;
    
    if (isset($_GET['category'])){
        
        $category_id = $_GET['category'];
        $select_products = "select * from products where category_id='$category_id'";
        $result_products = mysqli_query($con, $select_products);
        $no_of_products = mysqli_num_rows($result_products);
        if ($no_of_products == 0)
        {
            echo "<h2 class='text-center text-danger'>No products found in this category</h2>";
        }
        while($row_products = mysqli_fetch_assoc($result_products))
        {
            $product_id = $row_products["product_id"];
            $product_title = $row_products["product_title"];
            $product_description = $row_products["product_description"];
            $product_keywords = $row_products["product_keywords"];
            $product_image1 = $row_products["product_image1"];
            $product_price = $row_products["product_price"];
            $category_id = $row_products["category_id"];
        
            echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <a href = 'product_details.php?product_id=$product_id'><img src='./admin_pannel/product_images/$product_image1' class='card-img-top' alt='...'></a>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-text'>$product_price</p>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>                            
                    </div>
                </div>
            </div>";
        }
    }
}

//displaying the product category in navbar
function displayCategory()
{

    global $con;
    $select_category="select * from categories";
    $result_cat=mysqli_query($con, $select_category);
    while($row_data=mysqli_fetch_assoc($result_cat))
    {
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];
        echo " <li class='nav-item'>
        <a class='nav-link' href='index.php?category=$category_id'>$category_title</a>
        </li> " ;
    }

}

function searchProduct(){
    global $con;

    if (isset($_GET['search_data_product']))
    {
        $search_data_value = $_GET['search_data'];
        // echo $search_data_value;
        $search_products = "select * from products where keyword like '%$search_data_value%'";
        $result_search = mysqli_query($con, $search_products);
        // echo "<h2 class='text-center text-danger'>No products found in this category</h2>";
        while($row_products = mysqli_fetch_assoc($result_search))
        {

            $product_id = $row_products["product_id"];
            $product_title = $row_products["product_title"];
            $product_description = $row_products["product_description"];
            $product_keywords = $row_products["product_keywords"];
            $product_image1 = $row_products["product_image1"];
            $product_price = $row_products["product_price"];
            $category_id = $row_products["category_id"];

            echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <a href = 'product_details.php?product_id=$product_id'><img src='./admin_pannel/product_images/$product_image1' class='card-img-top' alt='...'></a>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-text'>$product_price</p>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>                            
                    </div>
                </div>
            </div>";
        }
        
    }
    
}

// view product details
function viewProductDetails(){
    global $con;
    if (isset($_GET['product_id'])){
    if (!isset($_GET['category'])){
        
        $product_id = $_GET['product_id'];
        $select_products = "select * from products where product_id='$product_id'";
        $result_products = mysqli_query($con, $select_products);
        while($row_products = mysqli_fetch_assoc($result_products))
        {

            $product_id = $row_products["product_id"];
            $product_title = $row_products["product_title"];
            $product_description = $row_products["product_description"];
            $product_keywords = $row_products["product_keywords"];
            $product_image1 = $row_products["product_image1"];
            $product_image2 = $row_products["product_image2"];
            $product_image3 = $row_products["product_image3"];
            $product_price = $row_products["product_price"];
            $category_id = $row_products["category_id"];

            echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <a href = 'product_details.php?product_id=$product_id'><img src='./admin_pannel/product_images/$product_image1' class='card-img-top' alt='...'></a>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-text'>$product_price</p>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>                            
                    </div>
                </div>
            </div>
            <div class='col-md-8'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <h3 class='text-center text-info mb-5'>Related Products</h3>
                        </div>
                        <div class='col-md-6'>
                            <img src='./admin_pannel/product_images/$product_image2' class='card-img-top' alt='...'>
                        </div>
                        <div class='col-md-6'>
                            <img src='./admin_pannel/product_images/$product_image3' class='card-img-top' alt='...'>
                        </div>
                    </div>
                </div>";
        }
    }
    }
}


// ip address function

function get_client_ip_address() {
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
    else{  
            $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}  


//cart function
function cart(){
    global $con;
    if(isset($_GET['add_to_cart'])){
        $ip = get_client_ip_address();
        $get_product_id = $_GET['add_to_cart'];
        $check_product = "select * from cart_details where ip_address='$ip' AND product_id=$get_product_id";
        $run_check = mysqli_query($con, $check_product);
        if(mysqli_num_rows($run_check)>0){
            echo "<script>alert('Product is already added in the cart')</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        }
        else{
            $insert_product = "insert into cart_details (product_id, ip_address, quantity) values ($get_product_id, '$ip', 0)";
            $run_product = mysqli_query($con, $insert_product);
            echo "<script>window.open('index.php', '_self')</script>";
        }
    }
}

// function to get no. of items in cart
function count_cart(){
    global $con;
    if(isset($_GET['add_to_cart'])){
        $ip = get_client_ip_address();
        $check_product = "select * from cart_details where ip_address='$ip'";
        $run_check = mysqli_query($con, $check_product);
        $count_product = mysqli_num_rows($run_check);
    }else{
        $ip = get_client_ip_address();
        $check_product = "select * from cart_details where ip_address='$ip'";
        $run_check = mysqli_query($con, $check_product);
        $count_product = mysqli_num_rows($run_check);
    }
    echo $count_product;
}


// function to get total price of items in cart
function totalCartPrice(){
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
            $values = array_sum($product_price);
            $total += $values;
        }
    }
    echo $total;
}



?>
