<?php
session_start();
include('connection.php');
if(isset($_POST['submit'])){
    $admin_email= $_POST["admin_email"];
    $admin_pass= $_POST["admin_pass"];

    $query = "select * from admin_login where admin_email='$admin_email' and admin_pass='$admin_pass'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    if($row){
         $_SESSION["admin_email"]=$row["admin_email"];
         $_SESSION["admin_id"]=$row["admin_id"];
         $_SESSION["admin_pass"]=$row["admin_pass"];
        
        echo "<script>alert('Your Login Successfully')</script>";
        echo "<script>window.open('dashboard.php','_self')</script>";
    } else{
        echo "<script>alert('Invalid Email OR Password')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
?>
