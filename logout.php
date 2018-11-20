<?php
    session_start();
    if($_REQUEST['logout'] == 't'){
        $_SESSION['username'] = null;
        $data = ["logout" => TRUE, "Username" => $_SESSION['username']];
        header("Content-type: application/json");
        session_unset();
        session_destroy();
        session_write_close();
        setcookie(session_name(),'',0,'/');
        echo json_encode($data);
        //header("Location: ./login.html");   
    }
?>