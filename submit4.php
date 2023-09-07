<?php 
  if($_SERVER['REQUEST_METHOD']== 'POST')
  {
    $sname = $_POST['sname'];
    $position = $_POST['position'];
    $amount = $_POST['amount'];
    $method = $_POST['method'];
    $bname = $_POST['bname'];
    $anumber = $_POST['anumber'];
    $baname = $_POST['baname'];
    $paid = $_POST['paid'];
    $cby = $_POST['cby'];
    $doc = $_POST['doc'];
    $ran_id = rand(time(), 100000000);
   
    
    //CONECTION CODE
    $conn = new mysqli('localhost', 'root', '','mrel');
    IF($conn){
        //echo "connection successfull";
        $sql = "INSERT INTO payroll_expenses(PayID, Staff_name, Position, Amount, Payment_Method, Bank_name, Account_Number, Name_of_account, Ispaid, Completed_By, Date_of_completion) values('$ran_id', '$sname', '$position', '$amount', '$method', '$bname','$anumber', '$baname', '$paid', '$cby', '$doc')";
        $result = mysqli_query($conn, $sql);
        if($result){
            //echo "data entered successfully";
            header("location: payroll_search.php?search=");
        }else{
            die(mysqli_error($conn));
        }
    }else{
        die(mysqli_error($conn));
    }
    }
?>