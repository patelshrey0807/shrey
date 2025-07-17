<?php
include('connection.php');
$category_id=$_GET["category_id"];
$query= "delete from tbl_category where category_id = '$category_id'";

$result=mysqli_query($conn,$query);
if($result){
        echo "<script>alert('Category Deleted Successfully')</script>";
        echo "<script>window.open('view_category.php', '_self')</script>";
}  else{
    echo "Sorry Cannot be Delete Category";
}
?>