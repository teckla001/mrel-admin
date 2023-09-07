<?php
  include_once 'header.php';
?>
<div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              
                <li class="nav-item"><a class="nav-link" href="apartment_search.php?search="> Apartments </a></li>
                <li class="nav-item"><a class="nav-link" href="tenants_search.php?search="> Tenant form </a></li>
                <li class="nav-item"><a class="nav-link" href="maintainance_search.php?search="> maintanance expenses </a></li>
                <li class="nav-item"><a class="nav-link" href="payroll_search.php?search="> payroll expenses </a></li>
                <li class="nav-item"><a class="nav-link active" href="legal_search.php?search="> legal expenses </a></li>
                <li class="nav-item"><a class="nav-link" href="tenants_leases.php?search="> Leases </a></li>
                <li class="nav-item"><a class="nav-link" href="staff_search.php?search="> Staff </a></li>
                <li class="nav-item"><a class="nav-link" href="profile.php"> Profile page </a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php"> Log Out </a></li>
              
                
              
             
            </div>
          </div>
        </div>
      </nav> 


      <div style="margin-top: 5%;">
      <form class="row g-3 needs-validation" novalidate style="color: whitesmoke; margin-top: 2%;" action="submit5.php" method="post">
        <div class="col-md-12 position-relative">
          
          <p style="margin-left: 0cm; text-align: center;"><h5> EXPENSE [LEGAL] FORM</h5></p>
          <hr class="my-4">
           
          
          <div class="col-md-6 position-relative">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="description"></textarea>
                  </div>
            </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltipUsername" class="form-label">Total cost</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="validationTooltipUsernamePrepend"></span>
              <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="tnumber" required>
              <div class="invalid-tooltip">
                Please choose a unique and valid TC.
              </div>
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltipUsername" class="form-label">Completed By</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="validationTooltipUsernamePrepend"></span>
              <input type="tel" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="cby" required>
              <div class="invalid-tooltip">
                Please choose a unique and valid name.
              </div>
            </div>
          </div>
          <div class="col-md-3 position-relative">
            <label for="validationTooltip03" class="form-label">Date Of Completion</label>
            <input type="date" class="form-control" id="validationTooltip03" name="doc" required>
            <div class="invalid-tooltip">
              Please provide a valid date.
            </div>
          </div>
          
          <hr class="my-4">
         <div class="col-12">
          <button class="btn btn-dark" type="submit">Submit</button><p id= "test"></p>
          <button class="btn btn-dark" type="delete">Delete</button>
          <br>
        </div>
        <hr class="my-4">
<?php
  include_once 'footer.php';
?>