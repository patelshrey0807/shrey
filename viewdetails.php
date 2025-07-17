<?php include('header.php');
include('connection.php');
$order_number = $_GET['order_number'];
$query = "select a.*,b.* from tbl_order as a, tbl_product as b where a.product_id = b.product_id and a.order_number = '$order_number'";
$result = mysqli_query($conn, $query);

?>
  <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-8 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Order Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Product Name</th>
                          <th>Image</th>
                          <th>Qty</th>
                          <th>Price</th>
                        </tr>
<?php
$i=1;
 while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row["product_name"];?></td>
                            <td><img src="<?php echo $row["product_image"];?>" width="50"></td>
                            <td><?php echo $row["qty"];?></td>
                            <td><?php echo $row["product_price"]?></td>
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