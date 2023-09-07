<?php
    session_start();
    if(isset($_SESSION['MrelID'])){
        include_once "config.php";
        $MrelID = mysqli_real_escape_string($conn, $_GET['MrelID']);
        if(isset($MrelID)){
            $status = "Offline now";
            $sql = mysqli_query($conn, "UPDATE mrel_staff SET status = '{$status}' WHERE MrelID={$_GET['MrelID']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: Cover-page.php");
            }
        }else{
            header("location: index.php");
           //echo("something is wrong. Try again later!");
        }
    }else{  
        header("location: Cover-page.php");
    }
?>