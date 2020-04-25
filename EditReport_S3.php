<?php

session_start();

// Include the database configuration file  
require_once 'Config.php'; 

	$Answer20 = 0;
	$Answer21 = 0;
	$Answer22 = 0;
	$Answer23 = 0;
	$Answer24 = 0;
	$Answer25 = 0;
	$Answer26 = 0;
	$Answer27 = 0;
	$Answer28 = 0;
	$Answer29 = 0;
	$Answer30 = 0;
	$Answer31 = 0;
	$Answer32 = 0;
	$Category1 = 0;
	$Category2 = 0;
	$Category3 = 0;
	$Category4 = 0;
	$Category5 = 0;
	$CategorySection3_TotalMarks = 0;

// if save change happen
	if(!isset($_POST['update'])){
		echo "Something wrong!";
		exit;
	}

	$inspectID = trim($_POST['inspectID']);
	$Answer20 = trim($_POST['Answer20']);
	$Answer21 = trim($_POST['Answer21']);
	$Answer22 = trim($_POST['Answer22']);
	$Answer23 = trim($_POST['Answer23']);
	$Answer24 = trim($_POST['Answer24']);
	$Answer25 = trim($_POST['Answer25']);
	$Answer26 = trim($_POST['Answer26']);
	$Answer27 = trim($_POST['Answer27']);
	$Answer28 = trim($_POST['Answer28']);
	$Answer29 = trim($_POST['Answer29']);
	$Answer30 = trim($_POST['Answer30']);
	$Answer31 = trim($_POST['Answer31']);
	$Answer32 = trim($_POST['Answer32']);
	$Category1 = $Answer20 + $Answer21 + $Answer22 +  $Answer23 + $Answer24 + $Answer25 + $Answer26;
	$Category2 = $Answer27 + $Answer28;
	$Category3 = $Answer29 + $Answer30;
	$Category4 = $Answer31;
	$Category5 = $Answer32;
	$CategorySection3_TotalMarks = $Category1 + $Category2 + $Category3 + $Category4 + $Category5;

	$query = "UPDATE qacategory_section3 SET
	inspectID = '$inspectID',
	Answer20 = '$Answer20',
	Answer21 = '$Answer21',
	Answer22 = '$Answer22',
	Answer23 = '$Answer23',  
	Answer24 = '$Answer24',
	Answer25 = '$Answer25',
	Answer26 = '$Answer26',
	Answer27 = '$Answer27',
	Answer28 = '$Answer28',
	Answer29 = '$Answer29',
	Answer30 = '$Answer30',
	Answer31 = '$Answer31',
	Answer32 = '$Answer32',
	Category1 = '$Category1', 
	Category2 = '$Category2', 
	Category3 = '$Category3',
	Category4 = '$Category4', 
	Category5 = '$Category5',   
	CategorySection3_TotalMarks = '$CategorySection3_TotalMarks'
	WHERE inspectID = '$inspectID'";

	$result = mysqli_query($con,$query);

    if($result)
    {   

     $query2 = "UPDATE qamarks SET CategorySection3_TotalMarks = '$CategorySection3_TotalMarks' WHERE inspectID = '$inspectID'";

     $result2 = mysqli_query($con,$query2);
   	}
	

	// two cases for fie , if file submit is on => change a lot
	$result = mysqli_query($con, $query);
	if(!$result){
		echo "Can't update data " . mysqli_error($con);
		exit;
	} else {
		header("Location: AdminReport_EditS3.php?inspectID=$inspectID");
	}
?>