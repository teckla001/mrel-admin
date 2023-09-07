<?php 
  if($_SERVER['REQUEST_METHOD']== 'POST')
  {
    $fname = $_POST['fname'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $pnumber = $_POST['pnumber'];
    $pnumber2 = $_POST['pnumber2'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $position = $_POST['position'];
    $region = $_POST['region'];
    $district = $_POST['district'];
    $admin = $_POST['admin'];
    $mstatus = $_POST['mstatus'];
    $sname = $_POST['sname'];
    $Sdob = $_POST['Sdob'];
    $psnumber = $_POST['psnumber'];
    $nchildren = $_POST['nchildren'];
    $method = $_POST['method'];
    $bname = $_POST['bname'];
    $baname = $_POST['baname'];
    $anumber = $_POST['anumber'];
    $ran_id = rand(time(), 100000000);
    $encrypt_pass = md5($password);
   
    
    //CONECTION CODE
    $conn = new mysqli('localhost', 'root', '','mrel');
    IF($conn){
        //echo "connection successfull";
        $sql = "INSERT INTO mrel_staff(MrelID, Full_name, Password, Date_of_birth, Phone_number, Phone_number2, email, gender, Position, Region, District, User_status, Martial_status, Name_of_spouse, Date_of_birth_of_spouse, Number_of_spouse, Number_of_children, Payment_method, Bank_name, Name_of_bank_account, Account_number) values('$ran_id', '$fname', '$encrypt_pass', '$dob', '$pnumber', '$pnumber2','$email', '$gender', '$position', '$region', '$district', '$admin', '$mstatus', '$sname', '$Sdob', '$psnumber', '$nchildren', '$method', '$bname', '$baname', '$anumber')";
        $result = mysqli_query($conn, $sql);
        if($result){
            //echo "data entered successfully";
            header("location: staff_search.php?search=");
        }else{
            die(mysqli_error($conn));
        }
    }else{
        die(mysqli_error($conn));
    }
    }
?>