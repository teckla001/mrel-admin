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
                <li class="nav-item"><a class="nav-link" href="logout.php"> Log Out </a></li>
              
                
              
             
            </div>
          </div>
        </div>
      </nav>   
   <div style="margin-top: 5%;">
      <form class="row g-3 needs-validation" novalidate style="color: whitesmoke; margin-top: 2%;" action="connect.php" method="post">
        <div class="col-md-12 position-relative">
          
          <p style="margin-left: 0cm; text-align: center;"><h5> TENANT SIGN UP [ADMIN ONLY]</h5></p>
           
          <hr class="my-4">

          <p><h5>1. Personal Details</h5></p>

          <hr class="my-4">

          <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Full name</label>
            <input type="text" class="form-control" id="validationTooltip01" name="fname" required>
            <div class="valid-tooltip">
              Looks good!
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
            <label for="validationTooltip03" class="form-label">Email</label>
            <input type="email" class="form-control" id="validationTooltip03" name="email" required>
            <div class="invalid-tooltip">
              Please provide a valid email.
            </div>
          </div>
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
            <label for="validationTooltip05" class="form-label">Phone number of spouse (if any.)</label>
            <input type="tel" class="form-control" id="validationTooltip05" name="psnumber" required>
            <div class="invalid-tooltip">
              Please provide a valid number.
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
            </select>
            <div class="invalid-tooltip">
              Please select a valid district.
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

          <p><h5>2. Employment Details</h5></p>

          <hr class="my-4">

          <div class="col-md-6 position-relative">
            <label for="validationTooltip04" class="form-label">Occupation</label>
            <select class="form-select" id="validationTooltip04" name="occupation" required>
              <option selected disabled value="">Choose...</option>
              <option>Unniversity student</option>
              <option>employed</option>
              <option>Self-employed</option>
            </select>
            <div class="invalid-tooltip">
              Please select a valid occupation.
            </div>
          </div>
          
          <div class="col-mb-6 position relative" style="margin-right: 50%;">
            <label for="validationTooltip04" class="form-label"> Evidence of occupation (i.e ID's, copy of bussiness license/proof of bussiness)</label>
            <input type="file" class="form-control" aria-label="file example" name="eoccupation" required>
            <div class="invalid-feedback">Example invalid form file feedback</div>
          </div>
          <div class="col-md-6 position-relative">
            <label for="validationTooltip05" class="form-label">Name of company/bussiness</label>
            <input type="text" class="form-control" id="validationTooltip05" name="cname" required>
            <div class="invalid-tooltip">
              Please provide a valid name.
            </div>
          </div>

          <br>
         <div class="col-12">
          <button class="btn btn-dark" type="submit">Sign up</button>
          <br>
        </div>
        
    </form>
   </div>

   <?php
  include_once 'footer.php';
?>