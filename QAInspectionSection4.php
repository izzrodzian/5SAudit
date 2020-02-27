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
  
  $answer33 = $_POST['answer33'];
  $answer34 = $_POST['answer34'];
  $answer35 = $_POST['answer35'];
  $answer36 = $_POST['answer36'];
  $answer37 = $_POST['answer37'];
  $answer38 = $_POST['answer38'];
  $answer39 = $_POST['answer39'];
  $answer40 = $_POST['answer40'];
  $answer41 = $_POST['answer41'];
  $answer42 = $_POST['answer42'];
  $answer43 = $_POST['answer43'];
  $answer44 = $_POST['answer44'];
  $answer45 = $_POST['answer45'];
  $answer46 = $_POST['answer46'];
  $answer47 = $_POST['answer47'];
  $answer48 = $_POST['answer48'];
  $answer49 = $_POST['answer49'];
  $answer50 = $_POST['answer50'];

  //Calculation
  $totalC1 = $answer33 + $answer34 + $answer35;
  $totalC2 = $answer36 + $answer37 + $answer38 + $answer39 + $answer40 + $answer41;
  $totalC3 = $answer42 + $answer43;
  $totalC4 = $answer44 + $answer45;
  $totalC5 = $answer46;
  $totalC6 = $answer47;
  $totalC7 = $answer48;
  $totalC8 = $answer49;
  $totalC9 = $answer50;
  $total = $totalC1 + $totalC2 + $totalC3 + $totalC4 + $totalC5 + $totalC6 + $totalC7 + $totalC8 + $totalC9;

  $sql1 = "INSERT INTO qacategory_section4 (Category1, Category2, Category3, Category4, Category5, Category6, Category7, Category8, Category9, CategorySection4_TotalMarks) VALUES ('$totalC1', '$totalC2', '$totalC3', '$totalC4', '$totalC5', '$totalC6', '$totalC7', '$totalC8', '$totalC9', '$total')";
  $result1 = mysqli_query($con,$sql1);

  if($result1)
    {    
     $sql2 = "INSERT INTO qamarks (CategorySection4_TotalMarks) VALUES ('$total')"; 

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
  
  <title>5S Audit / Seksyen 4</title>
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
                        5S AUDIT INSPECTION / SECTION 4</a></span>
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
  <h5>SEKSYEN 4: OPERASI <br> (BENGKEL PENYELENGGARAAN AM,  PAM MINYAK, “WASHING BAY”, BILIK KAWALAN, BILIK KIRAAN & SEBAGAINYA)</h5>
  <br>
  <br>

<button type="button" style="width: 90%" class="collapsible">Kategori 1: Lantai/Dinding</button>
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
      <td>Lantai bersih, kemas dan tidak licin.<p id="q1s4category1"required></p></td>
      <td><input type="radio" id="answer1q1s4c1NA" name="answer33" value="0"></td>
      <td><input type="radio" id="answer1q1s4c1" name="answer33" value="1"></td>
      <td><input type="radio" id="answer2q1s4c1"  name="answer33" value="2"></td>
      <td><input type="radio" id="answer3q1s4c1"  name="answer33" value="3"></td>
      <td><input type="radio" id="answer4q1s4c1"  name="answer33" value="4"></td>
      <td><input type="radio" id="answer5q1s4c1"  name="answer33" value="5"></td>
      <td><input type="file" name="image33">
      </tr>

      <tr>
      <td>Keadaan kemas dan rapi<p id="q2s2category1"required></p></td>
      <td><input type="radio" id="answer1q2s4c1NA" name="answer34" value="0"></td>
      <td><input type="radio" id="answer1q2s4c1" name="answer34" value="1"></td>
      <td><input type="radio" id="answer2q2s4c1"  name="answer34" value="2"></td>
      <td><input type="radio" id="answer3q2s4c1"  name="answer34" value="3"></td>
      <td><input type="radio" id="answer4q2s4c1"  name="answer34" value="4"></td>
      <td><input type="radio" id="answer5q2s4c1"  name="answer34" value="5"></td>
      <td><input type="file" name="image34">
      </tr>

      <tr>
      <td>Tiada barang yang tidak diperlukan.<p id="q3s2category1"required></p></td>
      <td><input type="radio" id="answer1q3s4c1NA" name="answer35" value="0"></td>
      <td><input type="radio" id="answer1q3s4c1" name="answer35" value="1"></td>
      <td><input type="radio" id="answer2q3s4c1"  name="answer35" value="2"></td>
      <td><input type="radio" id="answer3q3s4c1"  name="answer35" value="3"></td>
      <td><input type="radio" id="answer4q3s4c1"  name="answer35" value="4"></td>
      <td><input type="radio" id="answer5q3s4c1"  name="answer35" value="5"></td>
      <td><input type="file" name="image35">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan18" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 2: Peralatan dan Mesin
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC2 ?>/30</div>
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
      <td>Susun atur kemas dan rapi.<p id="q1s4category2"required></p></td>
      <td><input type="radio" id="answer1q1s4c2NA" name="answer36" value="0"></td>
      <td><input type="radio" id="answer1q1s4c2" name="answer36" value="1"></td>
      <td><input type="radio" id="answer2q1s4c2"  name="answer36" value="2"></td>
      <td><input type="radio" id="answer3q1s4c2"  name="answer36" value="3"></td>
      <td><input type="radio" id="answer4q1s4c2"  name="answer36" value="4"></td>
      <td><input type="radio" id="answer5q1s4c2"  name="answer36" value="5"></td>
      <td><input type="file" name="image36">
      </tr>

      <tr>
      <td>Mesin dan peralatan adalah bersih.<p id="q2s4category1"required></p></td>
      <td><input type="radio" id="answer1q2s4c2NA" name="answer37" value="0"></td>
      <td><input type="radio" id="answer1q2s4c2" name="answer37" value="1"></td>
      <td><input type="radio" id="answer2q2s4c2"  name="answer37" value="2"></td>
      <td><input type="radio" id="answer3q2s4c2"  name="answer37" value="3"></td>
      <td><input type="radio" id="answer4q2s4c2"  name="answer37" value="4"></td>
      <td><input type="radio" id="answer5q2s4c2"  name="answer37" value="5"></td>
      <td><input type="file" name="image37">
      </tr>

      <tr>
      <td>Tiada barang yang tidak diperlukan berada di lokasi mesin.<p id="q3s4category2"required></p></td>
      <td><input type="radio" id="answer1q3s4c2NA" name="answer38" value="0"></td>
      <td><input type="radio" id="answer1q3s4c2" name="answer38" value="1"></td>
      <td><input type="radio" id="answer2q3s4c2"  name="answer38" value="2"></td>
      <td><input type="radio" id="answer3q3s4c2"  name="answer38" value="3"></td>
      <td><input type="radio" id="answer4q3s4c2"  name="answer38" value="4"></td>
      <td><input type="radio" id="answer5q3s4c2"  name="answer38" value="5"></td>
      <td><input type="file" name="image38">
      </tr>

      <tr>
      <td>Berkeadaan baik serta aktiviti penyelenggaraan mesin.<p id="q4s4category2"required></p></td>
      <td><input type="radio" id="answer1q4s4c2NA" name="answer39" value="0"></td>
      <td><input type="radio" id="answer1q4s4c2" name="answer39" value="1"></td>
      <td><input type="radio" id="answer2q4s4c2"  name="answer39" value="2"></td>
      <td><input type="radio" id="answer3q4s4c2"  name="answer39" value="3"></td>
      <td><input type="radio" id="answer4q4s4c2"  name="answer39" value="4"></td>
      <td><input type="radio" id="answer5q4s4c2"  name="answer39" value="5"></td>
      <td><input type="file" name="image39">
      </tr>

      <tr>
      <td>Penggunaan “Manual”, “Visual Control” sebagai panduan.<p id="q5s4category2"required></p></td>
      <td><input type="radio" id="answer1q5s4c2NA" name="answer40" value="0"></td>
      <td><input type="radio" id="answer1q5s4c2" name="answer40" value="1"></td>
      <td><input type="radio" id="answer2q5s4c2"  name="answer40" value="2"></td>
      <td><input type="radio" id="answer3q5s4c2"  name="answer40" value="3"></td>
      <td><input type="radio" id="answer4q5s4c2"  name="answer40" value="4"></td>
      <td><input type="radio" id="answer5q5s4c2"  name="answer40" value="5"></td>
      <td><input type="file" name="image40">
      </tr>

      <tr>
      <td>Rekod penggunaan peralatan dan lain-lain.<p id="q6s4category2"required></p></td>
      <td><input type="radio" id="answer1q6s4c2NA" name="answer41" value="0"></td>
      <td><input type="radio" id="answer1q6s4c2" name="answer41" value="1"></td>
      <td><input type="radio" id="answer2q6s4c2"  name="answer41" value="2"></td>
      <td><input type="radio" id="answer3q6s4c2"  name="answer41" value="3"></td>
      <td><input type="radio" id="answer4q6s4c2"  name="answer41" value="4"></td>
      <td><input type="radio" id="answer5q6s4c2"  name="answer41" value="5"></td>
      <td><input type="file" name="image41">
      </tr>

    </table>
    Catatan:<br>
    <textarea name="catatan19" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 3: Bahan
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
      <td>Dalam keadaan kemas dan teratur.<p id="q1s4category3"required></p></td>
      <td><input type="radio" id="answer1q1s4c3NA" name="answer42" value="0"></td>
      <td><input type="radio" id="answer1q1s4c3" name="answer42" value="1"></td>
      <td><input type="radio" id="answer2q1s4c3"  name="answer42" value="2"></td>
      <td><input type="radio" id="answer3q1s4c3"  name="answer42" value="3"></td>
      <td><input type="radio" id="answer4q1s4c3"  name="answer42" value="4"></td>
      <td><input type="radio" id="answer5q1s4c3"  name="answer42" value="5"></td>
      <td><input type="file" name="image42">
      </tr>

    <tr>
      <td>Tanda label untuk mudah kesan.<p id="q2s4category3"required></p></td>
      <td><input type="radio" id="answer1q2s4c3NA" name="answer43" value="0"></td>
      <td><input type="radio" id="answer1q2s4c3" name="answer43" value="1"></td>
      <td><input type="radio" id="answer2q2s4c3"  name="answer43" value="2"></td>
      <td><input type="radio" id="answer3q2s4c3"  name="answer43" value="3"></td>
      <td><input type="radio" id="answer4q2s4c3"  name="answer43" value="4"></td>
      <td><input type="radio" id="answer5q2s4c3"  name="answer43" value="5"></td>
      <td><input type="file" name="image43">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan20" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 4: Tempat Rekod/Dokumen
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC4 ?>/10</div>
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
      <td>Kemas dan sistematik.<p id="q1s4category4"required></p></td>
      <td><input type="radio" id="answer1q1s4c4NA" name="answer44" value="0"></td>
      <td><input type="radio" id="answer1q1s4c4" name="answer44" value="1"></td>
      <td><input type="radio" id="answer2q1s4c4"  name="answer44" value="2"></td>
      <td><input type="radio" id="answer3q1s4c4"  name="answer44" value="3"></td>
      <td><input type="radio" id="answer4q1s4c4"  name="answer44" value="4"></td>
      <td><input type="radio" id="answer5q1s4c4"  name="answer44" value="5"></td>
      <td><input type="file" name="image44">
      </tr>

    <tr>
      <td>Bersih dan item masih diperlukan.<p id="q2s4category3"required></p></td>
      <td><input type="radio" id="answer1q2s4c4NA" name="answer45" value="0"></td>
      <td><input type="radio" id="answer1q2s4c4" name="answer45" value="1"></td>
      <td><input type="radio" id="answer2q2s4c4"  name="answer45" value="2"></td>
      <td><input type="radio" id="answer3q2s4c4"  name="answer45" value="3"></td>
      <td><input type="radio" id="answer4q2s4c4"  name="answer45" value="4"></td>
      <td><input type="radio" id="answer5q2s4c4"  name="answer45" value="5"></td>
      <td><input type="file" name="image45">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan21" cols="100" rows="3"></textarea>
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
      <td>Bersih, kemas dan maklumat sentiasa kemaskini.<p id="q1s4category5"required></p></td>
      <td><input type="radio" id="answer1q1s4c5NA" name="answer46" value="0"></td>
      <td><input type="radio" id="answer1q1s4c5" name="answer46" value="1"></td>
      <td><input type="radio" id="answer2q1s4c5"  name="answer46" value="2"></td>
      <td><input type="radio" id="answer3q1s4c5"  name="answer46" value="3"></td>
      <td><input type="radio" id="answer4q1s4c5"  name="answer46" value="4"></td>
      <td><input type="radio" id="answer5q1s4c5"  name="answer46" value="5"></td>
      <td><input type="file" name="image46">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan22" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 6: Keselamatan
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC6 ?>/5</div>
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
      <td>Aspek keselamatan diutamakan.<p id="q1s4category6"required></p></td>
      <td><input type="radio" id="answer1q1s4c6NA" name="answer47" value="0"></td>
      <td><input type="radio" id="answer1q1s4c6" name="answer47" value="1"></td>
      <td><input type="radio" id="answer2q1s4c6"  name="answer47" value="2"></td>
      <td><input type="radio" id="answer3q1s4c6"  name="answer47" value="3"></td>
      <td><input type="radio" id="answer4q1s4c6"  name="answer47" value="4"></td>
      <td><input type="radio" id="answer5q1s4c6"  name="answer47" value="5"></td>
      <td><input type="file" name="image47">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan23" cols="100" rows="3"></textarea>
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
      <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”.<p id="q1s4category7"required></p></td>
      <td><input type="radio" id="answer1q1s4c7NA" name="answer48" value="0"></td>
      <td><input type="radio" id="answer1q1s4c7" name="answer48" value="1"></td>
      <td><input type="radio" id="answer2q1s4c7"  name="answer48" value="2"></td>
      <td><input type="radio" id="answer3q1s4c7"  name="answer48" value="3"></td>
      <td><input type="radio" id="answer4q1s4c7"  name="answer48" value="4"></td>
      <td><input type="radio" id="answer5q1s4c7"  name="answer48" value="5"></td>
      <td><input type="file" name="image48">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan24" cols="100" rows="3"></textarea>
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
      <td>Kerjasama dan sikap positif untuk amalan berterusan.<p id="q1s4category8"required></p></td>
      <td><input type="radio" id="answer1q1s4c8NA" name="answer49" value="0"></td>
      <td><input type="radio" id="answer1q1s4c8" name="answer49" value="1"></td>
      <td><input type="radio" id="answer2q1s4c8"  name="answer49" value="2"></td>
      <td><input type="radio" id="answer3q1s4c8"  name="answer49" value="3"></td>
      <td><input type="radio" id="answer4q1s4c8"  name="answer49" value="4"></td>
      <td><input type="radio" id="answer5q1s4c8"  name="answer49" value="5"></td>
      <td><input type="file" name="image49">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan25" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 9: Impak
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC9 ?>/5</div>
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
      <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos/Keselamatan/Moral/Inovasi)<p id="q1s4category9"required></p></td>
      <td><input type="radio" id="answer1q1s4c9NA" name="answer50" value="0"></td>
      <td><input type="radio" id="answer1q1s4c9" name="answer50" value="1"></td>
      <td><input type="radio" id="answer2q1s4c9"  name="answer50" value="2"></td>
      <td><input type="radio" id="answer3q1s4c9"  name="answer50" value="3"></td>
      <td><input type="radio" id="answer4q1s4c9"  name="answer50" value="4"></td>
      <td><input type="radio" id="answer5q1s4c9"  name="answer50" value="5"></td>
      <td><input type="file" name="image50">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan26" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>

<br><br><br>
  <input type="Submit" name="Submit" value="Submit">
<br><br>
</form>
<div align="center"> Jumlah markah Seksyen 4: <?php echo $total ?>/90</div>
<br>
<br>
<div class="mbr-section-btn text-center"><a class="btn btn-primary display-4" href="QAInspectionSection5.php">SEKSYEN 5</a></div>

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