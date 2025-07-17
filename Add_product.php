<?php include('header.php');
include('connection.php');
$query = "select * from tbl_category";
$result = mysqli_query($conn,$query);
?>

 <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form action="prod_insert.php" method="post" enctype="multipart/form-data">
                    <div class="card-header">
                      <h4>Add Product</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Product Category</label>
                        <select class="form-control" required="" name="category_id">
                          <option value="">Select Category</option>
                          <?php while($row = mysqli_fetch_array($result)){ ?>
                          <option value="<?php echo $row["category_id"]; ?>"><?php echo $row["category_name"]; ?></option>
                          <?php }?>
                          
</select>
</div>                    
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="product_name" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Product Price</label>
                        <input type="number" name="product_price" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Product Image</label>
                        <input type="file" name="image" class="form-control" required="">
                      </div>
                      <div class="form-group mb-0">
                        <label>Description</label>
                        <textarea name="product_desc" class="form-control" required=""></textarea>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <input type="submit" name="submit" class="btn btn-primary">
                    </div>
                  </form>
                </div>
</div>
</div>
</div>
</section>
</div>

<?php include('footer.php'); ?>