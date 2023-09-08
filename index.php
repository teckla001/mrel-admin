<?php
  include_once 'header.php';
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
                <li class="nav-item"><a class="nav-link" href="profile.php"> Profile page </a></li>
              
                
              
             
            </div>
          </div>
        </div>
      </nav> 
      <div class="card" style="margin-left: 35%; margin-top: 8%; margin-right: 35%; margin-bottom: 5%; background-color: rgb(1, 86, 86); border: none; ">
             <div class="card-body" style="display: flex; justify-content: center;" >
                 <table style="border: none;" width="100%" cellspacing="0" cellpadding="0">
                     <tbody>
                     <tr>
                     <td style="display: flex; justify-content:center; background:  rgb(1, 86, 86);" valign="top"><p style="margin-left: 0cm; text-align: center;"><b><span lang="EN-GB"><img src="apartment.jpg" alt="logo" width="60" height="60"></span></b></p>
                     </td>
                 </tr> 
                     <tr>
                         <td style="display: flex; justify-content:center; background:  rgb(1, 86, 86);" valign="top">
                         <p style="margin-left: 0cm; text-align: center;"><h4 style="color: whitesmoke;">MALAIKA REAL ESTATE LIMITED</h4></span></p>
                         <hr class="my-4">
                 </td>
                 </tr>
                 <tr>
                  <td>
                  <div class="content">
          <?php
            include_once 'config.php'; 
            $sql = mysqli_query($conn, "SELECT * FROM mrel_staff WHERE MrelID = {$_SESSION['MrelID']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <div class="details" style="color: whitesmoke;">
            <p style="colour: whitesmoke;"><span><h5> WELCOME,</h5> <?php echo $row['Full_name']; ?>.</span><p>
            <p style="colour: whitesmoke;"><span><b>Staff ID</b>, MREL<?php echo $row['MrelID']; ?>.</span><p>
          </div>
        </div>
                  </td>
                 </tr>
           <tr>
            <td>
            <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="check-circle-fill" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
                 <p><div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" style="width: 10%;"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    You have successfullly logged in the system!
  </div>
</div></p>
</td></tr>
                 <tr>
                 <td>
     
                     <hr class="my-4">
     
                     <p class="text-xs z-10 text-white-400 mt-6" style="margin-left: 8%; color: whitesmoke;">© 2023 Malaika Apartments.LTD, All right reserved.
                     </p> 
                 </td>
                 </tr>
                 </tbody>
                 </table>
             </div>
           </div>

           <?php
  include_once 'footer.php';
?>