<?php include('connection.php');

if(isset($_POST["submit"])){
    $host='upload/';
    $product_name=$_POST["product_name"];
    $category_id=$_POST["category_id"];

    $product_price=$_POST["product_price"];
    $product_desc=$_POST["product_desc"];
    $fileinfo=basename($_FILES['image']['name']);
    $file_path=$host.$fileinfo;
    $upload=$file_path;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $file_path)) {

    $query = "INSERT INTO tbl_product(category_id,product_name,product_price, product_image, product_desc) VALUES('$category_id','$product_name', '$product_price', '$upload', '$product_desc')";
    $result = mysqli_query($conn, $query);

    if($result){
        //echo "data Inserted";
        echo "<script>alert('Product Data Inserted')</script>";
        echo "<script>window.open('view_product.php', '_self')</script>";
    }
    else{
        echo "error to insert Product";
    }
}
}
?>