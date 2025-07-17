<?php
include("connection.php");

$product_id = $_GET["product_id"];
$query1 = "select * from tbl_product where product_id='$product_id'";
$result1 = mysqli_query($conn, $query1);


$query = "select * from tbl_category";
$result = mysqli_query($conn,$query);
?>

<?php
include('header.php');?>

 <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form action="product_update.php" method="post" enctype="multipart/form-data">
                    <?php
                    while($row1 = mysqli_fetch_array($result1)){?>
                    <div class="card-header">
                      <h4>Edit Product</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Product Category</label>
                        <select class="form-control" name="category_id">
                          <option value="">Select Category</option>
                          <?php while($row = mysqli_fetch_array($result)){ ?>
<option value="<?php echo $row["category_id"]; ?>" <?php if($row1["category_id"] == $row["category_id"]) echo "selected"; ?>>
  <?php echo $row["category_name"]; ?>
</option>
                          <?php }?>
                          
</select>
</div>                    
                      <div class="form-group">
                        <input type="hidden" name="product_id" value="<?php echo $row1["product_id"]?>">
                        <label>Product Name</label>
                        <input type="text" name="product_name" value="<?php echo $row1["product_name"]?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Product Price</label>
                        <input type="number" name="product_price"  value=<?php echo $row1["product_price"]?> class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Product Image</label>
                        <input type="file" name="product_image" class="form-control"><br>
                        <img src="<?php echo $row1["product_image"]?>" width="70px">
                      </div>
                      <div class="form-group mb-0">
                        <label>Description</label>
                        <textarea name="product_desc" class="form-control"><?php echo $row1["product_desc"]?></textarea>
                      </div>
                    </div>
                      <?php }?>
                    <div class="card-footer text-right">
                      <input type="submit" name="submit" class="btn btn-primary">
                    </div>
                  </form>
                </div>
</div>
<?php include("footer.php");?>