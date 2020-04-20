<!DOCTYPE html>

<?php  

session_start();

// Include the database configuration file  
require_once 'Config.php'; 

$answer68 = 0;
$answer69 = 0;
$answer70 = 0;
$answer71 = 0;
$answer72 = 0;
$answer73 = 0;
$answer74 = 0;
$answer75 = 0;
$answer76 = 0;
$answer77 = 0;
$answer78 = 0;
$answer79 = 0;
$answer80 = 0;
$answer81 = 0;
$answer82 = 0;
$answer83 = 0;
$answer84 = 0;
$answer85 = 0;
$answer86 = 0;
$answer87 = 0;
$answer88 = 0;
$answer89 = 0;
$answer90 = 0;
$answer91 = 0;
$answer92 = 0;
$answer93 = 0;
$answer94 = 0;
$answer95 = 0;
$answer96 = 0;
$answer97 = 0;
$answer98 = 0;
$answer99 = 0;
$answer100 = 0;
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


  $catatan36 = $_POST['catatan36'];
  $catatan37 = $_POST['catatan37'];
  $catatan38 = $_POST['catatan38'];
  $catatan39 = $_POST['catatan39'];
  $catatan40 = $_POST['catatan40'];
  $catatan41 = $_POST['catatan41'];
  $catatan42 = $_POST['catatan42'];
  $catatan43 = $_POST['catatan43'];
  $catatan44 = $_POST['catatan44'];
  $catatan45 = $_POST['catatan45'];
  $catatan46 = $_POST['catatan46'];
  $catatan47 = $_POST['catatan47'];
  $catatan48 = $_POST['catatan48'];
  $catatan49 = $_POST['catatan49'];

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


   //declare images variable
  $filename68 = $_FILES['image68']['name'];
  $filetmpname68 = $_FILES['image68']['tmp_name'];

  $filename69 = $_FILES['image69']['name'];
  $filetmpname69 = $_FILES['image69']['tmp_name'];

  $filename70 = $_FILES['image70']['name'];
  $filetmpname70 = $_FILES['image70']['tmp_name'];

  $filename71 = $_FILES['image71']['name'];
  $filetmpname71 = $_FILES['image71']['tmp_name'];

  $filename72 = $_FILES['image72']['name'];
  $filetmpname72 = $_FILES['image72']['tmp_name'];

  $filename73 = $_FILES['image73']['name'];
  $filetmpname73 = $_FILES['image73']['tmp_name'];

  $filename74 = $_FILES['image74']['name'];
  $filetmpname74 = $_FILES['image74']['tmp_name'];

  $filename75 = $_FILES['image75']['name'];
  $filetmpname75 = $_FILES['image75']['tmp_name'];

  $filename76 = $_FILES['image76']['name'];
  $filetmpname76 = $_FILES['image76']['tmp_name'];

  $filename77 = $_FILES['image77']['name'];
  $filetmpname77 = $_FILES['image77']['tmp_name'];

  $filename78 = $_FILES['image78']['name'];
  $filetmpname78 = $_FILES['image78']['tmp_name'];

  $filename79 = $_FILES['image79']['name'];
  $filetmpname79 = $_FILES['image79']['tmp_name'];

  $filename80 = $_FILES['image80']['name'];
  $filetmpname80 = $_FILES['image80']['tmp_name'];

  $filename81 = $_FILES['image81']['name'];
  $filetmpname81 = $_FILES['image81']['tmp_name'];

  $filename82 = $_FILES['image82']['name'];
  $filetmpname82 = $_FILES['image82']['tmp_name'];

  $filename83 = $_FILES['image83']['name'];
  $filetmpname83 = $_FILES['image83']['tmp_name'];

  $filename84 = $_FILES['image84']['name'];
  $filetmpname84 = $_FILES['image84']['tmp_name'];

  $filename85 = $_FILES['image85']['name'];
  $filetmpname85 = $_FILES['image85']['tmp_name'];

  $filename86 = $_FILES['image86']['name'];
  $filetmpname86 = $_FILES['image86']['tmp_name'];

  $filename87 = $_FILES['image87']['name'];
  $filetmpname87 = $_FILES['image87']['tmp_name'];

  $filename88 = $_FILES['image88']['name'];
  $filetmpname88 = $_FILES['image88']['tmp_name'];

  $filename89 = $_FILES['image89']['name'];
  $filetmpname89 = $_FILES['image89']['tmp_name'];

  $filename90 = $_FILES['image90']['name'];
  $filetmpname90 = $_FILES['image90']['tmp_name'];

  $filename91 = $_FILES['image91']['name'];
  $filetmpname91 = $_FILES['image91']['tmp_name'];

  $filename92 = $_FILES['image92']['name'];
  $filetmpname92 = $_FILES['image92']['tmp_name'];

  $filename93 = $_FILES['image93']['name'];
  $filetmpname93 = $_FILES['image93']['tmp_name'];

  $filename94 = $_FILES['image94']['name'];
  $filetmpname94 = $_FILES['image94']['tmp_name'];

  $filename95 = $_FILES['image95']['name'];
  $filetmpname95 = $_FILES['image95']['tmp_name'];

  $filename96 = $_FILES['image96']['name'];
  $filetmpname96 = $_FILES['image96']['tmp_name'];

  $filename97 = $_FILES['image97']['name'];
  $filetmpname97 = $_FILES['image97']['tmp_name'];

  $filename98 = $_FILES['image98']['name'];
  $filetmpname98 = $_FILES['image98']['tmp_name'];

  $filename99 = $_FILES['image99']['name'];
  $filetmpname99 = $_FILES['image99']['tmp_name'];

  $filename100 = $_FILES['image100']['name'];
  $filetmpname100 = $_FILES['image100']['tmp_name'];

  //folder where images will be uploaded
  $folder = 'imagesuploaded/';

  //function for saving the uploaded images in a specific folder
  move_uploaded_file($filetmpname68, $folder.$filename68);
  move_uploaded_file($filetmpname69, $folder.$filename69);
  move_uploaded_file($filetmpname70, $folder.$filename70);
  move_uploaded_file($filetmpname71, $folder.$filename71);
  move_uploaded_file($filetmpname72, $folder.$filename72);
  move_uploaded_file($filetmpname73, $folder.$filename73);
  move_uploaded_file($filetmpname74, $folder.$filename74);
  move_uploaded_file($filetmpname75, $folder.$filename75);
  move_uploaded_file($filetmpname76, $folder.$filename76);
  move_uploaded_file($filetmpname77, $folder.$filename77);
  move_uploaded_file($filetmpname78, $folder.$filename78);
  move_uploaded_file($filetmpname79, $folder.$filename79);
  move_uploaded_file($filetmpname80, $folder.$filename80);
  move_uploaded_file($filetmpname81, $folder.$filename81);
  move_uploaded_file($filetmpname82, $folder.$filename82);
  move_uploaded_file($filetmpname83, $folder.$filename83);
  move_uploaded_file($filetmpname84, $folder.$filename84);
  move_uploaded_file($filetmpname85, $folder.$filename85);
  move_uploaded_file($filetmpname86, $folder.$filename86);
  move_uploaded_file($filetmpname87, $folder.$filename87);
  move_uploaded_file($filetmpname88, $folder.$filename88);
  move_uploaded_file($filetmpname89, $folder.$filename89);
  move_uploaded_file($filetmpname90, $folder.$filename90);
  move_uploaded_file($filetmpname91, $folder.$filename91);
  move_uploaded_file($filetmpname92, $folder.$filename92);
  move_uploaded_file($filetmpname93, $folder.$filename93);
  move_uploaded_file($filetmpname94, $folder.$filename94);
  move_uploaded_file($filetmpname95, $folder.$filename95);
  move_uploaded_file($filetmpname96, $folder.$filename96);
  move_uploaded_file($filetmpname97, $folder.$filename97);
  move_uploaded_file($filetmpname98, $folder.$filename98);
  move_uploaded_file($filetmpname99, $folder.$filename99);
  move_uploaded_file($filetmpname100, $folder.$filename100);

  $sql1 = "INSERT INTO qacategory_section6 (Answer68, Answer69, Answer70, Answer71, Answer72, Answer73, Answer74, Answer75, Answer76, Answer77, Answer78, Answer79, Answer80, Answer81, Answer82, Answer83, Answer84, Answer85, Answer86, Answer87, Answer88, Answer89, Answer90, Answer91, Answer92, Answer93, Answer94, Answer95, Answer96, Answer97, Answer98, Answer99, Answer100, Category1, Category2, Category3, Category4, Category5, Category6, Category7, Category8, Category9, Category10, Category11, Category12, Category13, Category14, CategorySection6_TotalMarks, Image68, Image69, Image70, Image71, Image72, Image73, Image74, Image75, Image76, Image77, Image78, Image79, Image80, Image81, Image82, Image83, Image84, Image85, Image86, Image87, Image88, Image89, Image90, Image91, Image92, Image93, Image94, Image95, Image96, Image97, Image98, Image99, Image100, Catatan36, Catatan37, Catatan38, Catatan39, Catatan40, Catatan41, Catatan42, Catatan43, Catatan44, Catatan45, Catatan46, Catatan47, Catatan48, Catatan49) VALUES ('$answer68','$answer69', '$answer70', '$answer71', '$answer72', '$answer73', '$answer74', '$answer75', '$answer76', '$answer77', '$answer78', '$answer79', '$answer80', '$answer81', '$answer82', '$answer83', '$answer84', '$answer85', '$answer86', '$answer87', '$answer88', '$answer89', '$answer90', '$answer91', '$answer92', '$answer93', '$answer94','$answer95', '$answer96', '$answer97', '$answer98', '$answer99', '$answer100','$totalC1', '$totalC2', '$totalC3', '$totalC4', '$totalC5', '$totalC6', '$totalC7', '$totalC8', '$totalC9', '$totalC10', '$totalC11', '$totalC12', '$totalC13', '$totalC14', '$total', '$filename68', '$filename69', '$filename70', '$filename71', '$filename72', '$filename73', '$filename74', '$filename75', '$filename76', '$filename77', '$filename78', '$filename79', '$filename80', '$filename81', '$filename82', '$filename83', '$filename84', '$filename85', '$filename86', '$filename87', '$filename88', '$filename89', '$filename90', '$filename91', '$filename92', '$filename93', '$filename94', '$filename95', '$filename96', '$filename97', '$filename98', '$filename99', '$filename100', '$catatan36', '$catatan37', '$catatan38', '$catatan39', '$catatan40', '$catatan41', '$catatan42', '$catatan43', '$catatan44', '$catatan45', '$catatan46', '$catatan47', '$catatan48', '$catatan49')";
  $result1 = mysqli_query($con,$sql1);


}


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
  
  <title>5S Audit / Seksyen 6</title>
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
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4">
                        PEMERIKSAAN AUDIT 5S / SEKSYEN 6</a></span>
            </div>
        </div>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
        <li class="nav-item"><a class="nav-link link text-white display-4" href="Homepage.php"><span class="mbrib-login mbr-iconfont mbr-iconfont-btn"></span>

        KELUAR</a></li>
      </ul>
    </div></ul>

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
      <td><input type="file" name="image68">
      </tr>

      <tr>
      <td>Susunatur peralatan dan item kemas dan memuaskan.<p id="q2s6category1"required></p></td>
      <td><input type="radio" id="answer1q2s6c1NA" name="answer69" value="0"></td>
      <td><input type="radio" id="answer1q2s6c1" name="answer69" value="1"></td>
      <td><input type="radio" id="answer2q2s6c1"  name="answer69" value="2"></td>
      <td><input type="radio" id="answer3q2s6c1"  name="answer69" value="3"></td>
      <td><input type="radio" id="answer4q2s6c1"  name="answer69" value="4"></td>
      <td><input type="radio" id="answer5q2s6c1"  name="answer69" value="5"></td>
      <td><input type="file" name="image69">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan36" cols="100" rows="3"></textarea>
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
      <td><input type="file" name="image70">
      </tr>

      <tr>
      <td>Susun atur peralatan/item kemas dan memudahkan.<p id="q2s6category2"required></p></td>
      <td><input type="radio" id="answer1q2s6c2NA" name="answer71" value="0"></td>
      <td><input type="radio" id="answer1q2s6c2" name="answer71" value="1"></td>
      <td><input type="radio" id="answer2q2s6c2"  name="answer71" value="2"></td>
      <td><input type="radio" id="answer3q2s6c2"  name="answer71" value="3"></td>
      <td><input type="radio" id="answer4q2s6c2"  name="answer71" value="4"></td>
      <td><input type="radio" id="answer5q2s6c2"  name="answer71" value="5"></td>
      <td><input type="file" name="image71">
      </tr>

      <tr>
      <td>Maklumat Visual dalam keadaan bersih dan kemas.(etika,inventori,kawalan penggunaan dsb)<p id="q3s6category1"required></p></td>
      <td><input type="radio" id="answer1q3s6c2NA" name="answer72" value="0"></td>
      <td><input type="radio" id="answer1q3s6c2" name="answer72" value="1"></td>
      <td><input type="radio" id="answer2q3s6c2"  name="answer72" value="2"></td>
      <td><input type="radio" id="answer3q3s6c2"  name="answer72" value="3"></td>
      <td><input type="radio" id="answer4q3s6c2"  name="answer72" value="4"></td>
      <td><input type="radio" id="answer5q3s6c2"  name="answer72" value="5"></td>
      <td><input type="file" name="image72">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan37" cols="100" rows="3"></textarea>
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
      <td><input type="file" name="image73">
      </tr>

    <tr>
      <td>Susunatur peralatan/item kemas dan memudahkan.<p id="q2s6category3"required></p></td>
      <td><input type="radio" id="answer1q2s6c3NA" name="answer74" value="0"></td>
      <td><input type="radio" id="answer1q2s6c3" name="answer74" value="1"></td>
      <td><input type="radio" id="answer2q2s6c3"  name="answer74" value="2"></td>
      <td><input type="radio" id="answer3q2s6c3"  name="answer74" value="3"></td>
      <td><input type="radio" id="answer4q2s6c3"  name="answer74" value="4"></td>
      <td><input type="radio" id="answer5q2s6c3"  name="answer74" value="5"></td>
      <td><input type="file" name="image74">
      </tr>

       <tr>
      <td>Maklumat Visual dalam keadaan bersih dan kemas.(etika,inventori,kawalan penggunaan dsb)<p id="q3s6category3"required></p></td>
      <td><input type="radio" id="answer1q3s6c3NA" name="answer75" value="0"></td>
      <td><input type="radio" id="answer1q3s6c3" name="answer75" value="1"></td>
      <td><input type="radio" id="answer2q3s6c3"  name="answer75" value="2"></td>
      <td><input type="radio" id="answer3q3s6c3"  name="answer75" value="3"></td>
      <td><input type="radio" id="answer4q3s6c3"  name="answer75" value="4"></td>
      <td><input type="radio" id="answer5q3s6c3"  name="answer75" value="5"></td>
      <td><input type="file" name="image75">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan38" cols="100" rows="3"></textarea>
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
      <td><input type="file" name="image76">
      </tr>

    <tr>
      <td>Susun atur peralatan dan item kemas dan rapi.<p id="q2s6category3"required></p></td>
      <td><input type="radio" id="answer1q2s6c4NA" name="answer77" value="0"></td>
      <td><input type="radio" id="answer1q2s6c4" name="answer77" value="1"></td>
      <td><input type="radio" id="answer2q2s6c4"  name="answer77" value="2"></td>
      <td><input type="radio" id="answer3q2s6c4"  name="answer77" value="3"></td>
      <td><input type="radio" id="answer4q2s6c4"  name="answer77" value="4"></td>
      <td><input type="radio" id="answer5q2s6c4"  name="answer77" value="5"></td>
      <td><input type="file" name="image77">
      </tr>

      <tr>
      <td>Peralatan dan bahan dalam keadaan baik dan bersih.<p id="q3s6category3"required></p></td>
      <td><input type="radio" id="answer1q3s6c4NA" name="answer78" value="0"></td>
      <td><input type="radio" id="answer1q3s6c4" name="answer78" value="1"></td>
      <td><input type="radio" id="answer2q3s6c4"  name="answer78" value="2"></td>
      <td><input type="radio" id="answer3q3s6c4"  name="answer78" value="3"></td>
      <td><input type="radio" id="answer4q3s6c4"  name="answer78" value="4"></td>
      <td><input type="radio" id="answer5q3s6c4"  name="answer78" value="5"></td>
      <td><input type="file" name="image78">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan39" cols="100" rows="3"></textarea>
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
      <td><input type="file" name="image79">
      </tr>

      <tr>
      <td>Peralatan sentiasa dalam keadaan baik dan boleh digunakan.<p id="q2s6category5"required></p></td>
      <td><input type="radio" id="answer1q2s6c5NA" name="answer80" value="0"></td>
      <td><input type="radio" id="answer1q2s6c5" name="answer80" value="1"></td>
      <td><input type="radio" id="answer2q2s6c5"  name="answer80" value="2"></td>
      <td><input type="radio" id="answer3q2s6c5"  name="answer80" value="3"></td>
      <td><input type="radio" id="answer4q2s6c5"  name="answer80" value="4"></td>
      <td><input type="radio" id="answer5q2s6c5"  name="answer80" value="5"></td>
      <td><input type="file" name="image80">
      </tr>

      <tr>
      <td>Tiada bahan yang tidak perlu di lokasi.<p id="q3s6category5"required></p></td>
      <td><input type="radio" id="answer1q3s6c5NA" name="answer81" value="0"></td>
      <td><input type="radio" id="answer1q3s6c5" name="answer81" value="1"></td>
      <td><input type="radio" id="answer2q3s6c5"  name="answer81" value="2"></td>
      <td><input type="radio" id="answer3q3s6c5"  name="answer81" value="3"></td>
      <td><input type="radio" id="answer4q3s6c5"  name="answer81" value="4"></td>
      <td><input type="radio" id="answer5q3s6c5"  name="answer81" value="5"></td>
      <td><input type="file" name="image81">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan40" cols="100" rows="3"></textarea>
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
      <td><input type="file" name="image82">
      </tr>

      <tr>
      <td>Peralatan sentiasa dalam keadaan baik dan boleh digunakan.<p id="q2s6category6"required></p></td>
      <td><input type="radio" id="answer1q2s6c6NA" name="answer83" value="0"></td>
      <td><input type="radio" id="answer1q2s6c6" name="answer83" value="1"></td>
      <td><input type="radio" id="answer2q2s6c6"  name="answer83" value="2"></td>
      <td><input type="radio" id="answer3q2s6c6"  name="answer83" value="3"></td>
      <td><input type="radio" id="answer4q2s6c6"  name="answer83" value="4"></td>
      <td><input type="radio" id="answer5q2s6c6"  name="answer83" value="5"></td>
      <td><input type="file" name="image83">
      </tr>

      <tr>
      <td>Tiada bahan yang tidak perlu di lokasi.<p id="q3s6category6"required></p></td>
      <td><input type="radio" id="answer1q3s6c6NA" name="answer84" value="0"></td>
      <td><input type="radio" id="answer1q3s6c6" name="answer84" value="1"></td>
      <td><input type="radio" id="answer2q3s6c6"  name="answer84" value="2"></td>
      <td><input type="radio" id="answer3q3s6c6"  name="answer84" value="3"></td>
      <td><input type="radio" id="answer4q3s6c6"  name="answer84" value="4"></td>
      <td><input type="radio" id="answer5q3s6c6"  name="answer84" value="5"></td>
      <td><input type="file" name="image84">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan41" cols="100" rows="3"></textarea>
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
      <td><input type="file" name="image85">
      </tr>

      <tr>
      <td>Dalam keadaan kemas dan teratur.<p id="q2s6category7"required></p></td>
      <td><input type="radio" id="answer1q2s6c7NA" name="answer86" value="0"></td>
      <td><input type="radio" id="answer1q2s6c7" name="answer86" value="1"></td>
      <td><input type="radio" id="answer2q2s6c7"  name="answer86" value="2"></td>
      <td><input type="radio" id="answer3q2s6c7"  name="answer86" value="3"></td>
      <td><input type="radio" id="answer4q2s6c7"  name="answer86" value="4"></td>
      <td><input type="radio" id="answer5q2s6c7"  name="answer86" value="5"></td>
      <td><input type="file" name="image86">
      </tr>

      <tr>
      <td>Tiada bahan yang tidak perlu di lokasi.<p id="q3s6category7"required></p></td>
      <td><input type="radio" id="answer1q3s6c7NA" name="answer87" value="0"></td>
      <td><input type="radio" id="answer1q3s6c7" name="answer87" value="1"></td>
      <td><input type="radio" id="answer2q3s6c7"  name="answer87" value="2"></td>
      <td><input type="radio" id="answer3q3s6c7"  name="answer87" value="3"></td>
      <td><input type="radio" id="answer4q3s6c7"  name="answer87" value="4"></td>
      <td><input type="radio" id="answer5q3s6c7"  name="answer87" value="5"></td>
      <td><input type="file" name="image87">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan42" cols="100" rows="3"></textarea>
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
      <td><input type="file" name="image88">
      </tr>

      <tr>
      <td>Dalam keadaan kemas dan teratur.<p id="q2s6category8"required></p></td>
      <td><input type="radio" id="answer1q2s6c8NA" name="answer89" value="0"></td>
      <td><input type="radio" id="answer1q2s6c8" name="answer89" value="1"></td>
      <td><input type="radio" id="answer2q2s6c8"  name="answer89" value="2"></td>
      <td><input type="radio" id="answer3q2s6c8"  name="answer89" value="3"></td>
      <td><input type="radio" id="answer4q2s6c8"  name="answer89" value="4"></td>
      <td><input type="radio" id="answer5q2s6c8"  name="answer89" value="5"></td>
      <td><input type="file" name="image89">
      </tr>

      <tr>
      <td>Tiada bahan yang tidak perlu di lokasi.<p id="q3s6category8"required></p></td>
      <td><input type="radio" id="answer1q3s6c8NA" name="answer90" value="0"></td>
      <td><input type="radio" id="answer1q3s6c8" name="answer90" value="1"></td>
      <td><input type="radio" id="answer2q3s6c8"  name="answer90" value="2"></td>
      <td><input type="radio" id="answer3q3s6c8"  name="answer90" value="3"></td>
      <td><input type="radio" id="answer4q3s6c8"  name="answer90" value="4"></td>
      <td><input type="radio" id="answer5q3s6c8"  name="answer90" value="5"></td>
      <td><input type="file" name="image90">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan43" cols="100" rows="3"></textarea>
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
      <td><input type="file" name="image91">
      </tr>

      <tr>
      <td>Susun atur peralatan dan item kemas dan rapi.<p id="q2s6category9"required></p></td>
      <td><input type="radio" id="answer1q2s6c9NA" name="answer92" value="0"></td>
      <td><input type="radio" id="answer1q2s6c9" name="answer92" value="1"></td>
      <td><input type="radio" id="answer2q2s6c9"  name="answer92" value="2"></td>
      <td><input type="radio" id="answer3q2s6c9"  name="answer92" value="3"></td>
      <td><input type="radio" id="answer4q2s6c9"  name="answer92" value="4"></td>
      <td><input type="radio" id="answer5q2s6c9"  name="answer92" value="5"></td>
      <td><input type="file" name="image92">
      </tr>

      <tr>
      <td>Peralatan dan bahan dalam keadaan baik dan bersih.<p id="q3s6category8"required></p></td>
      <td><input type="radio" id="answer1q3s6c9NA" name="answer93" value="0"></td>
      <td><input type="radio" id="answer1q3s6c9" name="answer93" value="1"></td>
      <td><input type="radio" id="answer2q3s6c9"  name="answer93" value="2"></td>
      <td><input type="radio" id="answer3q3s6c9"  name="answer93" value="3"></td>
      <td><input type="radio" id="answer4q3s6c9"  name="answer93" value="4"></td>
      <td><input type="radio" id="answer5q3s6c9"  name="answer93" value="5"></td>
      <td><input type="file" name="image93">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan44" cols="100" rows="3"></textarea>
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
      <td><input type="file" name="image94">
      </tr>

      <tr>
      <td>Dalam keadaan kemas dan teratur.<p id="q2s6category10"required></p></td>
      <td><input type="radio" id="answer1q2s6c10NA" name="answer95" value="0"></td>
      <td><input type="radio" id="answer1q2s6c10" name="answer95" value="1"></td>
      <td><input type="radio" id="answer2q2s6c10"  name="answer95" value="2"></td>
      <td><input type="radio" id="answer3q2s6c10"  name="answer95" value="3"></td>
      <td><input type="radio" id="answer4q2s6c10"  name="answer95" value="4"></td>
      <td><input type="radio" id="answer5q2s6c10"  name="answer95" value="5"></td>
      <td><input type="file" name="image95">
      </tr>

      <tr>
      <td>Tiada bahan yang tidak perlu di lokasi.<p id="q3s6category8"required></p></td>
      <td><input type="radio" id="answer1q3s6c10NA" name="answer96" value="0"></td>
      <td><input type="radio" id="answer1q3s6c10" name="answer96" value="1"></td>
      <td><input type="radio" id="answer2q3s6c10"  name="answer96" value="2"></td>
      <td><input type="radio" id="answer3q3s6c10"  name="answer96" value="3"></td>
      <td><input type="radio" id="answer4q3s6c10"  name="answer96" value="4"></td>
      <td><input type="radio" id="answer5q3s6c10"  name="answer96" value="5"></td>
      <td><input type="file" name="image96">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan45" cols="100" rows="3"></textarea>
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
      <td><input type="file" name="image97">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan46" cols="100" rows="3"></textarea>
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
      <td><input type="file" name="image98">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan47" cols="100" rows="3"></textarea>
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
      <td><input type="file" name="image99">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan48" cols="100" rows="3"></textarea>
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
      <td><input type="file" name="image100">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan49" cols="100" rows="3"></textarea>
    <br>
    <br>
   
</div>

<br><br><br>
  <input class="button" type="reset" name="Reset" value="Padam">
  <input class="button" type="submit" name="Submit" value="Hantar">
<br><br>
<div align="center"> Jumlah markah Seksyen 6: <?php echo $total ?>/165</div>
<br>
<br>
 <div class="mbr-section-btn text-center">
  <a class="btn btn-primary display-4" href="AuditorReport.php">SELESAI</a></div>
</form>


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