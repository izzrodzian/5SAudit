<!DOCTYPE html>

<?php  

session_start();

$con = mysqli_connect('127.0.0.1','root','') or die ('Not connected.');
mysqli_select_db($con,'5s') or die ('No database found.');

$totalC1 = 0;
$totalC2 = 0;
$totalC3 = 0;
$totalC4 = 0;
$totalC5 = 0;
$totalC6 = 0;
$totalC7 = 0;
$totalC8 = 0;
$totalC9 = 0;
$totalC10 = 0;
$totalC11 = 0;
$totalC12 = 0;
$totalC13 = 0;
$totalC14 = 0;
$total = 0;

if (isset($_POST['Submit']))
{
  
  $answer68 = $_POST['answer68'];
  $answer69 = $_POST['answer69'];
  $answer70 = $_POST['answer70'];
  $answer71 = $_POST['answer71'];
  $answer72 = $_POST['answer72'];
  $answer73 = $_POST['answer73'];
  $answer74 = $_POST['answer74'];
  $answer75 = $_POST['answer75'];
  $answer76 = $_POST['answer76'];
  $answer77 = $_POST['answer77'];
  $answer78 = $_POST['answer78'];
  $answer79 = $_POST['answer79'];
  $answer80 = $_POST['answer80'];
  $answer81 = $_POST['answer81'];
  $answer82 = $_POST['answer82'];
  $answer83 = $_POST['answer83'];
  $answer84 = $_POST['answer84'];
  $answer85 = $_POST['answer85'];
  $answer86 = $_POST['answer86'];
  $answer87 = $_POST['answer87'];
  $answer88 = $_POST['answer88'];
  $answer89 = $_POST['answer89'];
  $answer90 = $_POST['answer90'];
  $answer91 = $_POST['answer91'];
  $answer92 = $_POST['answer92'];
  $answer93 = $_POST['answer93'];
  $answer94 = $_POST['answer94'];
  $answer95 = $_POST['answer95'];
  $answer96 = $_POST['answer96'];
  $answer97 = $_POST['answer97'];
  $answer98 = $_POST['answer98'];
  $answer99 = $_POST['answer99'];
  $answer100 = $_POST['answer100'];

  //Calculation
  $totalC1 = $answer68 + $answer69;
  $totalC2 = $answer70 + $answer71 + $answer72;
  $totalC3 = $answer73 + $answer74 + $answer75;
  $totalC4 = $answer76 + $answer77 + $answer78;
  $totalC5 = $answer79 + $answer80 + $answer81;
  $totalC6 = $answer82 + $answer83 + $answer84;
  $totalC7 = $answer85 + $answer86 + $answer87;
  $totalC8 = $answer88 + $answer89 + $answer90;
  $totalC9 = $answer91 + $answer92 + $answer93;
  $totalC10 = $answer94 + $answer95 + $answer96;
  $totalC11 = $answer97;
  $totalC12 = $answer98;
  $totalC13 = $answer99;
  $totalC14 = $answer100;
  $total = $totalC1 + $totalC2 + $totalC3 + $totalC4 + $totalC5 + $totalC6 + $totalC7 + $totalC8 + $totalC9 + $totalC10 + $totalC11 + $totalC12 + $totalC13 + $totalC14;

  $sql1 = "INSERT INTO qacategory_section6 (Category1, Category2, Category3, Category4, Category5, Category6, Category7, Category8, Category9, Category10, Category11, Category12, Category13, Category14, CategorySection6_TotalMarks) VALUES ('$totalC1', '$totalC2', '$totalC3', '$totalC4', '$totalC5', '$totalC6', '$totalC7', '$totalC8', '$totalC9', '$totalC10', '$totalC11', '$totalC12', '$totalC13', '$totalC14', '$total')";
  $result1 = mysqli_query($con,$sql1);

  if($result1)
    {    
     $sql2 = "INSERT INTO qamarks (CategorySection6_TotalMarks) VALUES ('$total')"; 

     $result2 = mysqli_query($con,$sql2);

     if($result2)

     {
       $S1 = $_GET['CategorySection1_TotalMarks'];
       $S2 = $_GET['CategorySection2_TotalMarks'];
       $S3 = $_GET['CategorySection3_TotalMarks'];
       $S4 = $_GET['CategorySection4_TotalMarks'];
       $S5 = $_GET['CategorySection5_TotalMarks'];
       $S6 = $_GET['CategorySection6_TotalMarks'];
       $overall = $S1 + $S2 + $S3 + $S4 + $S5 + $S6; 

//sum ct
       $sql4 = "UPDATE into qamarks (TotalMarks) VALUES ('$overall') WHERE userID ='0'";
       $result4 = mysqli_query($con,$sql4);
     }

   }
}

// if (isset($_POST['Done']))
// {

// $sql3 = "SELECT CategorySection1_TotalMarks, CategorySection2_TotalMarks, CategorySection3_TotalMarks, CategorySection4_TotalMarks, CategorySection5_TotalMarks, CategorySection6_TotalMarks FROM qamarks WHERE userID = '0'";
// $result3 = mysqli_query($con,$sql3);

// if($result3)
// {

//   $C1 = $_POST['CategorySection1_TotalMarks'];
//   $C2 = $_POST['CategorySection2_TotalMarks'];
//   $C3 = $_POST['CategorySection3_TotalMarks'];
//   $C4 = $_POST['CategorySection4_TotalMarks'];
//   $C5 = $_POST['CategorySection5_TotalMarks'];
//   $C6 = $_POST['CategorySection6_TotalMarks'];
//   $overall = $C1 + $C2 + $C3 + $C4 + $C5 + $C6; 

// //sum ct
//   $sql4 = "UPDATE into qamarks (TotalMarks) VALUES ('$overall') WHERE userID ='0'";
//   $result4 = mysqli_query($con,$sql4);

//   // Header("Location:Report.php");
// }


?>

<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo5s-122x125.png" type="image/x-icon">
  <meta name="description" content="Web Site Creator Description">
  
  <title>5S Audit | Seksyen 6</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
<!-- style for collapsible category & question part -->
  <style>
.collapsible {
  background-color: #252d78;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: none;
  background-color: #e1eef5;
}
</style>
  
  
</head>
<body>
  <section class="menu cid-rPwfwJELGC" once="menu" id="menu1-h">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    
                         <img src="assets/images/logo5s-122x125.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="https://mobirise.co">
                        5S AUDIT INSPECTION</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item dropdown">
                    <a class="nav-link link dropdown-toggle text-white display-4" href="https://mobirise.co" data-toggle="dropdown-submenu" aria-expanded="true"><span class="mobi-mbri mobi-mbri-logout mbr-iconfont mbr-iconfont-btn"></span>
                        
                        LOGOUT</a><div class="dropdown-menu"><a class="dropdown-item text-white display-4" href="https://mobirise.co">PROFILE</a></div>
                </li></ul>
        </div>
    </nav>
</section>

<section class="cid-rPxomWSNoR">
<br><br>
<center>
  <h5>SEKSYEN 6: TEMPAT UMUM</h5>
  <br>
  <br>

<button type="button" style="width: 90%" class="collapsible">Kategori 1: Kaunter/Lobi/Koridor/Tangga
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC1 ?>/10</div>
<br>
<form method="POST">
<table class="table" style="width: 100%;" align="center">    
      <tr>
      <th>Perkara</th>
      <th>N/A</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>Gambar</th>    
      </tr>
    
      <tr>
      <td>Kawasan lantai/dinding bersih dan tiada item tidak perlu.<p id="q1s6category1"required></p></td>
      <td><input type="radio" id="answer1q1s6c1NA" name="answer68" value="0"></td>
      <td><input type="radio" id="answer1q1s6c1" name="answer68" value="1"></td>
      <td><input type="radio" id="answer2q1s6c1"  name="answer68" value="2"></td>
      <td><input type="radio" id="answer3q1s6c1"  name="answer68" value="3"></td>
      <td><input type="radio" id="answer4q1s6c1"  name="answer68" value="4"></td>
      <td><input type="radio" id="answer5q1s6c1"  name="answer68" value="5"></td>
      <td><input type="file" name="images1s6category1">
      </tr>

      <tr>
      <td>Susunatur peralatan dan item kemas dan memuaskan.<p id="q2s6category1"required></p></td>
      <td><input type="radio" id="answer1q2s6c1NA" name="answer69" value="0"></td>
      <td><input type="radio" id="answer1q2s6c1" name="answer69" value="1"></td>
      <td><input type="radio" id="answer2q2s6c1"  name="answer69" value="2"></td>
      <td><input type="radio" id="answer3q2s6c1"  name="answer69" value="3"></td>
      <td><input type="radio" id="answer4q2s6c1"  name="answer69" value="4"></td>
      <td><input type="radio" id="answer5q2s6c1"  name="answer69" value="5"></td>
      <td><input type="file" name="images2s6category1">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans6category1" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 2: Bilik Mesyuarat/Bilik VIP
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC2 ?>/15</div>
<br>
<table class="table" style="width: 100%;" align="center">    
      <tr>
      <th>Perkara</th>
      <th>N/A</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>Gambar</th>    
      </tr>
    
      <tr>
      <td>Kawasan lantai dan dinding bersih dan tiada item tidak perlu.<p id="q1s6category2"required></p></td>
      <td><input type="radio" id="answer1q1s6c2NA" name="answer70" value="0"></td>
      <td><input type="radio" id="answer1q1s6c2" name="answer70" value="1"></td>
      <td><input type="radio" id="answer2q1s6c2"  name="answer70" value="2"></td>
      <td><input type="radio" id="answer3q1s6c2"  name="answer70" value="3"></td>
      <td><input type="radio" id="answer4q1s6c2"  name="answer70" value="4"></td>
      <td><input type="radio" id="answer5q1s6c2"  name="answer70" value="5"></td>
      <td><input type="file" name="images1s6category2">
      </tr>

      <tr>
      <td>Susun atur peralatan/item kemas dan memudahkan.<p id="q2s6category2"required></p></td>
      <td><input type="radio" id="answer1q2s6c2NA" name="answer71" value="0"></td>
      <td><input type="radio" id="answer1q2s6c2" name="answer71" value="1"></td>
      <td><input type="radio" id="answer2q2s6c2"  name="answer71" value="2"></td>
      <td><input type="radio" id="answer3q2s6c2"  name="answer71" value="3"></td>
      <td><input type="radio" id="answer4q2s6c2"  name="answer71" value="4"></td>
      <td><input type="radio" id="answer5q2s6c2"  name="answer71" value="5"></td>
      <td><input type="file" name="images2s6category2">
      </tr>

      <tr>
      <td>Maklumat Visual dalam keadaan bersih dan kemas.(etika,inventori,kawalan penggunaan dsb)<p id="q3s6category1"required></p></td>
      <td><input type="radio" id="answer1q3s6c2NA" name="answer72" value="0"></td>
      <td><input type="radio" id="answer1q3s6c2" name="answer72" value="1"></td>
      <td><input type="radio" id="answer2q3s6c2"  name="answer72" value="2"></td>
      <td><input type="radio" id="answer3q3s6c2"  name="answer72" value="3"></td>
      <td><input type="radio" id="answer4q3s6c2"  name="answer72" value="4"></td>
      <td><input type="radio" id="answer5q3s6c2"  name="answer72" value="5"></td>
      <td><input type="file" name="images3s6category2">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans6category2" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 3: Bilik Latihan/Simulasi
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC3 ?>/15</div>
<br>
<table class="table" style="width: 100%;" align="center">    
      <tr>
      <th>Perkara</th>
      <th>N/A</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>Gambar</th>    
      </tr>
    
      <tr>
      <td>Kawasan bersih dan tiada item tidak perlu.<p id="q1s6category3"required></p></td>
      <td><input type="radio" id="answer1q1s6c3NA" name="answer73" value="0"></td>
      <td><input type="radio" id="answer1q1s6c3" name="answer73" value="1"></td>
      <td><input type="radio" id="answer2q1s6c3"  name="answer73" value="2"></td>
      <td><input type="radio" id="answer3q1s6c3"  name="answer73" value="3"></td>
      <td><input type="radio" id="answer4q1s6c3"  name="answer73" value="4"></td>
      <td><input type="radio" id="answer5q1s6c3"  name="answer73" value="5"></td>
      <td><input type="file" name="images1s6category3">
      </tr>

    <tr>
      <td>Susunatur peralatan/item kemas dan memudahkan.<p id="q2s6category3"required></p></td>
      <td><input type="radio" id="answer1q2s6c3NA" name="answer74" value="0"></td>
      <td><input type="radio" id="answer1q2s6c3" name="answer74" value="1"></td>
      <td><input type="radio" id="answer2q2s6c3"  name="answer74" value="2"></td>
      <td><input type="radio" id="answer3q2s6c3"  name="answer74" value="3"></td>
      <td><input type="radio" id="answer4q2s6c3"  name="answer74" value="4"></td>
      <td><input type="radio" id="answer5q2s6c3"  name="answer74" value="5"></td>
      <td><input type="file" name="images2s6category3">
      </tr>

       <tr>
      <td>Maklumat Visual dalam keadaan bersih dan kemas.(etika,inventori,kawalan penggunaan dsb)<p id="q3s6category3"required></p></td>
      <td><input type="radio" id="answer1q3s6c3NA" name="answer75" value="0"></td>
      <td><input type="radio" id="answer1q3s6c3" name="answer75" value="1"></td>
      <td><input type="radio" id="answer2q3s6c3"  name="answer75" value="2"></td>
      <td><input type="radio" id="answer3q3s6c3"  name="answer75" value="3"></td>
      <td><input type="radio" id="answer4q3s6c3"  name="answer75" value="4"></td>
      <td><input type="radio" id="answer5q3s6c3"  name="answer75" value="5"></td>
      <td><input type="file" name="images3s6category3">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans6category3" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 4:Kantin/Pantri
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC4 ?>/15</div>
<br>
<table class="table" style="width: 100%;" align="center">    
      <tr>
      <th>Perkara</th>
      <th>N/A</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>Gambar</th>    
      </tr>
    
      <tr>
      <td>Kawasan lantai bersih dan tiada item tidak perlu.<p id="q1s6category4"required></p></td>
      <td><input type="radio" id="answer1q1s6c4NA" name="answer76" value="0"></td>
      <td><input type="radio" id="answer1q1s6c4" name="answer76" value="1"></td>
      <td><input type="radio" id="answer2q1s6c4"  name="answer76" value="2"></td>
      <td><input type="radio" id="answer3q1s6c4"  name="answer76" value="3"></td>
      <td><input type="radio" id="answer4q1s6c4"  name="answer76" value="4"></td>
      <td><input type="radio" id="answer5q1s6c4"  name="answer76" value="5"></td>
      <td><input type="file" name="images1s6category4">
      </tr>

    <tr>
      <td>Susun atur peralatan dan item kemas dan rapi.<p id="q2s6category3"required></p></td>
      <td><input type="radio" id="answer1q2s6c4NA" name="answer77" value="0"></td>
      <td><input type="radio" id="answer1q2s6c4" name="answer77" value="1"></td>
      <td><input type="radio" id="answer2q2s6c4"  name="answer77" value="2"></td>
      <td><input type="radio" id="answer3q2s6c4"  name="answer77" value="3"></td>
      <td><input type="radio" id="answer4q2s6c4"  name="answer77" value="4"></td>
      <td><input type="radio" id="answer5q2s6c4"  name="answer77" value="5"></td>
      <td><input type="file" name="images2s6category4">
      </tr>

      <tr>
      <td>Peralatan dan bahan dalam keadaan baik dan bersih.<p id="q3s6category3"required></p></td>
      <td><input type="radio" id="answer1q3s6c4NA" name="answer78" value="0"></td>
      <td><input type="radio" id="answer1q3s6c4" name="answer78" value="1"></td>
      <td><input type="radio" id="answer2q3s6c4"  name="answer78" value="2"></td>
      <td><input type="radio" id="answer3q3s6c4"  name="answer78" value="3"></td>
      <td><input type="radio" id="answer4q3s6c4"  name="answer78" value="4"></td>
      <td><input type="radio" id="answer5q3s6c4"  name="answer78" value="5"></td>
      <td><input type="file" name="images3s6category4">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans6category4" cols="100" rows="3"></textarea>
    <br>
    <br>
   
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 5: Surau/Ruang Solat
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC5 ?>/15</div>
<br>
<table class="table" style="width: 100%;" align="center">    
      <tr>
      <th>Perkara</th>
      <th>N/A</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>Gambar</th>    
      </tr>
    
      <tr>
      <td>Kawasan yang bersih dan memuaskan.<p id="q1s6category5"required></p></td>
      <td><input type="radio" id="answer1q1s6c5NA" name="answer79" value="0"></td>
      <td><input type="radio" id="answer1q1s6c5" name="answer79" value="1"></td>
      <td><input type="radio" id="answer2q1s6c5"  name="answer79" value="2"></td>
      <td><input type="radio" id="answer3q1s6c5"  name="answer79" value="3"></td>
      <td><input type="radio" id="answer4q1s6c5"  name="answer79" value="4"></td>
      <td><input type="radio" id="answer5q1s6c5"  name="answer79" value="5"></td>
      <td><input type="file" name="images1s6category5">
      </tr>

      <tr>
      <td>Peralatan sentiasa dalam keadaan baik dan boleh digunakan.<p id="q2s6category5"required></p></td>
      <td><input type="radio" id="answer1q2s6c5NA" name="answer80" value="0"></td>
      <td><input type="radio" id="answer1q2s6c5" name="answer80" value="1"></td>
      <td><input type="radio" id="answer2q2s6c5"  name="answer80" value="2"></td>
      <td><input type="radio" id="answer3q2s6c5"  name="answer80" value="3"></td>
      <td><input type="radio" id="answer4q2s6c5"  name="answer80" value="4"></td>
      <td><input type="radio" id="answer5q2s6c5"  name="answer80" value="5"></td>
      <td><input type="file" name="images2s6category5">
      </tr>

      <tr>
      <td>Tiada bahan yang tidak perlu di lokasi.<p id="q3s6category5"required></p></td>
      <td><input type="radio" id="answer1q3s6c5NA" name="answer81" value="0"></td>
      <td><input type="radio" id="answer1q3s6c5" name="answer81" value="1"></td>
      <td><input type="radio" id="answer2q3s6c5"  name="answer81" value="2"></td>
      <td><input type="radio" id="answer3q3s6c5"  name="answer81" value="3"></td>
      <td><input type="radio" id="answer4q3s6c5"  name="answer81" value="4"></td>
      <td><input type="radio" id="answer5q3s6c5"  name="answer81" value="5"></td>
      <td><input type="file" name="images3s6category5">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans6category5" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 6: Tandas/Bilik Mandi
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC6 ?>/15</div>
<br>
<table class="table" style="width: 100%;" align="center">    
      <tr>
      <th>Perkara</th>
      <th>N/A</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>Gambar</th>    
      </tr>
    
      <tr>
      <td>Kawasan yang bersih dan memuaskan.<p id="q1s6category6"required></p></td>
      <td><input type="radio" id="answer1q1s6c6NA" name="answer82" value="0"></td>
      <td><input type="radio" id="answer1q1s6c6" name="answer82" value="1"></td>
      <td><input type="radio" id="answer2q1s6c6"  name="answer82" value="2"></td>
      <td><input type="radio" id="answer3q1s6c6"  name="answer82" value="3"></td>
      <td><input type="radio" id="answer4q1s6c6"  name="answer82" value="4"></td>
      <td><input type="radio" id="answer5q1s6c6"  name="answer82" value="5"></td>
      <td><input type="file" name="images1s6category6">
      </tr>

      <tr>
      <td>Peralatan sentiasa dalam keadaan baik dan boleh digunakan.<p id="q2s6category6"required></p></td>
      <td><input type="radio" id="answer1q2s6c6NA" name="answer83" value="0"></td>
      <td><input type="radio" id="answer1q2s6c6" name="answer83" value="1"></td>
      <td><input type="radio" id="answer2q2s6c6"  name="answer83" value="2"></td>
      <td><input type="radio" id="answer3q2s6c6"  name="answer83" value="3"></td>
      <td><input type="radio" id="answer4q2s6c6"  name="answer83" value="4"></td>
      <td><input type="radio" id="answer5q2s6c6"  name="answer83" value="5"></td>
      <td><input type="file" name="images2s6category6">
      </tr>

      <tr>
      <td>Tiada bahan yang tidak perlu di lokasi.<p id="q3s6category6"required></p></td>
      <td><input type="radio" id="answer1q3s6c6NA" name="answer84" value="0"></td>
      <td><input type="radio" id="answer1q3s6c6" name="answer84" value="1"></td>
      <td><input type="radio" id="answer2q3s6c6"  name="answer84" value="2"></td>
      <td><input type="radio" id="answer3q3s6c6"  name="answer84" value="3"></td>
      <td><input type="radio" id="answer4q3s6c6"  name="answer84" value="4"></td>
      <td><input type="radio" id="answer5q3s6c6"  name="answer84" value="5"></td>
      <td><input type="file" name="images3s6category6">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans6category6" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 7: Bilik Kecemasan/Bilik Rehat/Penginapan
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC7 ?>/15</div>
<br>
<table class="table" style="width: 100%;" align="center">    
      <tr>
      <th>Perkara</th>
      <th>N/A</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>Gambar</th>    
      </tr>
    
      <tr>
      <td>Kawasan yang bersih dan memuaskan.<p id="q1s6category7"required></p></td>
      <td><input type="radio" id="answer1q1s6c7NA" name="answer85" value="0"></td>
      <td><input type="radio" id="answer1q1s6c7" name="answer85" value="1"></td>
      <td><input type="radio" id="answer2q1s6c7"  name="answer85" value="2"></td>
      <td><input type="radio" id="answer3q1s6c7"  name="answer85" value="3"></td>
      <td><input type="radio" id="answer4q1s6c7"  name="answer85" value="4"></td>
      <td><input type="radio" id="answer5q1s6c7"  name="answer85" value="5"></td>
      <td><input type="file" name="images1s6category7">
      </tr>

      <tr>
      <td>Dalam keadaan kemas dan teratur.<p id="q2s6category7"required></p></td>
      <td><input type="radio" id="answer1q2s6c7NA" name="answer86" value="0"></td>
      <td><input type="radio" id="answer1q2s6c7" name="answer86" value="1"></td>
      <td><input type="radio" id="answer2q2s6c7"  name="answer86" value="2"></td>
      <td><input type="radio" id="answer3q2s6c7"  name="answer86" value="3"></td>
      <td><input type="radio" id="answer4q2s6c7"  name="answer86" value="4"></td>
      <td><input type="radio" id="answer5q2s6c7"  name="answer86" value="5"></td>
      <td><input type="file" name="images2s6category7">
      </tr>

      <tr>
      <td>Tiada bahan yang tidak perlu di lokasi.<p id="q3s6category7"required></p></td>
      <td><input type="radio" id="answer1q3s6c7NA" name="answer87" value="0"></td>
      <td><input type="radio" id="answer1q3s6c7" name="answer87" value="1"></td>
      <td><input type="radio" id="answer2q3s6c7"  name="answer87" value="2"></td>
      <td><input type="radio" id="answer3q3s6c7"  name="answer87" value="3"></td>
      <td><input type="radio" id="answer4q3s6c7"  name="answer87" value="4"></td>
      <td><input type="radio" id="answer5q3s6c7"  name="answer87" value="5"></td>
      <td><input type="file" name="images3s6category7">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans6category7" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 8: Pusat Sumber
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC8 ?>/15</div>
<br>
<table class="table" style="width: 100%;" align="center">    
      <tr>
      <th>Perkara</th>
      <th>N/A</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>Gambar</th>    
      </tr>
    
      <tr>
      <td>Kawasan yang bersih dan memuaskan.<p id="q1s6category8"required></p></td>
      <td><input type="radio" id="answer1q1s6c8NA" name="answer88" value="0"></td>
      <td><input type="radio" id="answer1q1s6c8" name="answer88" value="1"></td>
      <td><input type="radio" id="answer2q1s6c8"  name="answer88" value="2"></td>
      <td><input type="radio" id="answer3q1s6c8"  name="answer88" value="3"></td>
      <td><input type="radio" id="answer4q1s6c8"  name="answer88" value="4"></td>
      <td><input type="radio" id="answer5q1s6c8"  name="answer88" value="5"></td>
      <td><input type="file" name="images1s6category8">
      </tr>

      <tr>
      <td>Dalam keadaan kemas dan teratur.<p id="q2s6category8"required></p></td>
      <td><input type="radio" id="answer1q2s6c8NA" name="answer89" value="0"></td>
      <td><input type="radio" id="answer1q2s6c8" name="answer89" value="1"></td>
      <td><input type="radio" id="answer2q2s6c8"  name="answer89" value="2"></td>
      <td><input type="radio" id="answer3q2s6c8"  name="answer89" value="3"></td>
      <td><input type="radio" id="answer4q2s6c8"  name="answer89" value="4"></td>
      <td><input type="radio" id="answer5q2s6c8"  name="answer89" value="5"></td>
      <td><input type="file" name="images2s6category8">
      </tr>

      <tr>
      <td>Tiada bahan yang tidak perlu di lokasi.<p id="q3s6category8"required></p></td>
      <td><input type="radio" id="answer1q3s6c8NA" name="answer90" value="0"></td>
      <td><input type="radio" id="answer1q3s6c8" name="answer90" value="1"></td>
      <td><input type="radio" id="answer2q3s6c8"  name="answer90" value="2"></td>
      <td><input type="radio" id="answer3q3s6c8"  name="answer90" value="3"></td>
      <td><input type="radio" id="answer4q3s6c8"  name="answer90" value="4"></td>
      <td><input type="radio" id="answer5q3s6c8"  name="answer90" value="5"></td>
      <td><input type="file" name="images3s6category8">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans6category8" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 9: Dewan
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC9 ?>/15</div>
<br>
<table class="table" style="width: 100%;" align="center">    
      <tr>
      <th>Perkara</th>
      <th>N/A</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>Gambar</th>    
      </tr>
    
      <tr>
      <td>Kawasan lantai bersih dan tiada item tidak perlu.<p id="q1s6category9"required></p></td>
      <td><input type="radio" id="answer1q1s6c9NA" name="answer91" value="0"></td>
      <td><input type="radio" id="answer1q1s6c9" name="answer91" value="1"></td>
      <td><input type="radio" id="answer2q1s6c9"  name="answer91" value="2"></td>
      <td><input type="radio" id="answer3q1s6c9"  name="answer91" value="3"></td>
      <td><input type="radio" id="answer4q1s6c9"  name="answer91" value="4"></td>
      <td><input type="radio" id="answer5q1s6c9"  name="answer91" value="5"></td>
      <td><input type="file" name="images1s6category9">
      </tr>

      <tr>
      <td>Susun atur peralatan dan item kemas dan rapi.<p id="q2s6category9"required></p></td>
      <td><input type="radio" id="answer1q2s6c9NA" name="answer92" value="0"></td>
      <td><input type="radio" id="answer1q2s6c9" name="answer92" value="1"></td>
      <td><input type="radio" id="answer2q2s6c9"  name="answer92" value="2"></td>
      <td><input type="radio" id="answer3q2s6c9"  name="answer92" value="3"></td>
      <td><input type="radio" id="answer4q2s6c9"  name="answer92" value="4"></td>
      <td><input type="radio" id="answer5q2s6c9"  name="answer92" value="5"></td>
      <td><input type="file" name="images2s6category9">
      </tr>

      <tr>
      <td>Peralatan dan bahan dalam keadaan baik dan bersih.<p id="q3s6category8"required></p></td>
      <td><input type="radio" id="answer1q3s6c9NA" name="answer93" value="0"></td>
      <td><input type="radio" id="answer1q3s6c9" name="answer93" value="1"></td>
      <td><input type="radio" id="answer2q3s6c9"  name="answer93" value="2"></td>
      <td><input type="radio" id="answer3q3s6c9"  name="answer93" value="3"></td>
      <td><input type="radio" id="answer4q3s6c9"  name="answer93" value="4"></td>
      <td><input type="radio" id="answer5q3s6c9"  name="answer93" value="5"></td>
      <td><input type="file" name="images3s6category9">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans6category9" cols="100" rows="3"></textarea>
    <br>
    <br>
   
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 10: Bilik Gimnasium
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah:<?php echo $totalC10 ?>15</div>
<br>
<table class="table" style="width: 100%;" align="center">    
      <tr>
      <th>Perkara</th>
      <th>N/A</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>Gambar</th>    
      </tr>
    
      <tr>
      <td>Kawasan yang bersih dan memuaskan.<p id="q1s6category10"required></p></td>
      <td><input type="radio" id="answer1q1s6c10NA" name="answer94" value="0"></td>
      <td><input type="radio" id="answer1q1s6c10" name="answer94" value="1"></td>
      <td><input type="radio" id="answer2q1s6c10"  name="answer94" value="2"></td>
      <td><input type="radio" id="answer3q1s6c10"  name="answer94" value="3"></td>
      <td><input type="radio" id="answer4q1s6c10"  name="answer94" value="4"></td>
      <td><input type="radio" id="answer5q1s6c10"  name="answer94" value="5"></td>
      <td><input type="file" name="images1s6category10">
      </tr>

      <tr>
      <td>Dalam keadaan kemas dan teratur.<p id="q2s6category10"required></p></td>
      <td><input type="radio" id="answer1q2s6c10NA" name="answer95" value="0"></td>
      <td><input type="radio" id="answer1q2s6c10" name="answer95" value="1"></td>
      <td><input type="radio" id="answer2q2s6c10"  name="answer95" value="2"></td>
      <td><input type="radio" id="answer3q2s6c10"  name="answer95" value="3"></td>
      <td><input type="radio" id="answer4q2s6c10"  name="answer95" value="4"></td>
      <td><input type="radio" id="answer5q2s6c10"  name="answer95" value="5"></td>
      <td><input type="file" name="images2s6category10">
      </tr>

      <tr>
      <td>Tiada bahan yang tidak perlu di lokasi.<p id="q3s6category8"required></p></td>
      <td><input type="radio" id="answer1q3s6c10NA" name="answer96" value="0"></td>
      <td><input type="radio" id="answer1q3s6c10" name="answer96" value="1"></td>
      <td><input type="radio" id="answer2q3s6c10"  name="answer96" value="2"></td>
      <td><input type="radio" id="answer3q3s6c10"  name="answer96" value="3"></td>
      <td><input type="radio" id="answer4q3s6c10"  name="answer96" value="4"></td>
            <td><input type="radio" id="answer5q3s6c10"  name="answer96" value="5"></td>
      <td><input type="file" name="images3s6category10">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans6category10" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 11: Keselamatan
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC11 ?>/5</div>
<br>
<table class="table" style="width: 100%;" align="center">    
      <tr>
      <th>Perkara</th>
      <th>N/A</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>Gambar</th>    
      </tr>
    
      <tr>
      <td>Aspek keselamatan diutamakan.<p id="q1s5category11"required></p></td>
      <td><input type="radio" id="answer1q1s6c11NA" name="answer97" value="0"></td>
      <td><input type="radio" id="answer1q1s6c11" name="answer97" value="1"></td>
      <td><input type="radio" id="answer2q1s6c11"  name="answer97" value="2"></td>
      <td><input type="radio" id="answer3q1s6c11"  name="answer97" value="3"></td>
      <td><input type="radio" id="answer4q1s6c11"  name="answer97" value="4"></td>
      <td><input type="radio" id="answer5q1s6c11"  name="answer97" value="5"></td>
      <td><input type="file" name="images1s6category11">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans6category11" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 12: Seragam
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC12 ?>/5</div>
<br>
<table class="table" style="width: 100%;" align="center">    
      <tr>
      <th>Perkara</th>
      <th>N/A</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>Gambar</th>    
      </tr>
    
      <tr>
      <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”.<p id="q1s5category7"required></p></td>
      <td><input type="radio" id="answer1q1s6c12NA" name="answer98" value="0"></td>
      <td><input type="radio" id="answer1q1s6c12" name="answer98" value="1"></td>
      <td><input type="radio" id="answer2q1s6c12"  name="answer98" value="2"></td>
      <td><input type="radio" id="answer3q1s6c12"  name="answer98" value="3"></td>
      <td><input type="radio" id="answer4q1s6c12"  name="answer98" value="4"></td>
      <td><input type="radio" id="answer5q1s6c12"  name="answer98" value="5"></td>
      <td><input type="file" name="images1s6category12">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans6category12" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 13: Sentiasa Amal
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC13 ?>/5</div>
<br>
<table class="table" style="width: 100%;" align="center">    
      <tr>
      <th>Perkara</th>
      <th>N/A</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>Gambar</th>    
      </tr>
    
      <tr>
      <td>Kerjasama dan sikap positif untuk amalan berterusan.<p id="q1s5category13"required></p></td>
      <td><input type="radio" id="answer1q1s6c13NA" name="answer99" value="0"></td>
      <td><input type="radio" id="answer1q1s6c13" name="answer99" value="1"></td>
      <td><input type="radio" id="answer2q1s6c13"  name="answer99" value="2"></td>
      <td><input type="radio" id="answer3q1s6c13"  name="answer99" value="3"></td>
      <td><input type="radio" id="answer4q1s6c13"  name="answer99" value="4"></td>
      <td><input type="radio" id="answer5q1s6c13"  name="answer99" value="5"></td>
      <td><input type="file" name="images1s6category13">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans6category13" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 14: Impak
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC14 ?>/5</div>
<br>
<table class="table" style="width: 100%;" align="center">    
      <tr>
      <th>Perkara</th>
      <th>N/A</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>Gambar</th>    
      </tr>
    
      <tr>
      <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos/Keselamatan/Moral/Inovasi)<p id="q1s5category14"required></p></td>
      <td><input type="radio" id="answer1q1s6c14NA" name="answer100" value="0"></td>
      <td><input type="radio" id="answer1q1s6c14" name="answer100" value="1"></td>
      <td><input type="radio" id="answer2q1s6c14"  name="answer100" value="2"></td>
      <td><input type="radio" id="answer3q1s6c14"  name="answer100" value="3"></td>
      <td><input type="radio" id="answer4q1s6c14"  name="answer100" value="4"></td>
      <td><input type="radio" id="answer5q1s6c14"  name="answer100" value="5"></td>
      <td><input type="file" name="images1s6category14">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans6category14" cols="100" rows="3"></textarea>
    <br>
    <br>
   
</div>

<br><br><br>
  <input type="Submit" name="Submit" value="Submit">
<br><br>
<div align="center"> Jumlah markah Seksyen 6: <?php echo $total ?>/165</div>
<br>
<br>
<input class="btn btn-primary display-4"  type="submit" name="Done" value="Selesai">
</form>

<div class="container">
      <div class="col-ld-12">

        <form method="POST">
         
       </form>
       <table class="table table-striped table-hover table-bordered">

        <tr>
          <th> S1 </th>
          <th> S2 </th>
          <th> S3 </th>
          <th> S4 </th>
          <th> S5 </th>
          <th> S6 </th>  
          <th> Total Mark</th>        
        </tr>

        <?php

        if (isset($_POST['Submit']))
        {

          $sql = "SELECT * FROM qamarks ";

        } 

        $query = mysqli_query($con,$sql);

        while ($res = mysqli_fetch_array($query)){

         ?>


         <tr>
          <td> <?php echo $res['CategorySection1_TotalMarks']; ?></td>
          <td> <?php echo $res['CategorySection2_TotalMarks']; ?> </td>
          <td> <?php echo $res['CategorySection3_TotalMarks']; ?></td>
          <td> <?php echo $res['CategorySection4_TotalMarks']; ?></td>
          <td> <?php echo $res['CategorySection5_TotalMarks']; ?></td>
          <td> <?php echo $res['CategorySection6_TotalMarks']; ?></td>
          <td> <?php echo $res['TotalMarks']; ?></td> 



        <?php



      }
      ?>

    </table><br><br>



  


<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</center>
</section>

<section once="footers" class="cid-rPwjkLZhDD" id="footer7-i">

  <div class="container">
    <div class="media-container-row align-center mbr-white">
      <div class="row row-links">
        <ul class="foot-menu">

          <li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"></li></ul>
        </div>
        <div class="row social-row">
          <div class="social-list align-right pb-2">

            <div class="soc-item">
              <a href="https://twitter.com/" target="_blank">
                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
              </a>
            </div><div class="soc-item">
              <a href="https://www.facebook.com/" target="_blank">
                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
              </a>
            </div>
            <div class="soc-item">
              <a href="https://instagram.com/" target="_blank">
                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
              </a>
            </div>
          </div>
          </div>
          <div class="row row-copirayt">
            <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
              © Copyright 2020 | 5S Audit Inspection | Ampang Line - All Rights Reserved
            </p>
          </div>
        </div>
      </div>
    </section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>