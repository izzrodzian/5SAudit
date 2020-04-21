<?php

session_start();

// Include the database configuration file  
require_once 'Config.php'; 


// if save change happen
	if(!isset($_POST['update'])){
		echo "Something wrong!";
		exit;
	}

	$userID = trim($_POST['userID']);
	$userEmail = trim($_POST['userEmail']);
	$userFullname = trim($_POST['userFullname']);
	$userGender = trim($_POST['userGender']);
	$userContact = trim($_POST['userContact']);
	$userDept = trim($_POST['userDept']);
	$userRole = trim($_POST['userRole']);

$query = "UPDATE users SET  
	userID = '$userID', 
	userEmail = '$userEmail', 
	userFullname = '$userFullname', 
	userGender = '$userGender', 
	userContact = '$userContact', 
	userDept = '$userDept',
	userRole = '$userRole'
	WHERE userID = '$userID'";
	

	// two cases for fie , if file submit is on => change a lot
	$result = mysqli_query($con, $query);
	if(!$result){
		echo "Can't update data " . mysqli_error($con);
		exit;
	} else {
		header("Location: ManageUser.php?userID=$userID");
	}
?>