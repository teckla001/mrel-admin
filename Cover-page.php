<?php
 
  include_once 'header2.php';
  if(isset($_SESSION['MrelID'])){
    header("location: index.php");
  }
  
?>


<div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

              <li class="nav-item"><a class="nav-link active" href="message.html">Request Staff Application</a></li>
              </ul>
             
            </div>
          </div>
        </div>
      </nav>
         <div class="card" style="margin-left: 35%; margin-top: 9%; margin-right: 35%; margin-bottom: 5%; background-color: rgb(1, 86, 86); border: none; " id="test">
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
                 <?php
                 
                 ?>
                 <tr>
                   <td style="display: flex; justify-content:center; background:  rgb(1, 86, 86);" valign="top">
                   <p style="text-align: center;"><h5 style="color: whitesmoke;">Login [Adminstration]</h5></p>
           </td>
           </tr>
                 <tr>
                 <td>
                     <div style="padding-left:10%; padding-right:10%; color: whitesmoke;">
                      <form class="row g-3 needs-validation" novalidate
                             action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                         <div class="col-md-12 position-relative">
                             <label for="validationTooltipUsername" class="form-label">email</label>
                             <div class="input-group has-validation">
                               <input type="email" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="email" required>
                               <div class="invalid-tooltip">
                                 Please choose a unique and valid ID.
                               </div>
                             </div>
                           </div>
                          <div class="col-md-12 position-relative">
                           <label for="validationTooltipUsername" class="form-label">Password</label>
                           <div class="input-group has-validation">
                             <input type="password" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="password" required>
                             <div class="invalid-tooltip">
                               Please choose a unique and valid password.
                             </div>
                           </div>
                          </div>
                          <div class="col-12">
                           <button class="btn btn-dark"  name="submit" type="submit" id="btn">Login</button>
                           
                         </div>

            <?php 
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $dbname = "mrel";
              
                $conn = mysqli_connect($hostname, $username, $password, $dbname);
                if(!$conn){
                  echo "Database connection error".mysqli_connect_error();
                }
                
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);
                if(!empty($email) && !empty($password)){
                    $sql = mysqli_query($conn, "SELECT * FROM mrel_staff WHERE email = '{$email}'");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                        $user_pass = md5($password);
                        $encrypt_pass = $row['Password'];
                        if($user_pass === $encrypt_pass){
                            $status = "Active now";
                            $sql2 = mysqli_query($conn, "UPDATE mrel_staff SET status = '{$status}' WHERE MrelID = {$row['MrelID']}");
                            if($sql2){
                                $_SESSION['MrelID'] = $row['MrelID'];
                                //echo "success";
                                
                            }else{
                              header("location: Tenants.php");
                            }
                        }else{
                          ?>
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <div>
                            Email or Password is Incorrect!
                            </div>
                            </div>
                          <?php  
                        }
                    }else{
                      ?>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                <div>
                This email is not registerd in the system!
                </div>
                </div>
              <?php 
        }
    }else{
      ?>
      <div class="alert alert-danger d-flex align-items-center" role="alert"> 
      <div>
      Fill all the required information!
      </div>
      </div>
    <?php 
    }
?>
                         
                         <div class="mt-4">
                             <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color: whitesmoke;" href="forgot-password.html">
                            Forgot your password?
                           </a>
                          </div>
                       </form>
                     </div>
                      
                 </td>
                 </tr>
                 <tr>
                 <td>
     
                     <hr class="my-4">
     
                     <p class="text-xs z-10 text-white-400 mt-6" style="margin-left: 5%; color: whitesmoke;">© 2023 Malaika Apartments.LTD, All right reserved.
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
<script>
  const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>