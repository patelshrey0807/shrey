<?php include('header.php');
include('connection.php');
$query = "select * from user_login";
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
                          <th>User Name</th>
                          <th>Contact No.</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Action</th>
                        </tr>
<?php
$i=1;
 while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row["user_name"];?></td>
                            <td><?php echo $row["user_phone"];?></td>
                            <td><?php echo $row["user_email"];?></td>
                            <td><?php echo $row["user_address"];?></td>
                            <td><?php if($row['user_status'] == 0){?>
                            <a href="block.php?user_id=<?php echo $row['user_id'];?>" class="btn btn-danger" title="Block"><i data-feather="x"></i></a>
                            <?php } elseif($row['user_status'] == 1){?>
                            <a href="unblock.php?user_id=<?php echo $row['user_id'];?>" class="btn btn-primary" title="Unblock"><i data-feather="check"></i></a><?php }?>    
                            </td>
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