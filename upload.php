<?php
    session_start();
    require ("./defines.php");

    $conn  = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("connection failed ". $conn->connect_error);
    }

    $sql = "UPDATE user_details SET file_name =  WHERE `user_details`.`username` = 'ajileyetobs'";

   if(isset($_FILES['fileToUpload'])){
      $errors= array();
      $file_name = $_FILES['fileToUpload']['name'];
      $file_size =$_FILES['fileToUpload']['size'];
      $file_tmp =$_FILES['fileToUpload']['tmp_name'];
      $file_type=$_FILES['fileToUpload']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));
      
      $expensions= array("txt","pdf","doc","docx");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a TXT, PDF or Doc File file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploaded/".$file_name);
         $use = $_SESSION['username'];
         $sql = "UPDATE user_details SET file_name = 'uploaded/".$file_name."' WHERE user_details.username = '$use'";
         $result = $conn->query($sql);
         echo $conn->error;
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>