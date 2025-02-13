<?php
include '../includes/connect.php';
if (isset($_POST['insert_product'])){

    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];
    
    // acessing the images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];
    // echo $product_image1.''.$product_title.''.$product_description.'';

    // temp names of images
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    

    // checking empty fields
    if ($product_title == '' || $product_description == '' || $product_keywords == '' || $product_category == '' || $product_price == '') {
        echo "<script>alert('Please fill all fields!')</script>";
        exit();
    }else{
    //  move the images to the product_images folder
    move_uploaded_file($temp_image1, "./product_images/$product_image1");
    move_uploaded_file($temp_image2, "./product_images/$product_image2");
    move_uploaded_file($temp_image3, "./product_images/$product_image3");



    $insert_cat = "insert into products (product_title, product_description, keyword, category_id, product_image1, product_image2, product_image3, product_price, date) values ('$product_title', '$product_description', '$product_keywords', '$product_category', '$product_image1', '$product_image2', '$product_image3', '$product_price', NOW())";
    $run_cat = mysqli_query($con, $insert_cat);
    if($run_cat){
        echo "<script>alert('Product has been inserted successfully!')</script>";
        //     echo "<script>window.open('index.php?insert_category', '_self')</script>";
        }

    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products - Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS File -->
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">

            <!-- Product Title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" id="product_title" name="product_title" placeholder="Enter Product Title" class="form-control" required>
            </div>

            <!-- Product Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product Description</label>
                <input type="text" id="product_description" name="product_description" placeholder="Enter Product Description" class="form-control" required>
            </div>

            <!-- Product Keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" id="product_keywords" name="product_keywords" placeholder="Enter Product Keywords" class="form-control" required>
            </div>
            
            <!-- Product Category -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select" required>
                    <option value="">Select a Category</option>
                    <?php
                        $select_category="select * from categories";
                        $result_cat=mysqli_query($con, $select_category);
                        while($row_data=mysqli_fetch_assoc($result_cat))
                        {
                            $category_title = $row_data['category_title'];
                            $category_id = $row_data['category_id'];
                            echo " <option value='$category_id'>$category_title</option> ";
                        }
                    ?> 
                </select>
            </div>
            
            <!-- Product Image 1-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image 1</label>
                <input type="file" id="product_image1" name="product_image1" class="form-control" required>
            </div>
            
            <!-- Product Image 2-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image 2</label>
                <input type="file" id="product_image1" name="product_image2" class="form-control" required>
            </div>
            
            <!-- Product Image 3-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product Image 3</label>
                <input type="file" id="product_image3" name="product_image3" class="form-control" required>
            </div>
            
            <!-- Product Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" id="product_price" name="product_price" placeholder="Enter Product Price" class="form-control" required>
            </div>

            <!-- Submit Button -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" value="Insert Product" class="btn btn-info mb-3 px-3">
            </div>

        </form>    
    </div>

</body>
</html>