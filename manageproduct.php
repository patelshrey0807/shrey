<?php include('header.php');?>
<?php include('connection.php');
$order_id = $_GET['order_id'];

$query = "select a.*,b.* from tbl_order as a join user_login as b on a.user_id = b.user_id group by a.order_number";
$result = mysqli_query($conn, $query);
?>
  <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-8 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Order List</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Order Number</th>
                          <th>User Name</th>
                          <th>Order Date</th>
                          <th>Order Status</th>
                         
                          <th>Action</th>
                        </tr>
<?php
$i=1;
 while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row["order_number"];?></td>
                            <td><?php echo $row["user_name"];?></td>
                            <td><?php echo $row["order_date"];?></td>
                            <td><?php $order_status=$row['order_status'];?> <?php
                            if($row['order_status'] == 0){?>
                            <a href="approve.php?order_number=<?php echo $row['order_number'];?>" class="btn btn-primary" title="Approve"><i data-feather="check"></i></a>                                            
                                                                            <a href="reject.php?order_number=<?php echo $row['order_number'];?>" class="btn btn-danger" title="Reject"><i data-feather="x"></i></a>
                                                                          <?php } elseif($row['order_status'] == 1){?>
                                                                            <h5 style="color:green;">Approved..</h5>
                                                                            <?php } elseif($row['order_status'] == 2){?>
                                                                            <h5 style="color:red">Rejected..</h5>
                                                                            <?php }?>
                                                                          </td>
                            <td><a href="viewdetails.php?order_number=<?php echo $row['order_number']?>" class="btn btn-primary">View Details</a></td>
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