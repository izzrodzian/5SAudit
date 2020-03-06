<!DOCTYPE html>

<?php  

session_start();

$con = mysqli_connect('127.0.0.1','root','') or die ('Not connected.');
mysqli_select_db($con,'5s') or die ('No database found.');

$answer51 = 0;
$answer52 = 0;
$answer53 = 0;
$answer54 = 0;
$answer55 = 0;
$answer56 = 0;
$answer57 = 0;
$answer58 = 0;
$answer59 = 0;
$answer60 = 0;
$answer61 = 0;
$answer62 = 0;
$answer63 = 0;
$answer64 = 0;
$answer65 = 0;
$answer66 = 0;
$answer67 = 0;
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
  
  $answer51 = $_POST['answer51'];
  $answer52 = $_POST['answer52'];
  $answer53 = $_POST['answer53'];
  $answer54 = $_POST['answer54'];
  $answer55 = $_POST['answer55'];
  $answer56 = $_POST['answer56'];
  $answer57 = $_POST['answer57'];
  $answer58 = $_POST['answer58'];
  $answer59 = $_POST['answer59'];
  $answer60 = $_POST['answer60'];
  $answer61 = $_POST['answer61'];
  $answer62 = $_POST['answer62'];
  $answer63 = $_POST['answer63'];
  $answer64 = $_POST['answer64'];
  $answer65 = $_POST['answer65'];
  $answer66 = $_POST['answer66'];
  $answer67 = $_POST['answer67'];

  $catatan27 = $_POST['catatan27'];
  $catatan28 = $_POST['catatan28'];
  $catatan29 = $_POST['catatan29'];
  $catatan30 = $_POST['catatan30'];
  $catatan31 = $_POST['catatan31'];
  $catatan32 = $_POST['catatan32'];
  $catatan33 = $_POST['catatan33'];
  $catatan34 = $_POST['catatan34'];
  $catatan35 = $_POST['catatan35'];

  //Calculation
  $totalC1 = $answer51 + $answer52 + $answer53;
  $totalC2 = $answer54 + $answer55;
  $totalC3 = $answer56 + $answer57;
  $totalC4 = $answer58 + $answer59 + $answer60;
  $totalC5 = $answer61 + $answer62 + $answer63;
  $totalC6 = $answer64;
  $totalC7 = $answer65;
  $totalC8 = $answer66;
  $totalC9 = $answer67;
  $total = $totalC1 + $totalC2 + $totalC3 + $totalC4 + $totalC5 + $totalC6 + $totalC7 + $totalC8 + $totalC9;


   //declare images variable
  $filename51 = $_FILES['image51']['name'];
  $filetmpname51 = $_FILES['image51']['tmp_name'];

  $filename52 = $_FILES['image52']['name'];
  $filetmpname52 = $_FILES['image52']['tmp_name'];

  $filename53 = $_FILES['image53']['name'];
  $filetmpname53 = $_FILES['image53']['tmp_name'];

  $filename54 = $_FILES['image54']['name'];
  $filetmpname54 = $_FILES['image54']['tmp_name'];

  $filename55 = $_FILES['image55']['name'];
  $filetmpname55 = $_FILES['image55']['tmp_name'];

  $filename56 = $_FILES['image56']['name'];
  $filetmpname56 = $_FILES['image56']['tmp_name'];

  $filename57 = $_FILES['image57']['name'];
  $filetmpname57 = $_FILES['image57']['tmp_name'];

  $filename58 = $_FILES['image58']['name'];
  $filetmpname58 = $_FILES['image58']['tmp_name'];

  $filename59 = $_FILES['image59']['name'];
  $filetmpname59 = $_FILES['image59']['tmp_name'];

  $filename60 = $_FILES['image60']['name'];
  $filetmpname60 = $_FILES['image60']['tmp_name'];

  $filename61 = $_FILES['image61']['name'];
  $filetmpname61 = $_FILES['image61']['tmp_name'];

  $filename62 = $_FILES['image62']['name'];
  $filetmpname62 = $_FILES['image62']['tmp_name'];

  $filename63 = $_FILES['image63']['name'];
  $filetmpname63 = $_FILES['image63']['tmp_name'];

  $filename64 = $_FILES['image64']['name'];
  $filetmpname64 = $_FILES['image64']['tmp_name'];

  $filename65 = $_FILES['image65']['name'];
  $filetmpname65 = $_FILES['image65']['tmp_name'];

  $filename66 = $_FILES['image66']['name'];
  $filetmpname66 = $_FILES['image66']['tmp_name'];

  $filename67 = $_FILES['image67']['name'];
  $filetmpname67 = $_FILES['image67']['tmp_name'];

  //folder where images will be uploaded
  $folder = 'imagesuploaded/';

  //function for saving the uploaded images in a specific folder
  move_uploaded_file($filetmpname51, $folder.$filename51);
  move_uploaded_file($filetmpname52, $folder.$filename52);
  move_uploaded_file($filetmpname53, $folder.$filename53);
  move_uploaded_file($filetmpname54, $folder.$filename54);
  move_uploaded_file($filetmpname55, $folder.$filename55);
  move_uploaded_file($filetmpname56, $folder.$filename56);
  move_uploaded_file($filetmpname57, $folder.$filename57);
  move_uploaded_file($filetmpname58, $folder.$filename58);
  move_uploaded_file($filetmpname59, $folder.$filename59);
  move_uploaded_file($filetmpname60, $folder.$filename60);
  move_uploaded_file($filetmpname61, $folder.$filename61);
  move_uploaded_file($filetmpname62, $folder.$filename62);
  move_uploaded_file($filetmpname63, $folder.$filename63);
  move_uploaded_file($filetmpname64, $folder.$filename64);
  move_uploaded_file($filetmpname65, $folder.$filename65);
  move_uploaded_file($filetmpname66, $folder.$filename66);
  move_uploaded_file($filetmpname67, $folder.$filename67);

  $sql1 = "INSERT INTO qacategory_section5 (Answer51, Answer52, Answer53, Answer54, Answer55, Answer56, Answer57, Answer58, Answer59, Answer60, Answer61, Answer62, Answer63, Answer64, Answer65, Answer66, Answer67, Category1, Category2, Category3, Category4, Category5, Category6, Category7, Category8, Category9, CategorySection5_TotalMarks,  Image51, Image52, Image53, Image54, Image55, Image56, Image57, Image58, Image59, Image60, Image61, Image62, Image63, Image64, Image65, Image66, Image67, Catatan27, Catatan28, Catatan29, Catatan30, Catatan31, Catatan32, Catatan33, Catatan34, Catatan35) VALUES ('$answer51','$answer52', '$answer53', '$answer54', '$answer55', '$answer56', '$answer57', '$answer58', '$answer59', '$answer60', '$answer61', '$answer62', '$answer63', '$answer64', '$answer65', '$answer66', '$answer67', '$totalC1', '$totalC2', '$totalC3', '$totalC4', '$totalC5', '$totalC6', '$totalC7', '$totalC8', '$totalC9', '$total', '$filename51', '$filename52', '$filename53', '$filename54', '$filename55', '$filename56', '$filename57', '$filename58', '$filename59', '$filename60', '$filename61', '$filename62', '$filename63', '$filename64', '$filename65', '$filename66', '$filename67', '$catatan27', '$catatan28', '$catatan29', '$catatan30', '$catatan31', '$catatan32', '$catatan33', '$catatan34', '$catatan35')";
  $result1 = mysqli_query($con,$sql1);

  if($result1)
    {    
     $sql2 = "INSERT INTO qamarks (CategorySection5_TotalMarks) VALUES ('$total')"; 

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
  
  <title>5S Audit / Seksyen 5</title>
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
                        5S AUDIT INSPECTION / SECTION 5</a></span>
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
  <h5>SEKSYEN 5: KAWASAN PERSEKITARAN LUARAN</h5>
  <br>
  <br>

<button type="button" style="width: 90%" class="collapsible">Kategori 1: Pos Keselamatan</button>
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
      <td>Kawasan bersih dan tiada item tidak perlu.<p id="q1s5category1"required></p></td>
      <td><input type="radio" id="answer1q1s5c1NA" name="answer51" value="0"></td>
      <td><input type="radio" id="answer1q1s5c1" name="answer51" value="1"></td>
      <td><input type="radio" id="answer2q1s5c1"  name="answer51" value="2"></td>
      <td><input type="radio" id="answer3q1s5c1"  name="answer51" value="3"></td>
      <td><input type="radio" id="answer4q1s5c1"  name="answer51" value="4"></td>
      <td><input type="radio" id="answer5q1s5c1"  name="answer51" value="5"></td>
      <td><input type="file" name="image51">
      </tr>

      <tr>
      <td>Kekemasan selesa dan memuaskan.<p id="q2s5category1"required></p></td>
      <td><input type="radio" id="answer1q2s5c1NA" name="answer52" value="0"></td>
      <td><input type="radio" id="answer1q2s5c1" name="answer52" value="1"></td>
      <td><input type="radio" id="answer2q2s5c1"  name="answer52" value="2"></td>
      <td><input type="radio" id="answer3q2s5c1"  name="answer52" value="3"></td>
      <td><input type="radio" id="answer4q2s5c1"  name="answer52" value="4"></td>
      <td><input type="radio" id="answer5q2s5c1"  name="answer52" value="5"></td>
      <td><input type="file" name="image52">
      </tr>

      <tr>
      <td>Aspek keselamatan (kawalan) diutamakan.<p id="q3s5category1"required></p></td>
      <td><input type="radio" id="answer1q3s5c1NA" name="answer53" value="0"></td>
      <td><input type="radio" id="answer1q3s5c1" name="answer53" value="1"></td>
      <td><input type="radio" id="answer2q3s5c1"  name="answer53" value="2"></td>
      <td><input type="radio" id="answer3q3s5c1"  name="answer53" value="3"></td>
      <td><input type="radio" id="answer4q3s5c1"  name="answer53" value="4"></td>
      <td><input type="radio" id="answer5q3s5c1"  name="answer53" value="5"></td>
      <td><input type="file" name="image53">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan27" cols="100" rows="3"></textarea>
    <br>
    <br>
   
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 2: Landskap
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
      <td>Kawasan bersih dan tiada item tidak perlu.<p id="q1s5category2"required></p></td>
      <td><input type="radio" id="answer1q1s5c2NA" name="answer54" value="0"></td>
      <td><input type="radio" id="answer1q1s5c2" name="answer54" value="1"></td>
      <td><input type="radio" id="answer2q1s5c2"  name="answer54" value="2"></td>
      <td><input type="radio" id="answer3q1s5c2"  name="answer54" value="3"></td>
      <td><input type="radio" id="answer4q1s5c2"  name="answer54" value="4"></td>
      <td><input type="radio" id="answer5q1s5c2"  name="answer54" value="5"></td>
      <td><input type="file" name="image54">
      </tr>

      <tr>
      <td>Sentiasa terjaga dan kekemasan memuaskan.<p id="q2s5category2"required></p></td>
      <td><input type="radio" id="answer1q2s5c2NA" name="answer55" value="0"></td>
      <td><input type="radio" id="answer1q2s5c2" name="answer55" value="1"></td>
      <td><input type="radio" id="answer2q2s5c2"  name="answer55" value="2"></td>
      <td><input type="radio" id="answer3q2s5c2"  name="answer55" value="3"></td>
      <td><input type="radio" id="answer4q2s5c2"  name="answer55" value="4"></td>
      <td><input type="radio" id="answer5q2s5c2"  name="answer55" value="5"></td>
      <td><input type="file" name="image55">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan28" cols="100" rows="3"></textarea>
    <br>
    <br>
   
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 3: Tempat Pelupusan, Longkang, Kawasan Sisa berjadual
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
      <td>Mempunyai tempat pembuangan sisa yang memuaskan mengikut keperluan undang-undang. <p id="q1s5category3"required></p></td>
      <td><input type="radio" id="answer1q1s5c3NA" name="answer56" value="0"></td>
      <td><input type="radio" id="answer1q1s5c3" name="answer56" value="1"></td>
      <td><input type="radio" id="answer2q1s5c3"  name="answer56" value="2"></td>
      <td><input type="radio" id="answer3q1s5c3"  name="answer56" value="3"></td>
      <td><input type="radio" id="answer4q1s5c3"  name="answer56" value="4"></td>
      <td><input type="radio" id="answer5q1s5c3"  name="answer56" value="5"></td>
      <td><input type="file" name="image56">
      </tr>

    <tr>
      <td>Sentiasa bersih, kemas dan terjaga.<p id="q2s5category3"required></p></td>
      <td><input type="radio" id="answer1q2s5c3NA" name="answer57" value="0"></td>
      <td><input type="radio" id="answer1q2s5c3" name="answer57" value="1"></td>
      <td><input type="radio" id="answer2q2s5c3"  name="answer57" value="2"></td>
      <td><input type="radio" id="answer3q2s5c3"  name="answer57" value="3"></td>
      <td><input type="radio" id="answer4q2s5c3"  name="answer57" value="4"></td>
      <td><input type="radio" id="answer5q2s5c3"  name="answer57" value="5"></td>
      <td><input type="file" name="image57">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan29" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 4: Papan Tanda, Pandu Arah
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
      <td>Kedudukan yang strategik dan berfungsi dengan baik.<p id="q1s5category4"required></p></td>
      <td><input type="radio" id="answer1q1s5c4NA" name="answer58" value="0"></td>
      <td><input type="radio" id="answer1q1s5c4" name="answer58" value="1"></td>
      <td><input type="radio" id="answer2q1s5c4"  name="answer58" value="2"></td>
      <td><input type="radio" id="answer3q1s5c4"  name="answer58" value="3"></td>
      <td><input type="radio" id="answer4q1s5c4"  name="answer58" value="4"></td>
      <td><input type="radio" id="answer5q1s5c4"  name="answer58" value="5"></td>
      <td><input type="file" name="image58">
      </tr>

    <tr>
      <td>Saiz yang sesuai, mudah difahami dan mudah dilihat.<p id="q2s5category3"required></p></td>
      <td><input type="radio" id="answer1q2s5c4NA" name="answer59" value="0"></td>
      <td><input type="radio" id="answer1q2s5c4" name="answer59" value="1"></td>
      <td><input type="radio" id="answer2q2s5c4"  name="answer59" value="2"></td>
      <td><input type="radio" id="answer3q2s5c4"  name="answer59" value="3"></td>
      <td><input type="radio" id="answer4q2s5c4"  name="answer59" value="4"></td>
      <td><input type="radio" id="answer5q2s5c4"  name="answer59" value="5"></td>
      <td><input type="file" name="image59">
      </tr>

      <tr>
      <td>Wujud pandu arah dan garisan lot parkir yang jelas.<p id="q3s5category3"required></p></td>
      <td><input type="radio" id="answer1q3s5c4NA" name="answer60" value="0"></td>
      <td><input type="radio" id="answer1q3s5c4" name="answer60" value="1"></td>
      <td><input type="radio" id="answer2q3s5c4"  name="answer60" value="2"></td>
      <td><input type="radio" id="answer3q3s5c4"  name="answer60" value="3"></td>
      <td><input type="radio" id="answer4q3s5c4"  name="answer60" value="4"></td>
      <td><input type="radio" id="answer5q3s5c4"  name="answer60" value="5"></td>
      <td><input type="file" name="image60">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan30" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 5: Kawasan Parkir
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
      <td>Kawasan yang bersih dan teratur.<p id="q1s5category5"required></p></td>
      <td><input type="radio" id="answer1q1s5c5NA" name="answer61" value="0"></td>
      <td><input type="radio" id="answer1q1s5c5" name="answer61" value="1"></td>
      <td><input type="radio" id="answer2q1s5c5"  name="answer61" value="2"></td>
      <td><input type="radio" id="answer3q1s5c5"  name="answer61" value="3"></td>
      <td><input type="radio" id="answer4q1s5c5"  name="answer61" value="4"></td>
      <td><input type="radio" id="answer5q1s5c5"  name="answer61" value="5"></td>
      <td><input type="file" name="image61">
      </tr>

      <tr>
      <td>Landskap jika ada, tidak mengganggu dan sentiasa dalam keadaan kemas dan selesa untuk pengguna.<p id="q2s5category5"required></p></td>
      <td><input type="radio" id="answer1q2s5c5NA" name="answer62" value="0"></td>
      <td><input type="radio" id="answer1q2s5c5" name="answer62" value="1"></td>
      <td><input type="radio" id="answer2q2s5c5"  name="answer62" value="2"></td>
      <td><input type="radio" id="answer3q2s5c5"  name="answer62" value="3"></td>
      <td><input type="radio" id="answer4q2s5c5"  name="answer62" value="4"></td>
      <td><input type="radio" id="answer5q2s5c5"  name="answer62" value="5"></td>
      <td><input type="file" name="image62">
      </tr>

      <tr>
      <td>Tiada bahan/barang yang tidak perlu di lokasi.<p id="q3s5category5"required></p></td>
      <td><input type="radio" id="answer1q3s5c5NA" name="answer63" value="0"></td>
      <td><input type="radio" id="answer1q3s5c5" name="answer63" value="1"></td>
      <td><input type="radio" id="answer2q3s5c5"  name="answer63" value="2"></td>
      <td><input type="radio" id="answer3q3s5c5"  name="answer63" value="3"></td>
      <td><input type="radio" id="answer4q3s5c5"  name="answer63" value="4"></td>
      <td><input type="radio" id="answer5q3s5c5"  name="answer63" value="5"></td>
      <td><input type="file" name="image63">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan31" cols="100" rows="3"></textarea>
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
      <td>Aspek keselamatan diutamakan.<p id="q1s5category6"required></p></td>
      <td><input type="radio" id="answer1q1s5c6NA" name="answer64" value="0"></td>
      <td><input type="radio" id="answer1q1s5c6" name="answer64" value="1"></td>
      <td><input type="radio" id="answer2q1s5c6"  name="answer64" value="2"></td>
      <td><input type="radio" id="answer3q1s5c6"  name="answer64" value="3"></td>
      <td><input type="radio" id="answer4q1s5c6"  name="answer64" value="4"></td>
      <td><input type="radio" id="answer5q1s5c6"  name="answer64" value="5"></td>
      <td><input type="file" name="image64">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan32" cols="100" rows="3"></textarea>
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
      <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”.<p id="q1s5category7"required></p></td>
      <td><input type="radio" id="answer1q1s5c7NA" name="answer65" value="0"></td>
      <td><input type="radio" id="answer1q1s5c7" name="answer65" value="1"></td>
      <td><input type="radio" id="answer2q1s5c7"  name="answer65" value="2"></td>
      <td><input type="radio" id="answer3q1s5c7"  name="answer65" value="3"></td>
      <td><input type="radio" id="answer4q1s5c7"  name="answer65" value="4"></td>
      <td><input type="radio" id="answer5q1s5c7"  name="answer65" value="5"></td>
      <td><input type="file" name="image65">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan33" cols="100" rows="3"></textarea>
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
      <td>Kerjasama dan sikap positif untuk amalan berterusan.<p id="q1s5category8"required></p></td>
      <td><input type="radio" id="answer1q1s5c8NA" name="answer66" value="0"></td>
      <td><input type="radio" id="answer1q1s5c8" name="answer66" value="1"></td>
      <td><input type="radio" id="answer2q1s5c8"  name="answer66" value="2"></td>
      <td><input type="radio" id="answer3q1s5c8"  name="answer66" value="3"></td>
      <td><input type="radio" id="answer4q1s5c8"  name="answer66" value="4"></td>
      <td><input type="radio" id="answer5q1s5c8"  name="answer66" value="5"></td>
      <td><input type="file" name="image66">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan34" cols="100" rows="3"></textarea>
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
      <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos/Keselamatan/Moral/Inovasi)<p id="q1s5category9"required></p></td>
      <td><input type="radio" id="answer1q1s5c9NA" name="answer67" value="0"></td>
      <td><input type="radio" id="answer1q1s5c9" name="answer67" value="1"></td>
      <td><input type="radio" id="answer2q1s5c9"  name="answer67" value="2"></td>
      <td><input type="radio" id="answer3q1s5c9"  name="answer67" value="3"></td>
      <td><input type="radio" id="answer4q1s5c9"  name="answer67" value="4"></td>
      <td><input type="radio" id="answer5q1s5c9"  name="answer67" value="5"></td>
      <td><input type="file" name="image67">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan35" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>

<br><br><br>
  <input type="Submit" name="Submit" value="Submit">
<br><br>
</form>
<div align="center"> Jumlah markah Seksyen 5: <?php echo $total ?>/85</div>
<br>
<br>
<div class="mbr-section-btn text-center"><a class="btn btn-primary display-4" href="QAInspectionSection6.php">SEKSYEN 6</a></div>

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