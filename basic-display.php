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
    <?php
        if (isset($_FILES['userfile'])){
            //print_r($_FILES);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'images/'.
                    $_FILES['userfile']['tmp_name']);
        }
        function pre_r($array){
            echo '</pre>';
            print_r($array);
            echo '</pre>';
        }
    ?>
    <div class="page-header">
        <h1><a href="welcome.php">Cloud Computing HW 1</a></h1>
        <h2>Username:<b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h2>
        <h2>First Name:<b><?php echo htmlspecialchars($_SESSION["firstname"]); ?></b></h2>
        <h2>Last Name:<b><?php echo htmlspecialchars($_SESSION["lastname"]); ?></b></h2>
        <h2>Email Address:<b><?php echo htmlspecialchars($_SESSION["email"]); ?></b></h2>
        <h3>Count for words in file:<b><?php 
        $str = file_get_contents('http://ec2-3-12-147-217.us-east-2.compute.amazonaws.com/basic-display.php');
        echo str_word_count($str); ?></b></h3>
        <p></p>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="userfile" />
            <input type="submit" value="Upload" />            
        </form>
</div>
    <p>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>
