<?php
  include_once 'header.php';
?>
        
     <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              
                <li class="nav-item"><a class="nav-link" href="apartment_search.php?search="> Apartments </a></li>
                <li class="nav-item"><a class="nav-link" href="tenants_search.php?search="> Tenant form </a></li>
                <li class="nav-item"><a class="nav-link" href="maintainance_search.php?search="> maintanance expenses </a></li>
                <li class="nav-item"><a class="nav-link" href="payroll_search.php"> payroll expenses </a></li>
                <li class="nav-item"><a class="nav-link" href="legal_search.php"> legal expenses </a></li>
                <li class="nav-item"><a class="nav-link" href="tenants_leases.php?search="> Leases </a></li>
                <li class="nav-item"><a class="nav-link active" href="staff_search.php?search="> Staff </a></li>
                <li class="nav-item"><a class="nav-link" href="profile.php"> Profile page </a></li>
              
                
              
             
            </div>
          </div>
        </div>
      </nav>
   <div style="margin-top: 5%;">
      <form class="row g-3 needs-validation" novalidate style="color: whitesmoke; margin-top: 2%;" action="submit.php" method="post">
        <div class="col-md-12 position-relative">
          
          <p style="margin-left: 0cm; text-align: center;"><h5> STAFF FORM</h5></p>
           
          <hr class="my-4">

          <p><h5>1. Personal Details</h5></p>

          <hr class="my-4">
          
</div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Full name</label>
            <input type="text" class="form-control" id="validationTooltip01" name="fname" required>
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">password</label>
            <input type="password" class="form-control" id="validationTooltip01" name="password" required>
            <div class="invalid-tooltip">
              please provide strong password.
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltip03" class="form-label">Date of birth</label>
            <input type="date" class="form-control" id="validationTooltip03" name="dob" required>
            <div class="invalid-tooltip">
              Please provide a valid D.O.B.
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltipUsername" class="form-label">Phone Number</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="validationTooltipUsernamePrepend"></span>
              <input type="tel" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="pnumber" required>
              <div class="invalid-tooltip">
                Please choose a unique and valid phone number.
              </div>
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltipUsername" class="form-label">Phone Number 2(optional)</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="validationTooltipUsernamePrepend"></span>
              <input type="tel" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="pnumber2" required>
              <div class="invalid-tooltip">
                Please choose a unique and valid phone number 2.
              </div>
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltip03" class="form-label">Email</label>
            <input type="email" class="form-control" id="validationTooltip03" name="email" required>
            <div class="invalid-tooltip">
              Please provide a valid email.
            </div>
          </div>
<div>
          <div class="form-group">
            <label for="email">Gender</label>
            <div>
            <input type="radio" class="form-check-input" id="validationFormCheck2" name="gender" value="m" required>
            <label class="form-check-label" for="validationFormCheck2">Male</label>
</div><div>
            <input type="radio" class="form-check-input" id="validationFormCheck3" name="gender" value="f" required>
            <label class="form-check-label" for="validationFormCheck3">Female</label>
            </div>           
              <div class="invalid-tooltip">
                Please choose a unique and valid gender.
              </div>
</div>
              <div class="col-md-6 position-relative">
            <label for="validationTooltip03" class="form-label">Position</label>
            <input type="text" class="form-control" id="validationTooltip03" name="position" required>
            <div class="invalid-tooltip">
              Please provide a valid information.
            </div>
          </div>
              </div>
          <div class="col-md-3 position-relative">
            <label for="validationTooltip03" class="form-label">Region</label>
            <input type="text" class="form-control" id="validationTooltip03" name="region" required>
            <div class="invalid-tooltip">
              Please provide a valid region.
            </div>
          </div>
          <div class="col-md-3 position-relative">
            <label for="validationTooltip04" class="form-label">Disrict</label>
            <select class="form-select" id="validationTooltip04" name="district" required>
              <option selected disabled value="">Choose...</option>
              <option>Temeke</option>
              <option>Ilala</option>
              <option>Kinondoni</option>
              <option>Kigamboni</option>
              <option>Others</option>
            </select>
            <div class="invalid-tooltip">
              Please select a valid district.
            </div>
          </div>
          <div class="form-group">
            <label for="email">Select User Type ;</label>
            <div>
            <input type="radio" class="form-check-input" id="validationFormCheck2" name="admin" value="0" required>
            <label class="form-check-label" for="validationFormCheck2">Normal User</label>
            </div><div>
            <input type="radio" class="form-check-input" id="validationFormCheck3" name="admin" value="1" required>
            <label class="form-check-label" for="validationFormCheck3">Admin</label>
            </div>           
              <div class="invalid-tooltip">
                Please choose a unique and valid box.
              </div>
          

          <hr class="my-4">

          <p><h5>2. Spouse Details</h5></p>

          <hr class="my-4">
</div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltip04" class="form-label">Martial Status</label>
            <select class="form-select" id="validationTooltip04" name="mstatus" required>
              <option selected disabled value="">Choose...</option>
              <option>Single</option>
              <option>Married</option>
              <option>Divorced</option>
            </select>
            <div class="invalid-tooltip">
              Please select a valid martial status.
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltip05" class="form-label">Name of spouse (if any.)</label>
            <input type="text" class="form-control" id="validationTooltip05" name="sname" required>
            <div class="invalid-tooltip">
              Please provide a valid name.
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltip03" class="form-label">Date of birth of spouse</label>
            <input type="date" class="form-control" id="validationTooltip03" name="Sdob" required>
            <div class="invalid-tooltip">
              Please provide a valid D.O.B.
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltip05" class="form-label">Phone number of spouse (if any.)</label>
            <input type="tel" class="form-control" id="validationTooltip05" name="psnumber" required>
            <div class="invalid-tooltip">
              Please provide a valid number.
            </div>
          </div>
          <div class="col-md-3 position-relative">
            <label for="validationTooltip05" class="form-label">Number of children</label>
            <input type="text" class="form-control" id="validationTooltip05" name="nchildren" required>
            <div class="invalid-tooltip">
              Please provide a valid number.
            </div>
          </div>
          
          <hr class="my-4">

          <p><h5>2. Payroll Details</h5></p>

          <hr class="my-4">

          <div class="col-md-6 position-relative">
            <label for="validationTooltip04" class="form-label">Payment Method</label>
            <select class="form-select" id="validationTooltip04" name="method" required>
              <option selected disabled value="">Choose...</option>
              <option>cheque</option>
              <option>Bank Transfer</option>
            </select>
            <div class="invalid-tooltip">
              Please select a valid Payment method.
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltip05" class="form-label"> Bank Name </label>
            <input type="text" class="form-control" id="validationTooltip05" name="bname" required>
            <div class="invalid-tooltip">
              Please provide a valid name.
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltip05" class="form-label"> Name of Bank Account </label>
            <input type="text" class="form-control" id="validationTooltip05" name="baname" required>
            <div class="invalid-tooltip">
              Please provide a valid name.
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltip05" class="form-label">Account Number</label>
            <input type="text" class="form-control" id="validationTooltip05" name="anumber" required>
            <div class="invalid-tooltip">
              Please provide a valid number.
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