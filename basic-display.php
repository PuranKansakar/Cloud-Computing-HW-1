<?php
session_start();
// Check if the user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$servername = "localhost";
$username = "root";
$password = "dex123";
$dbname = "UserData";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1><a href="welcome.php">Could Computing HW 1</a></h1>
        <h2>Username:<b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h2>
        <h2>First Name:<b><?php echo htmlspecialchars($_SESSION["firstname"]); ?></b></h2>
        <h2>Last Name:<b><?php echo htmlspecialchars($_SESSION["lastname"]); ?></b></h2>
        <h2>Email Address:<b><?php echo htmlspecialchars($_SESSION["email"]); ?></b></h2>
        <h3>Count for words on page:<b><?php 
        $str = file_get_contents('http://ec2-3-12-147-217.us-east-2.compute.amazonaws.com/basic-display.php');
        echo str_word_count($str); ?></b></h3>

</div>
    <p>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>
