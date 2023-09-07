<?php
  include_once 'header.php';
?>
     
     <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              
                <li class="nav-item"><a class="nav-link" href="apartment_search.php?search="> Apartments </a></li>
                <li class="nav-item"><a class="nav-link active" href="tenants_search.php?search="> Tenant form </a></li>
                <li class="nav-item"><a class="nav-link" href="maintainance_search.php?search="> maintanance expenses </a></li>
                <li class="nav-item"><a class="nav-link" href="payroll_search.php?search="> payroll expenses </a></li>
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
        <div class="card-body table_responsive" >
           <table class="table table-bordered" style="background-color: rgb(1, 67, 67);">
           <p style="margin-left: 0cm; text-align: center;"><h5> TENANT SEARCH RESULTS</h5></p>
  
            <hr class="my-4">
            <thead>
              <tr>
                <th>TenID</th>
                <th>Tenant name</th>
                <th>Phone number</th>
                <th>Email</th>
                <th>Gender</th>
                <th>District</th>
                <th>Occupation</th>
              </tr>
            </thead>
            <tbody>
              <?php 
               $conn = mysqli_connect("localhost", "root", "", "mrel");

               if(isset($_GET['search']));
               {
                 $filtervalues = $_GET['search'];
                 $query = "SELECT * FROM tenants WHERE CONCAT(Name, PhoneNumber, Email, Gender, District, Occupation) LIKE '%$filtervalues%' ";
                 $query_run = mysqli_query($conn, $query);

                 if(mysqli_num_rows($query_run) > 0)
                 {
                    foreach($query_run as $items)
                    {
                      ?>
                      <tr>
                      <td><?= $items['TenID']; ?></td>
                      <td><?= $items['Name']; ?></td>
                      <td><?= $items['PhoneNumber']; ?></td>
                      <td><?= $items['Email']; ?></td>
                      <td><?= $items['Gender']; ?></td>
                      <td><?= $items['District']; ?></td>
                      <td><?= $items['Occupation']; ?></td>
                      </tr>
                      <?php
                    }
                  }
                else
                 {
                  ?>
                   <tr>
                     <td colspan="6">No results found.</td>
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
                <button class="btn btn-dark" type="submit"><a href="Tenants.php" style="color: whitesmoke;">Add New Tenants</a></button>
           </div>
        </div>
        </div>
      </div>

      <?php
  include_once 'footer.php';
?>