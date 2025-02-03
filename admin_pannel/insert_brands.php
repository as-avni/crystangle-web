<!-- FORM -->

<?php
    include '../includes/connect.php';
    if(isset($_POST['insert_brand'])){
        $brand_title = $_POST['brand_title'];
        $select_brand = "select * from brands where brand_title='$brand_title'";
        $run_select = mysqli_query($con, $select_brand);
        if(!mysqli_num_rows($run_select) == 0){
            echo "<script>alert('Category already exists!')</script>";
            exit();
        }else{
            $insert_brands = "insert into brands (brand_title) values ('$brand_title')";
            $run_brand = mysqli_query($con, $insert_brands);
            if($run_brand){
                echo "<script>alert('Brands has been inserted successfully!')</script>";
                //     echo "<script>window.open('index.php?insert_category', '_self')</script>";
            }
        }
    }
?>
<h2 class="text-center bg-light">Insert Brands</h2>
<form action="" method="post" class="mb-2">
    <div class="input-gorup w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="Brands" aria-describedby="basic-addon1">
    </div>
    <div class="input-gorup w-10 mb-2">
    <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brand" placeholder="Insert Brands" value="Insert Brands" aria-label="Brands" aria-describedby="basic-addon1">
    <!-- <button class="bg-info px-3 my-2 border-0">Insert Brands</button>     -->
    </div>
</form>