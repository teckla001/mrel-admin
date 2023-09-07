<?php
  include_once 'header.php';
?>
        
        <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              
                <li class="nav-item"><a class="nav-link active" href="apartment_search.php?search="> Apartments </a></li>
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
   <div style="margin-top: 5%;">
      <form class="row g-3 needs-validation" novalidate style="color: whitesmoke; margin-top: 2%;" action="submit3.php" method="post">
        <div class="col-md-12 position-relative">
          
          <p style="margin-left: 0cm; text-align: center;"><h5> NEW PROPERTY FORM</h5></p>
           
          <hr class="my-4">
          
          <div class="col-md-3 position-relative">
            <label for="validationTooltip04" class="form-label">Type</label>
            <select class="form-select" id="validationTooltip04" name="type" required>
              <option selected disabled value="">Choose...</option>
              <option>One-bedroom apartment</option>
              <option>Two-bedroom apartments</option>
              <option>Shared-bathroom rooms</option>
              <option>House</option>
              <option>Others</option>
            </select>
            <div class="invalid-tooltip">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-3 position-relative">
            <label for="validationTooltip01" class="form-label">Amount</label>
            <input type="text" class="form-control" id="validationTooltip01" name="amount" required>
            <div class="invalid-tooltip">
              please provide strong amount.
            </div>
          </div>
          <div class="col-md-3 position-relative">
            <label for="validationTooltip03" class="form-label">Frequency</label>
            <input type="text" class="form-control" id="validationTooltip03" name="freq"  placeholder="@month" required>
            <div class="invalid-tooltip">
              Please provide a valid frequency.
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltipUsername" class="form-label">Location</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="validationTooltipUsernamePrepend"></span>
              <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="location" required>
              <div class="invalid-tooltip">
                Please choose a unique and valid location.
              </div>
            </div>
          </div>
          <div class="col-md-6 position-relative">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Facilities</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="facilities"></textarea>
                  </div>
            </div>
            <div class="col-md-3 position-relative">
            <label for="validationTooltip03" class="form-label">Up Front Payment</label>
            <input type="text" class="form-control" id="validationTooltip03" name="amount2" required>
            <div class="invalid-tooltip">
              Please provide a valid amount.
            </div>
          </div>
          <div class="form-group">
            <label for="email">Is occupied</label>
            <div>
            <input type="radio" class="form-check-input" id="validationFormCheck2" name="occupied" value="y" required>
            <label class="form-check-label" for="validationFormCheck2">Yes</label>
            <input type="radio" class="form-check-input" id="validationFormCheck3" name="occupied" value="n" required>
            <label class="form-check-label" for="validationFormCheck3">No</label>
            </div>           
              <div class="invalid-tooltip">
                Please choose a valid information.
              </div>
              <div class="col-md-3 position-relative">
            <label for="validationTooltip03" class="form-label">Tenant Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="tname" required>
            <div class="invalid-tooltip">
              Please provide a valid name.
            </div>
          </div>

          </div>
          
          <hr class="my-4">
         <div class="col-12">
          <button class="btn btn-dark" type="submit">Submit</button><p id= "test"></p>
          <button class="btn btn-dark" type="delete">Delete</button>
          <br>
        </div>
        <hr class="my-4">
        
    </form>
   </div>

   <?php
  include_once 'footer.php';
?>