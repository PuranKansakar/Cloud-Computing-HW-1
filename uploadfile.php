
<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
error_reporting(0);


session_start();

$host = "localhost";
$dbusername = "root";
$dbpassword = "dex123";
$dbname = "users";


?>

<!DOCTYPE html>
<html>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Please upload the file:
    <input type="file" name="file">
    <input type="submit" value="Upload File" name= "file">
</form>
    <p>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>
