<nav class="navbar navbar-expand-lg navbar-light bg-custom">
    <div class="container-fluid">
    <img src="./src/images/logo.jpg" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent p-10">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup><?php count_cart(); ?></sup></a>
                </li>
            </ul>
            <form class="d-flex" action="search_products.php" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                <input type="submit" class="btn btn-outline-light" name="search_data_product" value="Search">
            </form>
        </div>
    </div>
</nav>