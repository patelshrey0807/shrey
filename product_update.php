<?php include("connection.php"); ?>
<?php

if (isset($_POST["submit"])) {
    $category_id = $_POST["category_id"];
    $product_id = $_POST["product_id"];
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_desc = $_POST["product_desc"];

    // Check if a file was uploaded
    if (!empty($_FILES['product_image']['name'])) {
        $host = 'upload/';
        $fileinfo = basename($_FILES['product_image']['name']);
        $file_path = $host . $fileinfo;

        // Try to move uploaded file
        if (move_uploaded_file($_FILES['product_image']['tmp_name'], $file_path)) {
            // Update including image
            $query = "UPDATE tbl_product 
                      SET category_id = '$category_id', 
                          product_name = '$product_name', 
                          product_price = '$product_price', 
                          product_image = '$file_path', 
                          product_desc = '$product_desc' 
                      WHERE product_id = '$product_id'";
        } else {
            echo "<script>alert('Image upload failed.')</script>";
            exit;
        }
    } else {
        // Update without image
        $query = "UPDATE tbl_product 
                  SET category_id = '$category_id', 
                      product_name = '$product_name', 
                      product_price = '$product_price', 
                      product_desc = '$product_desc' 
                  WHERE product_id = '$product_id'";
    }

    // Execute query
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('Data Updated Successfully')</script>";
        echo "<script>window.open('view_product.php','_self')</script>";
    } else {
        echo "<script>alert('Failed to update data.')</script>";
    }
}
?>
