<?php 
    session_start();
    include_once "config.php";
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
                    include_once "header.php";
                    header("location: maintainance_search.php?search=");
                }else{
                    include_once "header2.php";
                }
            }else{
                echo "Email or Password is Incorrect!";
                
            }
        }else{
            echo "$email - This email not Exist!";
        }
    }else{
        echo "All input fields are required!";
    }
?>