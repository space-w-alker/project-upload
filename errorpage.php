<?php session_start()?>
<html>
    <head>
        <title>
            <?php echo $_SESSION['error_title']; ?>
        </title>
        <link rel="stylesheet" href="./errorpage.css">
    </head>

    <body>
        <div class="image-div">
        <img src="./icons/error.svg" height="700px" width="auto"/>
        </div>
        <div class="header">
            <?php echo $_SESSION['error_title']; ?>
        </div>
        <div class="outer-div">
        <div class="inner-div">
            
            <?php echo $_SESSION['error_msg']; ?>
            <br>
            <a href="./register.html">Return to the Register page!!</a>
        </div>
        </div>
        
    </body>

</html>