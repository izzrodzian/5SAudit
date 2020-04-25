<?php

session_start();

// Include the database configuration file  
require_once 'Config.php'; 

	$Answer51 = 0;
	$Answer52 = 0;
	$Answer53 = 0;
	$Answer54 = 0;
	$Answer55 = 0;
	$Answer56 = 0;
	$Answer57 = 0;
	$Answer58 = 0;
	$Answer59 = 0;
	$Answer60 = 0;
	$Answer61 = 0;
	$Answer62 = 0;
	$Answer63 = 0;
	$Answer64 = 0;
	$Answer65 = 0;
	$Answer66 = 0;
	$Answer67 = 0;
	$Category1 = 0;
	$Category2 = 0;
	$Category3 = 0;
	$Category4 = 0;
	$Category5 = 0;
	$Category6 = 0;
	$Category7 = 0;
	$Category8 = 0;
	$Category9 = 0;
	$CategorySection5_TotalMarks = 0;

// if save change happen
	if(!isset($_POST['update'])){
		echo "Something wrong!";
		exit;
	}

	$inspectID = trim($_POST['inspectID']);
	$Answer51 = trim($_POST['Answer51']);
	$Answer52 = trim($_POST['Answer52']);
	$Answer53 = trim($_POST['Answer53']);
	$Answer54 = trim($_POST['Answer54']);
	$Answer55 = trim($_POST['Answer55']);
	$Answer56 = trim($_POST['Answer56']);
	$Answer57 = trim($_POST['Answer57']);
	$Answer58 = trim($_POST['Answer58']);
	$Answer59 = trim($_POST['Answer59']);
	$Answer60 = trim($_POST['Answer60']);
	$Answer61 = trim($_POST['Answer61']);
	$Answer62 = trim($_POST['Answer62']);
	$Answer63 = trim($_POST['Answer63']);
	$Answer64 = trim($_POST['Answer64']);
	$Answer65 = trim($_POST['Answer65']);
	$Answer66 = trim($_POST['Answer66']);
	$Answer67 = trim($_POST['Answer67']);
	$Category1 = $Answer51 + $Answer52 + $Answer53;
	$Category2 = $Answer54 + $Answer55;
	$Category3 = $Answer56 + $Answer57;
	$Category4 = $Answer58 + $Answer59 + $Answer60;
	$Category5 = $Answer61 + $Answer62 + $Answer63;
	$Category6 = $Answer64;
	$Category7 = $Answer65;
	$Category8 = $Answer66;
	$Category9 = $Answer67;
	$CategorySection5_TotalMarks = $Category1 + $Category2 + $Category3 + $Category4 + $Category5 + $Category6 + $Category7 + $Category8 + $Category9;

	$query = "UPDATE qacategory_section5 SET
	inspectID = '$inspectID',
	Answer51 = '$Answer51',
	Answer52 = '$Answer52',
	Answer53 = '$Answer53',
	Answer54 = '$Answer54',  
	Answer55 = '$Answer55',
	Answer56 = '$Answer56',
	Answer57 = '$Answer57',
	Answer58 = '$Answer58',
	Answer59 = '$Answer59',
	Answer60 = '$Answer60',
	Answer61 = '$Answer61',
	Answer62 = '$Answer62',
	Answer63 = '$Answer63',
	Answer64 = '$Answer64',
	Answer65 = '$Answer65',
	Answer66 = '$Answer66',
	Answer67 = '$Answer67',
	Category1 = '$Category1', 
	Category2 = '$Category2', 
	Category3 = '$Category3',
	Category4 = '$Category4', 
	Category5 = '$Category5',
	Category6 = '$Category6', 
	Category7 = '$Category7',
	Category8 = '$Category8', 
	Category9 = '$Category9',  
	CategorySection5_TotalMarks = '$CategorySection5_TotalMarks'
	WHERE inspectID = '$inspectID'";

	$result = mysqli_query($con,$query);

    if($result)
    {   

     $query2 = "UPDATE qamarks SET CategorySection5_TotalMarks = '$CategorySection5_TotalMarks' WHERE inspectID = '$inspectID'";

     $result2 = mysqli_query($con,$query2);
   	}
	

	// two cases for fie , if file submit is on => change a lot
	$result = mysqli_query($con, $query);
	if(!$result){
		echo "Can't update data " . mysqli_error($con);
		exit;
	} else {
		header("Location: AdminReport_EditS5.php?inspectID=$inspectID");
	}
?>