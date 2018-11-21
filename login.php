<?php
include "./defines.php";
session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from login_details where username = '$username'";
    $sql_admin = "select * from admin where username = '$username'";

    $result = $conn->query($sql);
    echo $conn->error;

    if ($result->num_rows > 0){
        $rows = $result->fetch_assoc();
        
        if (password_verify($password, $rows['password'])){
            $_SESSION['username'] = $username;
            if ($username == 'admin'){
                header("Location:./admin.php");
            }
            else{
                header("Location:./dashboard.php");
            }
        }
        else{
            echo "Invalid Username Or Password";
        }
    }
    else{
        echo "Invalid Username Or Password";
    }
?>