<?php
$server="localhost";
$username="root";
$password="";
$db="ecom";

$conn=mysqli_connect($server, $username, $password, $db);
if($conn){
    //echo "connection Successfully";
}
else{
    echo "connection failed";
}
?>