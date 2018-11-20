<?php session_start();
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
        <div class="header">
                ABSTRACT UPLOADER
            <div class="sub-text">
                <?php $username = $_SESSION['username'];
                echo "Logged In As $username";?>
            </div>
        </div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <div class="icon-contain">
                <label for="fileToUpload">
                    <img src="./icons/add-file.svg" height="150px" width="auto" id="select-file-img"/>
                </label>
                
                <div id="file-selected">No File Selected</div>
                <br/>
                <span>Summary of Paper
                </span>
                </br>
                <textarea id="textarea"
                ></textarea>
                <br/>
                <button id="upload-button">
                    <img src="./icons/cloud-storage-uploading-option.svg" height="30px" width="auto" id="upload-btn-img"/> Upload
                </button>
                
                <div id="file-name">
                    No File Uploaded
                </div>
                <br/>
                <button id="log-out">Log Out</button>
            </div>
        </form>
        <script src="./scripts/dashboard-controller.js"></script>
    </body>
</html>