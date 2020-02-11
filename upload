<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
error_reporting(0);
session_start();

$usern=$_SESSION["username"];
$host = "localhost";
$dbusername = "root";
$dbpassword = "dex123";
$dbname = "users";
echo"User : " . $usern . "<br>";
// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if(isset($_POST['file']))
{

$file = $_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder='testupload/';
$path = "/var/www/html/testupload/";
    $path = $path . basename( $_FILES['file']['name']);

 $firstname = $_SESSION["firstname"];
 $lastname=$_session["lastname"];
$emailid=$_SESSION["emailid"];
 move_uploaded_file($file_loc,$folder.$file);
 $sql3 = "UPDATE details SET filename='$file', fdescription='$file_type' WHERE firstname='$firstname'";
 mysqli_query($conn, $sql3);
echo "Uploaded File : " . $file .  "&nbsp;&nbsp;<br>";
}

$str = file_get_contents($path) or dir ("Can not read from file");
$numWords = str_word_count($str);
echo "The word count  : " . $numWords . "<br>";

 $filename2=basename( $_FILES['file']['name']);
?>
<p>Download uploaded file below : <?php echo"$filename2"?></p>
<a href="testupload/<?php echo $filename2 ?>" target="_blank">Download file</a> <br>
<p>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
</p>
