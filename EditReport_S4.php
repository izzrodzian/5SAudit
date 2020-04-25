<?php

session_start();

// Include the database configuration file  
require_once 'Config.php'; 

	$Answer33 = 0;
	$Answer34 = 0;
	$Answer35 = 0;
	$Answer36 = 0;
	$Answer37 = 0;
	$Answer38 = 0;
	$Answer39 = 0;
	$Answer40 = 0;
	$Answer41 = 0;
	$Answer42 = 0;
	$Answer43 = 0;
	$Answer44 = 0;
	$Answer45 = 0;
	$Answer46 = 0;
	$Answer47 = 0;
	$Answer48 = 0;
	$Answer49 = 0;
	$Answer50 = 0;
	$Category1 = 0;
	$Category2 = 0;
	$Category3 = 0;
	$Category4 = 0;
	$Category5 = 0;
	$Category6 = 0;
	$Category7 = 0;
	$Category8 = 0;
	$Category9 = 0;
	$CategorySection4_TotalMarks = 0;

// if save change happen
	if(!isset($_POST['update'])){
		echo "Something wrong!";
		exit;
	}

	$inspectID = trim($_POST['inspectID']);
	$Answer33 = trim($_POST['Answer33']);
	$Answer34 = trim($_POST['Answer34']);
	$Answer35 = trim($_POST['Answer35']);
	$Answer36 = trim($_POST['Answer36']);
	$Answer37 = trim($_POST['Answer37']);
	$Answer38 = trim($_POST['Answer38']);
	$Answer39 = trim($_POST['Answer39']);
	$Answer40 = trim($_POST['Answer40']);
	$Answer41 = trim($_POST['Answer41']);
	$Answer42 = trim($_POST['Answer42']);
	$Answer43 = trim($_POST['Answer43']);
	$Answer44 = trim($_POST['Answer44']);
	$Answer45 = trim($_POST['Answer45']);
	$Answer46 = trim($_POST['Answer46']);
	$Answer47 = trim($_POST['Answer47']);
	$Answer48 = trim($_POST['Answer48']);
	$Answer49 = trim($_POST['Answer49']);
	$Answer50 = trim($_POST['Answer50']);
	$Category1 = $Answer33 + $Answer34 + $Answer35;
	$Category2 = $Answer36 + $Answer37 + $Answer38 + $Answer39 + $Answer40 + $Answer41;
	$Category3 = $Answer42 + $Answer43;
	$Category4 = $Answer44 + $Answer45;
	$Category5 = $Answer46;
	$Category6 = $Answer47;
	$Category7 = $Answer48;
	$Category8 = $Answer49;
	$Category9 = $Answer50;
	$CategorySection4_TotalMarks = $Category1 + $Category2 + $Category3 + $Category4 + $Category5 + $Category6 + $Category7 + $Category8 + $Category9;

	$query = "UPDATE qacategory_section4 SET
	inspectID = '$inspectID',
	Answer33 = '$Answer33',
	Answer34 = '$Answer34',
	Answer35 = '$Answer35',
	Answer36 = '$Answer36',  
	Answer37 = '$Answer37',
	Answer38 = '$Answer38',
	Answer39 = '$Answer39',
	Answer40 = '$Answer40',
	Answer41 = '$Answer41',
	Answer42 = '$Answer42',
	Answer43 = '$Answer43',
	Answer44 = '$Answer44',
	Answer45 = '$Answer45',
	Answer46 = '$Answer46',
	Answer47 = '$Answer47',
	Answer48 = '$Answer48',
	Answer49 = '$Answer49',
	Answer50 = '$Answer50',
	Category1 = '$Category1', 
	Category2 = '$Category2', 
	Category3 = '$Category3',
	Category4 = '$Category4', 
	Category5 = '$Category5',
	Category6 = '$Category6', 
	Category7 = '$Category7',
	Category8 = '$Category8', 
	Category9 = '$Category9',  
	CategorySection4_TotalMarks = '$CategorySection4_TotalMarks'
	WHERE inspectID = '$inspectID'";

	$result = mysqli_query($con,$query);

    if($result)
    {   

     $query2 = "UPDATE qamarks SET CategorySection4_TotalMarks = '$CategorySection4_TotalMarks' WHERE inspectID = '$inspectID'";

     $result2 = mysqli_query($con,$query2);
   	}
	

	// two cases for fie , if file submit is on => change a lot
	$result = mysqli_query($con, $query);
	if(!$result){
		echo "Can't update data " . mysqli_error($con);
		exit;
	} else {
		header("Location: AdminReport_EditS4.php?inspectID=$inspectID");
	}
?>