<?php include('connection.php');

$order_number = $_GET['order_number'];
$query = "update tbl_order set order_status = 2 where order_number = '$order_number'";
$result = mysqli_query($conn, $query);
if($result){

    echo "<script> alert('Order Rejected')</script>";
    echo "<script> window.open('manageproduct.php','_self')</script>";
}