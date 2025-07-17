<?php include('header.php');?>

 <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form action="category_insert.php" method="post" enctype="multipart/form-data">
                    <div class="card-header">
                      <h4>Add Category</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="category_name" class="form-control" required="">
                      </div>

                      <div class="form-group">
                        <label>Product Image</label>
                        <input type="file" name="image" class="form-control">
                      </div>
                      
                      <div class="form-group mb-0">
                        <label>Description</label>
                        <textarea name="category_desc" class="form-control" required=""></textarea>
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