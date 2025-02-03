<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome link -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- CSS File -->
    <link rel="stylesheet" href="../style.css">
    
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
    
        <nav class="navbar navbar-expand-lg navbar-light bg-custom">
            <div class="container-fluid">
                <img src="../src/images/logo.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome, Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- Second Child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        
        <!-- Third Child -->
        <div class="row">
            <div class="col-md-12 bg-custom1 p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../src/images/img-hairband.png" alt="" class="admin-img"></a>
                    <p class="text-center text-light">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="#" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button><a href="insert_categories.php" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
        </div>
        
        <!-- Fourth Child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Insert Category</h3>
        </div>

    </div>
    


    




    <!-- Bootsrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>
</body>
</html>