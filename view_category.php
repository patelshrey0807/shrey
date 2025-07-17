<?php include('header.php');
include('connection.php');
$query = "select * from tbl_category";
$result = mysqli_query($conn,$query);
?>
  <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-8 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Category List</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Description</th>
                         
                          <th>Action</th>
                        </tr>
<?php
$i=1;
 while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row["category_name"]; ?></td>
                            <td><img src="<?php echo $row["image"]; ?>" width="70"></td>
                            <td><?php echo $row["category_desc"]; ?></td>
                            <td><a class="btn btn-primary" href="editcategory.php?category_id=<?php echo $row["category_id"]; ?>">Edit</a> || <a class="btn btn-danger" href="delete_category.php?category_id=<?php echo $row["category_id"]?>">Delete</a></td>
</tr>
<?php $i++;} ?>
                        
                      </table>
                    </div>
                  </div>
</div>
</div>
</div>
</div>
</section>
</div>


<?php include('footer.php');?>