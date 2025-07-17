<?php
include('connection.php');
$category_id = $_GET["category_id"]; 
$query = "select * from tbl_category where category_id = '$category_id'";
$result = mysqli_query($conn,$query);

?>
<?php include('header.php');?>

 <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form action="category_update.php" method="post" enctype="multipart/form-data">
                    <?php

 while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                    <div class="card-header">
                      <h4>Edit Category</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                         <input type="hidden" name="category_id" class="form-control" value="<?php echo $row["category_id"]; ?>">
                        <label>Category Name</label>
                        <input type="text" name="category_name" class="form-control" value="<?php echo $row["category_name"]; ?>" required="">
                      </div>

                        <div class="form-group">
                        <label>Category Image</label>
                        <input type="file" name="image" class="form-control"><br>
                        <img src="<?php echo $row["image"]?>" width="70px">
                      
                      <div class="form-group mb-0">
                        <label>Description</label>
                        <textarea name="category_desc" class="form-control"><?php echo $row["category_desc"]; ?></textarea>
                      </div>
                    </div>
                    <?php }?>
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