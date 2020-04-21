<?php

session_start();

// Include the database configuration file  
require_once 'Config.php'; 

$userID = $_GET['userID'];

// sql to delete a record
$query = "DELETE FROM users WHERE userID = '$userID'";
  $result = mysqli_query($con, $query);
  if(!$result){
    echo "Delete data unsuccessfully " . mysqli_error($con);
    exit;
  }
  header("Location: ManageUser.php");


?>