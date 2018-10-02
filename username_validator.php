<?php
include "./defines.php";
$user = $_REQUEST['username'];

$sql = "select * from user_details where username='$user'";
$conn  = new mysqli($servername, 'root', $password, $dbname);


$result = $conn->query($sql);
if($conn->error){
    echo $conn->error;
}

$data = [];
header('Content-type: application/json');

if ($result->num_rows || $user == ""){
    $data = ['valid' => false];
    echo json_encode($data);
}
else{
    $data = ['valid' => true];
    echo json_encode($data);
}
mysqli_close($conn);


?>