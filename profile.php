
<?php
  include_once 'header.php';
  include_once "config.php";
  if(!isset($_SESSION['MrelID'])){
    header("location: Cover-page.php");
  }
?>
<div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              
                <li class="nav-item"><a class="nav-link" href="apartment_search.php?search="> Apartments </a></li>
                <li class="nav-item"><a class="nav-link" href="tenants_search.php?search="> Tenant form </a></li>
                <li class="nav-item"><a class="nav-link" href="maintainance_search.php?search="> maintanance expenses </a></li>
                <li class="nav-item"><a class="nav-link" href="payroll_search.php?search="> payroll expenses </a></li>
                <li class="nav-item"><a class="nav-link" href="legal_search.php?search="> legal expenses </a></li>
                <li class="nav-item"><a class="nav-link" href="tenants_leases.php?search="> Leases </a></li>
                <li class="nav-item"><a class="nav-link" href="staff_search.php?search="> Staff </a></li>
                <li class="nav-item"><a class="nav-link active" href="profile.php"> Profile page </a></li>
                
              
                
              
             
            </div>
          </div>
        </div>
      </nav>

      <div class="row" style="margin-top: 5%;">
      <div class="col-lg-4" >
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="apartment.jpg" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
              <?php 
            $sql = mysqli_query($conn, "SELECT * FROM mrel_staff WHERE MrelID = {$_SESSION['MrelID']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
            
          ?>
          <div class="details">
            <br>
            <p class="text-muted mb-1"><span> <?php echo $row['Full_name']; ?></span><p>
            <p class="text-muted mb-1"><span> <?php echo $row['Position']; ?></span><p>
            <p class="text-muted mb-1"><span> <?php echo $row['Region']; ?></span><p>
            <p class="text-muted mb-1"><span> <?php echo $row['District']; ?></span><p>
          </div>
         <button class="btn btn-dark" type="submit"> <a href="logout.php?MrelID=<?php echo $row['MrelID']; ?>" class="logout btn btn-dark">Logout</a></button>
        </div>
          </div>
</div>
      <br>
    
      <div class="col-lg-8">
        <div class="card mb-4">
        <div class="card-body">
            <div class="row">
            <p class="mb-4"><h5>1. Personal Details.</h5></p>
            <hr>
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['Full_name']; ?></span><p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Staff ID</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['MrelID']; ?></span><p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['email']; ?></span><p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date Of Birth</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['Date_of_birth']; ?></span><p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['Gender']; ?></span><p>
              </div>
            </div>
            
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['Phone_number']; ?></span><p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone 2 (optional)</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['Phone_number2']; ?></span><p>
              </div>
            </div>
          </div>
        </div>


       
      <div class="col-lg-16">
        <div class="card mb-4">
        <div class="card-body">
            <div class="row">
            <p class="mb-4"><h5>1. Spouse's Details.</h5></p>
            <hr>
              <div class="col-sm-3">
                <p class="mb-0">Martial Status</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['Martial_status']; ?></span><p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name Of Spouse</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['Name_of_spouse']; ?></span><p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">D.O.B Of Spouse</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['Date_of_birth_of_spouse']; ?></span><p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone Number Of Spouse</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['Number_of_spouse']; ?></span><p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Number Of Children</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['Number_of_children']; ?></span><p>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-16">
        <div class="card mb-4">
        <div class="card-body">
            <div class="row">
            <p class="mb-4"><h5>1. Payment's Details.</h5></p>
            <hr>
              <div class="col-sm-3">
                <p class="mb-0">Payment Method</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['Payment_method']; ?></span><p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Bank Name</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['Bank_name']; ?></span><p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name Of Bank Account</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['Name_of_bank_account']; ?></span><p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Account Number</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-1"><span> <?php echo $row['Account_number']; ?></span><p>
              </div>
            </div>
          </div>
        </div>

        <script src="javascript/users.js"></script>   
<?php
  include_once 'footer.php';
?>