<?php session_start();
require ('./defines.php');

if ($_SESSION['username'] == null){
    header("Location: ./login.html");
}
?>
<!DOCTYPE HTML>
<html lang = "en">
<html>
    <head>
        <title>
            Dashboard
        </title>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
        <link href="./dashboard.css" rel="stylesheet">
    </head>
    <body>
    <div class="header" style="text-align:left;font-size:30px;background-color:rgb(128, 0, 0);padding:10;color:white;">
            <div style="width:15%">
                <img src="./icons/unilag-logo.png" height="80px"/>
            </div>
            <div style="text-align:center;width:50%;font-size:35px">
                Welcome to the University of Lagos Journal
            </div>
            <div style="text-align:end;width:32%;overflow:hidden;">
                <a href="#" style="color:yellow; font-size:14px">Browse Journals</a> | 
                <form style="display:inline">
                    <input type="text" placeholder="Search by Keyword" name="search" style="display:inline"/>
                    <button style="display:inline">Search</button>
                </form>
            </div>
        </div>
    </body>
</html>