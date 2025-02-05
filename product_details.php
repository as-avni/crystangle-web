<?php
include './includes/connect.php';
include './functions/commom_function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crystangle - Cool Wearables</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS File -->
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>
    <div class="contaier-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-custom">
        <div class="container-fluid">
        <img src="./src/images/logo.jpg" alt="" class="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent p-10">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="display_all.php">Products</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                </li>
            </ul>
        <form class="d-flex" action="search_products.php" method="get">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
            <input type="submit" class="btn btn-outline-light" name="search_data_product" value="Search">
        </form>
        </div>
    </div>
    </nav>

    <?php
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
    
    <!-- <div class="hero123">
        <div>
            <h1>Heading</h1>
            <p>Paragraph</p>
        </div>
    </div> -->


        <!-- Fourth Child -->
    <div class="row px-1">
        <div class="col-md-10">
        <!-- products -->
            <div class="row">
                    
                <?php
                viewProductDetails();
                displayProductByCategory();
                ?>

            </div>
        </div>
        <div class="col-md-2 bg-custom1 p-0 me-auto">
            <!-- sidenav -->

            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-custom">
                    <a class="nav-link" href="#"><h4>Categories</h4></a>
                </li>
                    <?php
                        displayCategory();
                    ?>
            </ul>
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