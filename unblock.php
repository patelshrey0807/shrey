<?php include('connection.php');

$user_id = $_GET['user_id'];
$query = "update user_login set user_status = 0 where user_id = '$user_id'";
$result = mysqli_query($conn, $query);
if($result){

    echo "<script> alert('User Unblocked')</script>";
    echo "<script> window.open('viewuser.php','_self')</script>";
}