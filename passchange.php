<?php include('connection.php');
$admin_email = $_POST["admin_email"];
$admin_pass = $_POST["admin_pass"];

$query = "update admin_login set admin_pass='$admin_pass' where admin_email='$admin_email'";
$result = mysqli_query($conn, $query);
if($result){
    echo "<script> alert('Password Updated Successfully')</script>";
    echo "<script>window.open('index.php','_self')</script>";
} else {
    echo "<script> alert('Error to Upadate Password')</script>";
    echo "<script>window.open('changepass.php','_self')</script>";
}