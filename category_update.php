<?php
include('connection.php');
if(isset($_POST["submit"])){
$category_name = $_POST["category_name"];
$category_desc = $_POST["category_desc"];
$category_id = $_POST["category_id"];

if (!empty($_FILES['image']['name'])) {
        $host = 'upload/';
        $fileinfo = basename($_FILES['image']['name']);
        $file_path = $host . $fileinfo;

        // Try to move uploaded file
        if (move_uploaded_file($_FILES['image']['tmp_name'], $file_path)) {
            // Update including image
            $query = "UPDATE tbl_category 
                     SET category_name = '$category_name',
                     image = '$file_path',  
                      category_desc = '$category_desc' 
                  WHERE category_id = '$category_id'";
        } else {
            echo "<script>alert('Image upload failed.')</script>";
            exit;
        }
    } else {
        // Update without image
        $query = "UPDATE tbl_category 
                  SET category_name = '$category_name',  
                      category_desc = '$category_desc' 
                  WHERE category_id = '$category_id'";
    }

    // Execute query
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('Data Updated Successfully')</script>";
        echo "<script>window.open('view_category.php','_self')</script>";
    } else {
        echo "<script>alert('Failed to update data.')</script>";
    }
}
 ?>