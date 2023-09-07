<?php 
  if($_SERVER['REQUEST_METHOD']== 'POST')
  {
    $description = $_POST['description'];
    $tnumber = $_POST['tnumber'];
    $cby= $_POST['cby'];
    $doc = $_POST['doc'];
    $ran_id = rand(time(), 100000000);
    
   
    
    //CONECTION CODE
    $conn = new mysqli('localhost', 'root', '','mrel');
    IF($conn){
        //echo "connection successfull";
        $sql = "INSERT INTO legal_expenses(LegalID, Description, Total_Cost, Completed_By, Date_Of_Completion) values('$ran_id', '$description','$tnumber', '$cby','$doc')";
        $result = mysqli_query($conn, $sql);
        if($result){
            //echo "data entered successfully";
            header("location: legal_search.php?search=");
        }else{
            die(mysqli_error($conn));
        }
    }else{
        die(mysqli_error($conn));
    }
    }
?>