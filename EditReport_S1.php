<?php

session_start();

// Include the database configuration file  
require_once 'Config.php'; 


	$Category1 = 0;
	$Category2 = 0;
	$Category3 = 0;
	$CategorySection1_TotalMarks = 0;

// if save change happen
	if(!isset($_POST['update'])){
		echo "Something wrong!";
		exit;
	}

	$inspectID = trim($_POST['inspectID']);
	$Category1 = trim($_POST['Category1']);
	$Category2 = trim($_POST['Category2']);
	$Category3 = trim($_POST['Category3']);
	$CategorySection1_TotalMarks = $Category1 + $Category2 + $Category3;

	$query = "UPDATE qacategory_section1 SET
	inspectID = '$inspectID',  
	Category1 = '$Category1', 
	Category2 = '$Category2', 
	Category3 = '$Category3', 
	CategorySection1_TotalMarks = '$CategorySection1_TotalMarks'
	WHERE inspectID = '$inspectID'";

	$result = mysqli_query($con,$query);

    if($result)
    {   

     $query2 = "UPDATE qamarks SET CategorySection1_TotalMarks = '$CategorySection1_TotalMarks' WHERE inspectID = '$inspectID'";

     $result2 = mysqli_query($con,$query2);
   	}
	

	// two cases for fie , if file submit is on => change a lot
	$result = mysqli_query($con, $query);
	if(!$result){
		echo "Can't update data " . mysqli_error($con);
		exit;
	} else {
		header("Location: AdminReport_EditS1.php?inspectID=$inspectID");
	}
?>