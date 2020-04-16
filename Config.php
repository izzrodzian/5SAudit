<!DOCTYPE html>
<?php  
// Database configuration  
$con = mysqli_connect('127.0.0.1','root','') or die ('Not connected.');
mysqli_select_db($con,'5s') or die ('No database found.');

// Check connection  
if ($con->connect_error) {  
    die("Connection failed: " . $con->connect_error);  
}

?>
</html>