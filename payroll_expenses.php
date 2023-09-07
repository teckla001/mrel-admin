<?php
  include_once 'header.php';
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

      <div style="margin-top: 5%;  ">
      <form class="row g-3 needs-validation" novalidate style="color: whitesmoke; margin-top: 2%;" action="submit4.php" method="post">
        <div class="col-md-12 position-relative">
          
          <p style="margin-left: 0cm; text-align: center; background-color:  rgb(1, 86, 86);"><h5> EXPENSE [SALARY] FORM</h5></p>
          <hr class="my-4">
           
          <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Staff name</label>
            <input type="text" class="form-control" id="validationTooltip01" name="sname" required>
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>
        
          
          <div class="col-md-6 position-relative">
            <label for="validationTooltipUsername" class="form-label">Position</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="validationTooltipUsernamePrepend"></span>
              <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="position" required>
              <div class="invalid-tooltip">
                Please choose a unique and valid position.
              </div>
            </div>
          </div>
          <div class="col-md-3 position-relative">
            <label for="validationTooltipUsername" class="form-label">Amount</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="validationTooltipUsernamePrepend"></span>
              <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="amount" required>
              <div class="invalid-tooltip">
                Please choose a unique and valid amount.
              </div>
            </div>
          </div>
          <div class="col-md-3 position-relative">
            <label for="validationTooltip04" class="form-label">Payment Method</label>
            <select class="form-select" id="validationTooltip04" name="method" required>
              <option selected disabled value="">Choose...</option>
              <option>Cheque</option>
              <option>Bank Transfer</option>
              <option>Others</option>
            </select>
            <div class="invalid-tooltip">
              Please select a valid method.
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltipUsername" class="form-label">Bank Name</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="validationTooltipUsernamePrepend"></span>
              <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="bname" required>
              <div class="invalid-tooltip">
                Please choose a unique and valid name.
              </div>
            </div>
          </div>
          <div class="col-md-3 position-relative">
            <label for="validationTooltipUsername" class="form-label">Account Number</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="validationTooltipUsernamePrepend"></span>
              <input type="tel" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="anumber" required>
              <div class="invalid-tooltip">
                Please choose a unique and valid number.
              </div>
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltip03" class="form-label">Name of Bank Account</label>
            <input type="text" class="form-control" id="validationTooltip03" name="baname" required>
            <div class="invalid-tooltip">
              Please provide a valid name.
            </div>
          </div>
          <div class="form-group">
            <label for="email">Is It Paid</label>
            <div>
            <input type="radio" class="form-check-input" id="validationFormCheck2" name="paid" value="YES" required>
            <label class="form-check-label" for="validationFormCheck2">YES</label>
            <input type="radio" class="form-check-input" id="validationFormCheck3" name="paid" value="NO" required>
            <label class="form-check-label" for="validationFormCheck3">NO</label>
            </div>           
              <div class="invalid-tooltip">
                Please choose a unique and valid paid.
              </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltipUsername" class="form-label">Completed By</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="validationTooltipUsernamePrepend"></span>
              <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="cby" required>
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
        
    </form>
   </div>

<?php
  include_once 'footer.php';
?>