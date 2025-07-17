<?php include('connection.php');
if(isset($_GET['product_id'])){
    $product_id = $_GET['product_id'];
    $query = "DELETE FROM tbl_product WHERE product_id='$product_id'";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<script>alert('Product Deleted Successfully');</script>";
        echo "<script>window.open('view_product.php','_self');</script>";
    }
    else{
        echo "sorry you cannot delete this product, it is used in order";
    }
}
?>