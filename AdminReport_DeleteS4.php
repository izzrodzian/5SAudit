<?php

session_start();

// Include the database configuration file  
require_once 'Config.php'; 

$inspectID = $_GET['inspectID'];

// sql to delete a record
$query = "DELETE FROM qacategory_section4 WHERE inspectID = '$inspectID'";
$result = mysqli_query($con, $query);

if ($result)
{
	$query2 = "DELETE FROM qamarks WHERE inspectID = '$inspectID'";
	$result2 = mysqli_query($con, $query2);
}

else
{
  echo "Delete data unsuccessfully " . mysqli_error($con);
  exit;
}
header("Location: AdminReport_Delete.php");
?>