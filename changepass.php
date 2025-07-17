<?php
session_start();
$admin_email=$_SESSION["admin_email"];
$admin_pass= $_SESSION["admin_pass"];
include("header.php");?>

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form action="passchange.php" method="post">
                    <div class="card-header">
                      <h4>Change Password</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="<?php echo $admin_email;?>" name="admin_email" class="form-control" readonly>
                      </div>
                      
                      <div class="form-group mb-0">
                        <label>Password</label>
                        <input type="password" name="admin_pass"  value="<?php echo $admin_pass?>" class="form-control">
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








<?php include('footer.php');?>