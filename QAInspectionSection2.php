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
$total = 0;

if (isset($_POST['Submit']))
{
  
  $answer4 = $_POST['answer4'];
  $answer5 = $_POST['answer5'];
  $answer6 = $_POST['answer6'];
  $answer7 = $_POST['answer7'];
  $answer8 = $_POST['answer8'];
  $answer9 = $_POST['answer9'];
  $answer10 = $_POST['answer10'];
  $answer11 = $_POST['answer11'];
  $answer12 = $_POST['answer12'];
  $answer13 = $_POST['answer13'];
  $answer14 = $_POST['answer14'];
  $answer15 = $_POST['answer15'];
  $answer16 = $_POST['answer16'];
  $answer17 = $_POST['answer17'];
  $answer18 = $_POST['answer18'];
  $answer19 = $_POST['answer19'];

  //Calculation
  $totalC1 = $answer4 + $answer5 + $answer6;
  $totalC2 = $answer7 + $answer8;
  $totalC3 = $answer9 + $answer10;
  $totalC4 = $answer11 + $answer12 + $answer13;
  $totalC5 = $answer14;
  $totalC6 = $answer15 + $answer16;
  $totalC7 = $answer17;
  $totalC8 = $answer18;
  $totalC9 = $answer19;
  $total = $totalC1 + $totalC2 + $totalC3 + $totalC4 + $totalC5 + $totalC6 + $totalC7 + $totalC8 + $totalC9;

  $sql1 = "INSERT INTO qacategory_section2 (Category1, Category2, Category3, Category4, Category5, Category6, Category7, Category8, Category9, CategorySection2_TotalMarks) VALUES ('$totalC1', '$totalC2', '$totalC3', '$totalC4', '$totalC5', '$totalC6', '$totalC7', '$totalC8', '$totalC9', '$total')";
  $result1 = mysqli_query($con,$sql1);

  if($result1)
    {    
     $sql2 = "INSERT INTO qamarks (CategorySection2_TotalMarks) VALUES ('$total')"; 

     $query2 = mysqli_query($con,$sql2);

   }
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
  
  <title>5S Audit / Seksyen 2</title>
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
                        5S AUDIT INSPECTION / SECTION 2</a></span>
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
  <h5>SEKSYEN 2: RUANG PEJABAT</h5>
  <br>
  <br>

<button type="button" style="width: 90%" class="collapsible">Kategori 1: Tempat Individu</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC1 ?>/15</div>
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
      <td>Susun atur kemas dan sistematik<p id="q1s2category1"required></p></td>
      <td><input type="radio" id="answer1q1s2c1NA" name="answer4" value="0"></td>
      <td><input type="radio" id="answer1q1s2c1" name="answer4" value="1"></td>
      <td><input type="radio" id="answer2q1s2c1"  name="answer4" value="2"></td>
      <td><input type="radio" id="answer3q1s2c1"  name="answer4" value="3"></td>
      <td><input type="radio" id="answer4q1s2c1"  name="answer4" value="4"></td>
      <td><input type="radio" id="answer5q1s2c1"  name="answer4" value="5"></td>
      <td><input type="file" name="image4">
      </tr>

      <tr>
      <td>Bersih dan tiada kotoran<p id="q2s2category1"required></p></td>
      <td><input type="radio" id="answer1q2s2c1NA" name="answer5" value="0"></td>
      <td><input type="radio" id="answer1q2s2c1" name="answer5" value="1"></td>
      <td><input type="radio" id="answer2q2s2c1"  name="answer5" value="2"></td>
      <td><input type="radio" id="answer3q2s2c1"  name="answer5" value="3"></td>
      <td><input type="radio" id="answer4q2s2c1"  name="answer5" value="4"></td>
      <td><input type="radio" id="answer5q2s2c1"  name="answer5" value="5"></td>
      <td><input type="file" name="image5">
      </tr>

      <tr>
      <td>Item dalam keadaan minima/tiada item tidak perlu<p id="q3s2category1"required></p></td>
      <td><input type="radio" id="answer1q3s2c1NA" name="answer6" value="0"></td>
      <td><input type="radio" id="answer1q3s2c1" name="answer6" value="1"></td>
      <td><input type="radio" id="answer2q3s2c1"  name="answer6" value="2"></td>
      <td><input type="radio" id="answer3q3s2c1"  name="answer6" value="3"></td>
      <td><input type="radio" id="answer4q3s2c1"  name="answer6" value="4"></td>
      <td><input type="radio" id="answer5q3s2c1"  name="answer6" value="5"></td>
      <td><input type="file" name="image6">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan4" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 2: Siling/Lantai
/Dinding
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC2 ?>/10</div>
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
      <td>Susun atur kemas dan sistematik<p id="q1s2category2"required></p></td>
      <td><input type="radio" id="answer1q1s2c2NA" name="answer7" value="0"></td>
      <td><input type="radio" id="answer1q1s2c2" name="answer7" value="1"></td>
      <td><input type="radio" id="answer2q1s2c2"  name="answer7" value="2"></td>
      <td><input type="radio" id="answer3q1s2c2"  name="answer7" value="3"></td>
      <td><input type="radio" id="answer4q1s2c2"  name="answer7" value="4"></td>
      <td><input type="radio" id="answer5q1s2c2"  name="answer7" value="5"></td>
      <td><input type="file" name="image7">
      </tr>

      <tr>
      <td>Bersih dan tiada kotoran<p id="q2s2category1"required></p></td>
      <td><input type="radio" id="answer1q2s2c2NA" name="answer8" value="0"></td>
      <td><input type="radio" id="answer1q2s2c2" name="answer8" value="1"></td>
      <td><input type="radio" id="answer2q2s2c2"  name="answer8" value="2"></td>
      <td><input type="radio" id="answer3q2s2c2"  name="answer8" value="3"></td>
      <td><input type="radio" id="answer4q2s2c2"  name="answer8" value="4"></td>
      <td><input type="radio" id="answer5q2s2c2"  name="answer8" value="5"></td>
      <td><input type="file" name="image8">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan5" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 3: Peralatan
/Perkakas
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC3 ?>/10</div>
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
      <td>Kemas dan tersimpan di tempat asal.<p id="q1s2category3"required></p></td>
      <td><input type="radio" id="answer1q1s2c3NA" name="answer9" value="0"></td>
      <td><input type="radio" id="answer1q1s2c3" name="answer9" value="1"></td>
      <td><input type="radio" id="answer2q1s2c3"  name="answer9" value="2"></td>
      <td><input type="radio" id="answer3q1s2c3"  name="answer9" value="3"></td>
      <td><input type="radio" id="answer4q1s2c3"  name="answer9" value="4"></td>
      <td><input type="radio" id="answer5q1s2c3"  name="answer9" value="5"></td>
      <td><input type="file" name="image9">
      </tr>

    <tr>
      <td>Bersih, tidak berdebu dan berfungsi baik.<p id="q2s2category3"required></p></td>
      <td><input type="radio" id="answer1q2s2c3NA" name="answer10" value="0"></td>
      <td><input type="radio" id="answer1q2s2c3" name="answer10" value="1"></td>
      <td><input type="radio" id="answer2q2s2c3"  name="answer10" value="2"></td>
      <td><input type="radio" id="answer3q2s2c3"  name="answer10" value="3"></td>
      <td><input type="radio" id="answer4q2s2c3"  name="answer10" value="4"></td>
      <td><input type="radio" id="answer5q2s2c3"  name="answer10" value="5"></td>
      <td><input type="file" name="image10">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan6" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 4: Tempat Fail/Rekod/Dokumen
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
      <td>Kedudukan fail teratur dan kemas.<p id="q1s2category4"required></p></td>
      <td><input type="radio" id="answer1q1s2c4NA" name="answer11" value="0"></td>
      <td><input type="radio" id="answer1q1s2c4" name="answer11" value="1"></td>
      <td><input type="radio" id="answer2q1s2c4"  name="answer11" value="2"></td>
      <td><input type="radio" id="answer3q1s2c4"  name="answer11" value="3"></td>
      <td><input type="radio" id="answer4q1s2c4"  name="answer11" value="4"></td>
      <td><input type="radio" id="answer5q1s2c4"  name="answer11" value="5"></td>
      <td><input type="file" name="image11">
      </tr>

    <tr>
      <td>Mudah dicari dan dikesan dengan mewujudkan pelabelan dan indeks kedudukan fail.<p id="q2s2category3"required></p></td>
      <td><input type="radio" id="answer1q2s2c4NA" name="answer12" value="0"></td>
      <td><input type="radio" id="answer1q2s2c4" name="answer12" value="1"></td>
      <td><input type="radio" id="answer2q2s2c4"  name="answer12" value="2"></td>
      <td><input type="radio" id="answer3q2s2c4"  name="answer12" value="3"></td>
      <td><input type="radio" id="answer4q2s2c4"  name="answer12" value="4"></td>
      <td><input type="radio" id="answer5q2s2c4"  name="answer12" value="5"></td>
      <td><input type="file" name="image12">
      </tr>

    <tr>
      <td>Kabinet rak fail adalah bersih dan tidak berhabuk.<p id="q3s2category3"required></p></td>
      <td><input type="radio" id="answer1q3s2c4NA" name="answer13" value="0"></td>
      <td><input type="radio" id="answer1q3s2c4" name="answer13" value="1"></td>
      <td><input type="radio" id="answer2q3s2c4"  name="answer13" value="2"></td>
      <td><input type="radio" id="answer3q3s2c4"  name="answer13" value="3"></td>
      <td><input type="radio" id="answer4q3s2c4"  name="answer13" value="4"></td>
      <td><input type="radio" id="answer5q3s2c4"  name="answer13" value="5"></td>
      <td><input type="file" name="image13">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan7" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 5: Maklumat Visual
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC5 ?>/5</div>
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
      <td>Kemas, bersih dan terkini.<p id="q1s2category5"required></p></td>
      <td><input type="radio" id="answer1q1s2c5NA" name="answer14" value="0"></td>
      <td><input type="radio" id="answer1q1s2c5" name="answer14" value="1"></td>
      <td><input type="radio" id="answer2q1s2c5"  name="answer14" value="2"></td>
      <td><input type="radio" id="answer3q1s2c5"  name="answer14" value="3"></td>
      <td><input type="radio" id="answer4q1s2c5"  name="answer14" value="4"></td>
      <td><input type="radio" id="answer5q1s2c5"  name="answer14" value="5"></td>
      <td><input type="file" name="image14">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan8" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 6: Keselamatan
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC6 ?>/10</div>
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
      <td>Aspek keselamatan diutamakan.<p id="q1s2category6"required></p></td>
      <td><input type="radio" id="answer1q1s2c6NA" name="answer15" value="0"></td>
      <td><input type="radio" id="answer1q1s2c6" name="answer15" value="1"></td>
      <td><input type="radio" id="answer2q1s2c6"  name="answer15" value="2"></td>
      <td><input type="radio" id="answer3q1s2c6"  name="answer15" value="3"></td>
      <td><input type="radio" id="answer4q1s2c6"  name="answer15" value="4"></td>
      <td><input type="radio" id="answer5q1s2c6"  name="answer15" value="5"></td>
      <td><input type="file" name="image15">
      </tr>

    <tr>
      <td>Kawalan visual dan ciri keselamatan mencukupi.<p id="q2s2category6"required></p></td>
      <td><input type="radio" id="answer1q2s2c6NA" name="answer16" value="0"></td>
      <td><input type="radio" id="answer1q2s2c6" name="answer16" value="1"></td>
      <td><input type="radio" id="answer2q2s2c6"  name="answer16" value="2"></td>
      <td><input type="radio" id="answer3q2s2c6"  name="answer16" value="3"></td>
      <td><input type="radio" id="answer4q2s2c6"  name="answer16" value="4"></td>
      <td><input type="radio" id="answer5q2s2c6"  name="answer16" value="5"></td>
      <td><input type="file" name="image16">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan9" cols="100" rows="3"></textarea>
    <br>
    <br>
   
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 7: Seragam
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC7 ?>/5</div>
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
      <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”.<p id="q1s2category7"required></p></td>
      <td><input type="radio" id="answer1q1s2c7NA" name="answer17" value="0"></td>
      <td><input type="radio" id="answer1q1s2c7" name="answer17" value="1"></td>
      <td><input type="radio" id="answer2q1s2c7"  name="answer17" value="2"></td>
      <td><input type="radio" id="answer3q1s2c7"  name="answer17" value="3"></td>
      <td><input type="radio" id="answer4q1s2c7"  name="answer17" value="4"></td>
      <td><input type="radio" id="answer5q1s2c7"  name="answer17" value="5"></td>
      <td><input type="file" name="image17">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan10" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 8: Sentiasa Amal
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC8 ?>/5</div>
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
      <td>Kerjasama dan sikap positif untuk amalan berterusan.<p id="q1s2category8"required></p></td>
      <td><input type="radio" id="answer1q1s2c8NA" name="answer18" value="0"></td>
      <td><input type="radio" id="answer1q1s2c8" name="answer18" value="1"></td>
      <td><input type="radio" id="answer2q1s2c8"  name="answer18" value="2"></td>
      <td><input type="radio" id="answer3q1s2c8"  name="answer18" value="3"></td>
      <td><input type="radio" id="answer4q1s2c8"  name="answer18" value="4"></td>
      <td><input type="radio" id="answer5q1s2c8"  name="answer18" value="5"></td>
      <td><input type="file" name="image18">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan11" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 9: Impak
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC5 ?>/5</div>
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
      <td>Kerjasama dan sikap positif untuk amalan berterusan.<p id="q1s2category9"required></p></td>
      <td><input type="radio" id="answer1q1s2c9NA" name="answer19" value="0"></td>
      <td><input type="radio" id="answer1q1s2c9" name="answer19" value="1"></td>
      <td><input type="radio" id="answer2q1s2c9"  name="answer19" value="2"></td>
      <td><input type="radio" id="answer3q1s2c9"  name="answer19" value="3"></td>
      <td><input type="radio" id="answer4q1s2c9"  name="answer19" value="4"></td>
      <td><input type="radio" id="answer5q1s2c9"  name="answer19" value="5"></td>
      <td><input type="file" name="image19">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan12" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>

<br><br><br>
  <input type="Submit" name="Submit" value="Submit">
<br><br>
</form>
<div align="center"> Jumlah markah Seksyen 2: <?php echo $total ?> /80</div>
<br>
<br>
<div class="mbr-section-btn text-center"><a class="btn btn-primary display-4" href="QAInspectionSection3.php">SEKSYEN 3</a></div>

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