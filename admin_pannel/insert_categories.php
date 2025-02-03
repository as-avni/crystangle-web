<?php
    include '../includes/connect.php';
    if(isset($_POST['insert_cat'])){
        $category_title = $_POST['cat_title'];
        $select_cat = "select * from categories where category_title='$category_title'";
        $run_select = mysqli_query($con, $select_cat);
        if(!mysqli_num_rows($run_select) == 0){
            echo "<script>alert('Category already exists!')</script>";
            exit();
        }else{
            $insert_cat = "insert into categories (category_title) values ('$category_title')";
            $run_cat = mysqli_query($con, $insert_cat);
            if($run_cat){
                echo "<script>alert('Category has been inserted successfully!')</script>";
                //     echo "<script>window.open('index.php?insert_category', '_self')</script>";
            }
        }
    }
?>





<!-- FORM -->
<h2 class="text-center bg-light">Insert Categories</h2>
<form action="" method="post" class="mb-2">
    <div class="input-gorup w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Categories" aria-describedby="basic-addon1">
    </div>
    <div class="input-gorup w-10 mb-2">
    <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" placeholder="Insert Categories" value="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
    <!-- <button class="bg-info px-3 my-2 border-0">Insert Categories</button>     -->
    </div>
</form>