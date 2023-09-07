<?php
  include_once 'header.php';
  // include_once 'logout.php';
  
?>
     
     <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              
              <li class="nav-item"><a class="nav-link" href="apartment_search.php?search="> Apartments </a></li>
                <li class="nav-item"><a class="nav-link" href="tenants_search.php?search="> Tenant form </a></li>
                <li class="nav-item"><a class="nav-link" href="maintainance_search.php?search="> maintanance expenses </a></li>
                <li class="nav-item"><a class="nav-link active" href="payroll_search.php?search="> payroll expenses </a></li>
                <li class="nav-item"><a class="nav-link" href="legal_search.php?search="> legal expenses </a></li>
                <li class="nav-item"><a class="nav-link" href="tenants_leases.php?search="> Leases </a></li>
                <li class="nav-item"><a class="nav-link" href="staff_search.php?search="> Staff </a></li>
                <li class="nav-item"><a class="nav-link" href="profile.php"> Profile page </a></li>
                
              
                
              
             
            </div>
          </div>
        </div>
      </nav> 
     <form action="" method="GET">
        <div class="input-group mb-3" style="margin-top: 10%;">
          <input type="text" style="padding-left: 10%; padding-right: 10%; width: 50%;" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control">
          <button class="btn btn-dark" type="submit">search</button>
        </div>
        <hr class="my-4">
      </form>
      <div class="col-md-12" >
        <div class="card mt-4" >
        <div class="card-body" >
           <table class="table table-bordered" style="background-color: rgb(1, 67, 67);">
           <p style="margin-left: 0cm; text-align: center;"><h5> SALARY EXPENSE SEARCH RESULTS</h5></p>
  
            <hr class="my-4">
            <thead>
              <tr>
                <th>PayID</th>
                <th>Staff name</th>
                <th>Position</th>
                <th>Amount</th>
                <th>Payment Method</th>
                <th>Bank Name</th>
                <th>Account Number</th>
                <th>Name Of Account Number</th>
                <th>Is It Paid</th>
                <th>Completed By</th>
                <th>Date Of Completion</th>
              </tr>
            </thead>
            <tbody>
              <?php 
               $conn = mysqli_connect("localhost", "root", "", "mrel");

               if(isset($_GET['search']));
               {
                 $filtervalues = $_GET['search'];
                 $query = "SELECT * FROM payroll_expenses WHERE CONCAT(PayID, Staff_name, Position, Amount, Payment_Method, Bank_name, Account_Number, Name_of_account, Ispaid, Completed_By, Date_of_completion) LIKE '%$filtervalues%' ";
                 $query_run = mysqli_query($conn, $query);

                 if(mysqli_num_rows($query_run) > 0)
                 {
                    foreach($query_run as $items)
                    {
                      ?>
                      <tr>
                      <td><?= $items['PayID']; ?></td>
                      <td><?= $items['Staff_name']; ?></td>
                      <td><?= $items['Position']; ?></td>
                      <td><?= $items['Amount']; ?></td>
                      <td><?= $items['Payment_Method']; ?></td>
                      <td><?= $items['Bank_name']; ?></td>
                      <td><?= $items['Account_Number']; ?></td>
                      <td><?= $items['Name_of_account']; ?></td>
                      <td><?= $items['Ispaid']; ?></td>
                      <td><?= $items['Completed_By']; ?></td>
                      <td><?= $items['Date_of_completion']; ?></td>
                      </tr>
                      <?php
                    }
                  }
                else
                 {
                  ?>
                   <tr>
                     <td colspan="11">No results found.</td>
                   </tr>
                  <?php
                  }
               }
              ?>

            </tbody>
           </table>
           <div>
            <button id="btn" class="btn btn-dark" type="submit"> Show More</button>
           </div>
           <hr class="my-4">
           <div style="color: whitesmoke; display: flex; justify-content: center;">
                <button class="btn btn-dark" type="submit"><a href="payroll_expenses.php" style="color: whitesmoke;">Add New Payroll Expense</a></button>
           </div>
        </div>
        </div>
      </div>

      <?php
  include_once 'footer.php';
?>