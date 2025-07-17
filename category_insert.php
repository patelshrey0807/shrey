<?php
include('connection.php');
if(isset($_POST["submit"])){
    $category_name = $_POST["category_name"];
    $category_desc = $_POST["category_desc"];
    $host = 'upload/';
    $fileinfo=basename($_FILES['image']['name']);
    $file_path=$host.$fileinfo;
    $upload=$file_path;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $file_path)) {

    $query = "INSERT INTO tbl_category(category_name, image, category_desc) VALUES('$category_name', '$upload', '$category_desc')";
    $result = mysqli_query($conn, $query);

    if($result){
        //echo "Category Inserted Successfully";
        echo "<script>alert('Category Inserted Successfully')</script>";
        echo "<script>window.open('view_category.php','_self')</script>";
    }
    else{
        echo "error to insert category";
    }
}
}
 ?>