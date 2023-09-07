<?php 
  if($_SERVER['REQUEST_METHOD']== 'POST')
  {
    $tname = $_POST['tname'];
    $slease = $_POST['slease'];
    $elease = $_POST['elease'];
    $rdue = $_POST['rdue'];
    $apaid = $_POST['apaid'];
    $ran_id = rand(time(), 100000000);
   
    
    //CONECTION CODE
    $conn = new mysqli('localhost', 'root', '','mrel');
    IF($conn){
        //echo "connection successfull";
        $sql = "insert into tenant_leases(LeaseID, Tenant_name, Start_of_lease, End_of_lease, Rent_due, amount) values('$ran_id', '$tname', '$slease', '$elease', '$rdue', '$apaid')";
        $result = mysqli_query($conn, $sql);
        if($result){
           // echo "data entered successfully";
           header("location: tenants_leases.php?search=");
        }else{
            die(mysqli_error($conn));
        }
    }else{
        die(mysqli_error($conn));
    }
    }
?>
