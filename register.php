<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "upload";

$conn  = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed ". $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashed = password_hash($password, PASSWORD_DEFAULT);


$sql = "insert into login_details (username, password) values ('$username', '$hashed')";
$sql2 = "insert into user_details (username, email) values ('$username', '$email')";
echo $sql;

if ($conn->query($sql) === TRUE  && $conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    $_SESSION['error_title'] = "Invalid Username";
    $_SESSION['error_msg'] = "Username Already Exists!!";
    header('location: ./errorpage.php');
}


?>


