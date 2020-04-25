<?php

session_start();

// Include the database configuration file  
require_once 'Config.php'; 

	$Answer4 = 0;
	$Answer5 = 0;
	$Answer6 = 0;
	$Answer7 = 0;
	$Answer8 = 0;
	$Answer9 = 0;
	$Answer10 = 0;
	$Answer11 = 0;
	$Answer12 = 0;
	$Answer13 = 0;
	$Answer14 = 0;
	$Answer15 = 0;
	$Answer16 = 0;
	$Answer17 = 0;
	$Answer18 = 0;
	$Answer19 = 0;
	$Category1 = 0;
	$Category2 = 0;
	$Category3 = 0;
	$Category4 = 0;
	$Category5 = 0;
	$Category6 = 0;
	$Category7 = 0;
	$Category8 = 0;
	$Category9 = 0;
	$CategorySection2_TotalMarks = 0;

// if save change happen
	if(!isset($_POST['update'])){
		echo "Something wrong!";
		exit;
	}

	$inspectID = trim($_POST['inspectID']);
	$Answer4 = trim($_POST['Answer4']);
	$Answer5 = trim($_POST['Answer5']);
	$Answer6 = trim($_POST['Answer6']);
	$Answer7 = trim($_POST['Answer7']);
	$Answer8 = trim($_POST['Answer8']);
	$Answer9 = trim($_POST['Answer9']);
	$Answer10 = trim($_POST['Answer10']);
	$Answer11 = trim($_POST['Answer11']);
	$Answer12 = trim($_POST['Answer12']);
	$Answer13 = trim($_POST['Answer13']);
	$Answer14 = trim($_POST['Answer14']);
	$Answer15 = trim($_POST['Answer15']);
	$Answer16 = trim($_POST['Answer16']);
	$Answer17 = trim($_POST['Answer17']);
	$Answer18 = trim($_POST['Answer18']);
	$Answer19 = trim($_POST['Answer19']);	
	$Category1 = $Answer4 + $Answer5 + $Answer6;
	$Category2 = $Answer7 + $Answer8;
	$Category3 = $Answer9 + $Answer10;
	$Category4 = $Answer11 + $Answer12 + $Answer13;
	$Category5 = $Answer14;
	$Category6 = $Answer15 + $Answer16;
	$Category7 = $Answer17;
	$Category8 = $Answer18;
	$Category9 = $Answer19;
	$CategorySection2_TotalMarks = $Category1 + $Category2 + $Category3 + $Category4 + $Category5 + $Category6 + $Category7 + $Category8 + $Category9;

	$query = "UPDATE qacategory_section2 SET
	inspectID = '$inspectID',
	Answer4 = '$Answer4',
	Answer5 = '$Answer5',
	Answer6 = '$Answer6',
	Answer7 = '$Answer7',  
	Answer8 = '$Answer8',
	Answer9 = '$Answer9',
	Answer10 = '$Answer10',
	Answer11 = '$Answer11',
	Answer12 = '$Answer12',
	Answer13 = '$Answer13',
	Answer14 = '$Answer14',
	Answer15 = '$Answer15',
	Answer16 = '$Answer16',
	Answer17 = '$Answer17',
	Answer18 = '$Answer18',
	Answer19 = '$Answer19',
	Category1 = '$Category1', 
	Category2 = '$Category2', 
	Category3 = '$Category3',
	Category4 = '$Category4', 
	Category5 = '$Category5', 
	Category6 = '$Category6', 
	Category7 = '$Category7', 
	Category8 = '$Category8', 
	Category9 = '$Category9',  
	CategorySection2_TotalMarks = '$CategorySection2_TotalMarks'
	WHERE inspectID = '$inspectID'";

	$result = mysqli_query($con,$query);

    if($result)
    {   

     $query2 = "UPDATE qamarks SET CategorySection2_TotalMarks = '$CategorySection2_TotalMarks' WHERE inspectID = '$inspectID'";

     $result2 = mysqli_query($con,$query2);
   	}
	

	// two cases for fie , if file submit is on => change a lot
	$result = mysqli_query($con, $query);
	if(!$result){
		echo "Can't update data " . mysqli_error($con);
		exit;
	} else {
		header("Location: AdminReport_EditS2.php?inspectID=$inspectID");
	}
?>