<?php include('header.php');
include('connection.php');
$query="select a.category_name,b.* from tbl_category as a, tbl_product as b where a.category_id=b.category_id;";
$result=mysqli_query($conn,$query);
?>
<link rel="stylesheet" href="custom.css">
  <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Product List</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Product Category</th>
                          <th>Product Name</th>
                          <th>Product Price</th>
                          <th>Image</th>
                          <th>Discription</th>
                        </tr>
<?php 
$i=1;
while($row = mysqli_fetch_array($result)){?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $row["category_name"]?></td>
                            <td><?php echo $row["product_name"]; ?></td>
                            <td><?php echo $row["product_price"]; ?></td>
                            <td><img src="<?php echo $row["product_image"]; ?>" width="70"></td>
                            <td><?php echo $row["product_desc"]; ?></td>
<td class="button"><a href="editproduct.php?product_id=<?php echo $row['product_id']?>" class="btn btn-primary">Edit</a> | |  <a class="btn btn-danger" href="delete_product.php?product_id=<?php echo $row["product_id"]?>">Delete</a></td>
</tr>
<?php $i++;}?>                   
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