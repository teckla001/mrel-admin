<?php
  include_once 'header.php';
?>
         <script> 
       $(document).ready(function() {
         $("button").click(function() {
           $.get("tenants_leases.php", function(data, status){
            $("#try").html(data);
            alert(status);
           })
         });
       });
    </script>

      <div style="margin-top: 5%;">
        <form class="row g-3 needs-validation" novalidate style="color: whitesmoke; margin-top: 2%;" action="apply.php" method="post">
          <div class="col-md-12 position-relative">
  
            <p style="margin-left: 0cm; text-align: center;"><h5> LEASE FORM [ADMIN ONLY]</h5></p>
  
            <hr class="my-4">
            
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Tenant name</label>
                <input type="text" class="form-control" id="validationTooltip01" name="tname" required>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
            <div class="col-md-6 position-relative">
              <label for="validationTooltip01" class="form-label">Start of lease</label>
              <input type="date" class="form-control" id="validationTooltip01" name="slease" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 position-relative">
              <label for="validationTooltip03" class="form-label">End of lease</label>
              <input type="date" class="form-control" id="validationTooltip03" name="elease" required>
              <div class="invalid-tooltip">
                Please provide a valid end of lease.
              </div>
            </div>
            <div class="col-md-6 position-relative">
              <label for="validationTooltip05" class="form-label">Rent Due</label>
              <input type="date" class="form-control" id="validationTooltip05" name="rdue" required>
              <div class="invalid-tooltip">
                Please provide a valid rent due.
              </div>
            </div>
            <div class="col-md-6 position-relative">
              <label for="validationTooltip05" class="form-label">Amount Paid</label>
              <input type="text" class="form-control" id="validationTooltip05" name="apaid" required>
              <div class="invalid-tooltip">
                Please provide a valid amount paid.
              </div>
            </div>
            <br>
           <div class="col-12">
            <button class="btn btn-dark" type="submit">Apply</button><p id="try"></p>
            <br>
          </div>
          
      </form>


<?php
  include_once 'footer.php';
?>