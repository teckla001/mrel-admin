<?php 
  if($_SERVER['REQUEST_METHOD']== 'POST')
  {
    $type = $_POST['type'];
    $amount = $_POST['amount'];
    $freq = $_POST['freq'];
    $location = $_POST['location'];
    $facilities = $_POST['facilities'];
    $amount2 = $_POST['amount2'];
    $occupied = $_POST['occupied'];
    $tname = $_POST['tname'];
    $ran_id = rand(time(), 100000000);
   
    
    //CONECTION CODE
    $conn = new mysqli('localhost', 'root', '','mrel');
    IF($conn){
        //echo "connection successfull";
        $sql = "INSERT INTO apartments(AptID, Type, Amount, Frequency, Place, Facilities, Up_front_payment, Isoccupied, Tenant_name) values('$ran_id', '$type', '$amount', '$freq', '$location','$facilities', '$amount2', '$occupied', '$tname')";
        $result = mysqli_query($conn, $sql);
        if($result){
            //echo "data entered successfully";
            header("location: apartment_search.php?search=");
        }else{
            die(mysqli_error($conn));
        }
    }else{
        die(mysqli_error($conn));
    }
    }
?>