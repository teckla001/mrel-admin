<?php 
  if($_SERVER['REQUEST_METHOD']== 'POST')
  {
    $fname = $_POST['fname'];
    $pnumber = $_POST['pnumber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mstatus = $_POST['mstatus'];
    $sname = $_POST['sname'];
    $psnumber = $_POST['psnumber'];
    $district = $_POST['district'];
    $nchildren = $_POST['nchildren'];
    $occupation = $_POST['occupation'];
    $eoccupation = $_POST['eoccupation'];
    $cname = $_POST['cname'];
    $ran_id = rand(time(), 100000000);
   
    
    //CONECTION CODE
    $conn = new mysqli('localhost', 'root', '','mrel');
    IF($conn){
        //echo "connection successfull";
        $sql = "insert into tenants(TenID, name, PhoneNumber, email, gender, Martialstatus, Name_of_spouse, Spouse_number, District, Number_of_children, Occupation, Evidence_of_occupation, Name_of_organization) values('$ran_id', '$fname', '$pnumber', '$email', '$gender', '$mstatus', '$sname', '$psnumber', '$district', '$nchildren', '$occupation', '$eoccupation', '$cname')";
        $result = mysqli_query($conn, $sql);
        if($result){
            //echo "data entered successfully";
            header("location: tenants_search.php?search=");
        }else{
            die(mysqli_error($conn));
        }
    }else{
        die(mysqli_error($conn));
    }
    }
?>
