<?php 
  if($_SERVER['REQUEST_METHOD']== 'POST')
  {
    $tname = $_POST['tname'];
    $type = $_POST['type'];
    $location = $_POST['location'];
    $tnumber = $_POST['tnumber'];
    $cby= $_POST['cby'];
    $sby = $_POST['sby'];
    $doc = $_POST['doc'];
    $ran_id = rand(time(), 100000000);
    
   
    
    //CONECTION CODE
    $conn = new mysqli('localhost', 'root', '','mrel');
    IF($conn){
        //echo "connection successfull";
        $sql = "INSERT INTO maintainance_expenses(MainID, Tenant_name, Type, ApartmentLocation, Total_Cost, Completed_By, Supervised_by, Date_Of_Completion) values('$ran_id', '$tname', '$type', '$location','$tnumber', '$cby', '$sby', '$doc')";
        $result = mysqli_query($conn, $sql);
        if($result){
            //echo "data entered successfully";
            header("location: maintainance_search.php?search=");
        }else{
            die(mysqli_error($conn));
        }
    }else{
        die(mysqli_error($conn));
    }
    }
?>