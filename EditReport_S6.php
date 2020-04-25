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
	$CategorySection6_TotalMarks = 0;

// if save change happen
	if(!isset($_POST['update'])){
		echo "Something wrong!";
		exit;
	}

	$inspectID = trim($_POST['inspectID']);
	$Answer68 = trim($_POST['Answer68']);
	$Answer69 = trim($_POST['Answer69']);
	$Answer70 = trim($_POST['Answer70']);
	$Answer71 = trim($_POST['Answer71']);
	$Answer72 = trim($_POST['Answer72']);
	$Answer73 = trim($_POST['Answer73']);
	$Answer74 = trim($_POST['Answer74']);
	$Answer75 = trim($_POST['Answer75']);
	$Answer76 = trim($_POST['Answer76']);
	$Answer77 = trim($_POST['Answer77']);
	$Answer78 = trim($_POST['Answer78']);
	$Answer79 = trim($_POST['Answer79']);
	$Answer80 = trim($_POST['Answer80']);
	$Answer81 = trim($_POST['Answer81']);
	$Answer82 = trim($_POST['Answer82']);
	$Answer83 = trim($_POST['Answer83']);
	$Answer84 = trim($_POST['Answer84']);
	$Answer85 = trim($_POST['Answer85']);
	$Answer86 = trim($_POST['Answer86']);
	$Answer87 = trim($_POST['Answer87']);
	$Answer88 = trim($_POST['Answer88']);
	$Answer89 = trim($_POST['Answer89']);
	$Answer90 = trim($_POST['Answer90']);
	$Answer91 = trim($_POST['Answer91']);
	$Answer92 = trim($_POST['Answer92']);
	$Answer93 = trim($_POST['Answer93']);
	$Answer94 = trim($_POST['Answer94']);
	$Answer95 = trim($_POST['Answer95']);
	$Answer96 = trim($_POST['Answer96']);
	$Answer97 = trim($_POST['Answer97']);
	$Answer98 = trim($_POST['Answer98']);
	$Answer99 = trim($_POST['Answer99']);
	$Answer100 = trim($_POST['Answer100']);
	$Category1 = $Answer68 + $Answer69;
	$Category2 = $Answer70 + $Answer71 + $Answer72;
	$Category3 = $Answer73 + $Answer74 + $Answer75;
	$Category4 = $Answer76 + $Answer77 + $Answer78;
	$Category5 = $Answer79 + $Answer80 + $Answer81;
	$Category6 = $Answer82 + $Answer83 + $Answer84;
	$Category7 = $Answer85 + $Answer86 + $Answer87;
	$Category8 = $Answer88 + $Answer89 + $Answer90;
	$Category9 = $Answer91 + $Answer92 + $Answer93;
	$Category10 = $Answer94 + $Answer95 + $Answer96;
	$Category11 = $Answer97;
	$Category12 = $Answer98;
	$Category13 = $Answer99;
	$Category14 = $Answer100;
	$CategorySection6_TotalMarks = $Category1 + $Category2 + $Category3 + $Category4 + $Category5 + $Category6 + $Category7 + $Category8 + $Category9 + $Category10 + $Category11 + $Category12 + $Category13 + $Category14;

	$query = "UPDATE qacategory_section6 SET
	inspectID = '$inspectID',
	Answer68 = '$Answer68',
	Answer69 = '$Answer69',
	Answer70 = '$Answer70',
	Answer71 = '$Answer71',  
	Answer72 = '$Answer72',
	Answer73 = '$Answer73',
	Answer74 = '$Answer74',
	Answer75 = '$Answer75',
	Answer76 = '$Answer76',
	Answer77 = '$Answer77',
	Answer78 = '$Answer78',
	Answer79 = '$Answer79',
	Answer80 = '$Answer80',
	Answer81 = '$Answer81',
	Answer82 = '$Answer82',
	Answer83 = '$Answer83',
	Answer84 = '$Answer84',
	Answer85 = '$Answer85',
	Answer86 = '$Answer86',
	Answer87 = '$Answer87',  
	Answer88 = '$Answer88',
	Answer89 = '$Answer89',
	Answer90 = '$Answer90',
	Answer91 = '$Answer91',
	Answer92 = '$Answer92',
	Answer93 = '$Answer93',
	Answer94 = '$Answer94',
	Answer95 = '$Answer95',
	Answer96 = '$Answer96',
	Answer97 = '$Answer97',
	Answer98 = '$Answer98',
	Answer99 = '$Answer99',
	Answer100 = '$Answer100',
	Category1 = '$Category1', 
	Category2 = '$Category2', 
	Category3 = '$Category3',
	Category4 = '$Category4', 
	Category5 = '$Category5',
	Category6 = '$Category6', 
	Category7 = '$Category7',
	Category8 = '$Category8', 
	Category9 = '$Category9',
	Category10 = '$Category10',
	Category11 = '$Category11', 
	Category12 = '$Category12',
	Category13 = '$Category13', 
	Category14 = '$Category14', 
	CategorySection6_TotalMarks = '$CategorySection6_TotalMarks'
	WHERE inspectID = '$inspectID'";

	$result = mysqli_query($con,$query);

    if($result)
    {   

     $query2 = "UPDATE qamarks SET CategorySection6_TotalMarks = '$CategorySection6_TotalMarks' WHERE inspectID = '$inspectID'";

     $result2 = mysqli_query($con,$query2);
   	}
	

	// two cases for fie , if file submit is on => change a lot
	$result = mysqli_query($con, $query);
	if(!$result){
		echo "Can't update data " . mysqli_error($con);
		exit;
	} else {
		header("Location: AdminReport_EditS6.php?inspectID=$inspectID");
	}
?>