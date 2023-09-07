<?php

$pwd = $_POST['pwd'];

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {

        $result = true;
    }
    else{
        $result = false;
    }
} 

function idExists($conn, $username, $email) {
    $sql = "SELECT * FROM mrel_staff WHERE MrelID= ? OR email= ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../login.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return $result;    
    }

    mysqli_stmt_close();
}

function loginUser($conn, $username, $pwd) {
    $idExists = idExists($conn, $username, $username);

    if ($idExsists === false) {
        header("location: ../cover-page.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $idExists["password"];
    $checkpwd = password_verify($pwd, $pwdHashed);

    if ($checkpwd === false){
        header("location: ../cover-page.php?error=wronglogin2");
        exit();
    }
    else if ($checkpwd === true) {
        session_start();
        $_SESSION["MrelID"] = $idExists["MrelID"];
        $_SESSION["Full_name"] = $idExists["Full_name"];
        header("location: Tenants.php");
        exit();
    }
}

