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
$total = 0;

if (isset($_POST['Submit']))
{
  
  $answer20 = $_POST['answer20'];
  $answer21 = $_POST['answer21'];
  $answer22 = $_POST['answer22'];
  $answer23 = $_POST['answer23'];
  $answer24 = $_POST['answer24'];
  $answer25 = $_POST['answer25'];
  $answer26 = $_POST['answer26'];
  $answer27 = $_POST['answer27'];
  $answer28 = $_POST['answer28'];
  $answer29 = $_POST['answer29'];
  $answer30 = $_POST['answer30'];
  $answer31 = $_POST['answer31'];
  $answer32 = $_POST['answer32'];

  //Calculation
  $totalC1 = $answer20 + $answer21 + $answer22 +  $answer23 + $answer24 + $answer25 + $answer26;
  $totalC2 = $answer27 + $answer28;
  $totalC3 = $answer29 + $answer30;
  $totalC4 = $answer31;
  $totalC5 = $answer32;
  $total = $totalC1 + $totalC2 + $totalC3 + $totalC4 + $totalC5;

  $sql1 = "INSERT INTO qacategory_section3 (Category1, Category2, Category3, Category4, Category5, CategorySection3_TotalMarks) VALUES ('$totalC1', '$totalC2', '$totalC3', '$totalC4', '$totalC5', '$total')";
  $result1 = mysqli_query($con,$sql1);

  if($result1)
    {    
     $sql2 = "INSERT INTO qamarks (CategorySection3_TotalMarks) VALUES ('$total')"; 

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
  
  <title>5S Audit / Seksyen 3</title>
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
                        5S AUDIT INSPECTION / SECTION 3</a></span>
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
  <h5>SEKSYEN 3: STOR (FAIL, BAHAN, ALAT GANTI, UNIFORM & SEBAGAINYA)</h5>
  <br>
  <br>

<button type="button" style="width: 90%" class="collapsible">Kategori 1: Tempat Simpanan</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC1 ?>/35</div>
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
      <td>Keadaan tersusun, kemas dan teratur.<p id="q1s3category1"required></p></td>
      <td><input type="radio" id="answer1q1s3c1NA" name="answer20" value="0"></td>
      <td><input type="radio" id="answer1q1s3c1" name="answer20" value="1"></td>
      <td><input type="radio" id="answer2q1s3c1"  name="answer20" value="2"></td>
      <td><input type="radio" id="answer3q1s3c1"  name="answer20" value="3"></td>
      <td><input type="radio" id="answer4q1s3c1"  name="answer20" value="4"></td>
      <td><input type="radio" id="answer5q1s3c1"  name="answer20" value="5"></td>
      <td><input type="file" name="images1s3category1">
      </tr>

      <tr>
      <td>Kawasan lantai bersih.<p id="q2s3category1"required></p></td>
      <td><input type="radio" id="answer1q2s3c1NA" name="answer21" value="0"></td>
      <td><input type="radio" id="answer1q2s3c1" name="answer21" value="1"></td>
      <td><input type="radio" id="answer2q2s3c1"  name="answer21" value="2"></td>
      <td><input type="radio" id="answer3q2s3c1"  name="answer21" value="3"></td>
      <td><input type="radio" id="answer4q2s3c1"  name="answer21" value="4"></td>
      <td><input type="radio" id="answer5q2s3c1"  name="answer21" value="5"></td>
      <td><input type="file" name="images2s3category1">
      </tr>

      <tr>
      <td>Terdapat tanda 'label' bagi tiap-tiap bahan/rekod.<p id="q3s3category1"required></p></td>
      <td><input type="radio" id="answer1q3s3c1NA" name="answer22" value="0"></td>
      <td><input type="radio" id="answer1q3s3c1" name="answer22" value="1"></td>
      <td><input type="radio" id="answer2q3s3c1"  name="answer22" value="2"></td>
      <td><input type="radio" id="answer3q3s3c1"  name="answer22" value="3"></td>
      <td><input type="radio" id="answer4q3s3c1"  name="answer22" value="4"></td>
      <td><input type="radio" id="answer5q3s3c1"  name="answer22" value="5"></td>
      <td><input type="file" name="images3s3category1">
      </tr>

      <tr>
      <td>Mempunyai sistem susunan yang teratur dan mudah untuk diambil (seperti rak-rak) bila diperlukan.<p id="q4s3category1"required></p></td>
      <td><input type="radio" id="answer1q4s3c1NA" name="answer23" value="0"></td>
      <td><input type="radio" id="answer1q4s3c1" name="answer23" value="1"></td>
      <td><input type="radio" id="answer2q4s3c1"  name="answer23" value="2"></td>
      <td><input type="radio" id="answer3q4s3c1"  name="answer23" value="3"></td>
      <td><input type="radio" id="answer4q4s3c1"  name="answer23" value="4"></td>
      <td><input type="radio" id="answer5q4s3c1"  name="answer23" value="5"></td>
      <td><input type="file" name="images4s3category1">
      </tr>

      <tr>
      <td>Tidak terdapat bahan/item yang tidak diperlukan.<p id="q5s3category1"required></p></td>
      <td><input type="radio" id="answer1q5s3c1NA" name="answer24" value="0"></td>
      <td><input type="radio" id="answer1q5s3c1" name="answer24" value="1"></td>
      <td><input type="radio" id="answer2q5s3c1"  name="answer24" value="2"></td>
      <td><input type="radio" id="answer3q5s3c1"  name="answer24" value="3"></td>
      <td><input type="radio" id="answer4q5s3c1"  name="answer24" value="4"></td>
      <td><input type="radio" id="answer5q5s3c1"  name="answer24" value="5"></td>
      <td><input type="file" name="images5s3category1">
      </tr>

      <tr>
      <td>Terdapat “layout plan” sebagai panduan.<p id="q6s3category1"required></p></td>
      <td><input type="radio" id="answer1q6s3c1NA" name="answer25" value="0"></td>
      <td><input type="radio" id="answer1q6s3c1" name="answer25" value="1"></td>
      <td><input type="radio" id="answer2q6s3c1"  name="answer25" value="2"></td>
      <td><input type="radio" id="answer3q6s3c1"  name="answer25" value="3"></td>
      <td><input type="radio" id="answer4q6s3c1"  name="answer25" value="4"></td>
      <td><input type="radio" id="answer5q6s3c1"  name="answer25" value="5"></td>
      <td><input type="file" name="images6s3category1">
      </tr>

      <tr>
      <td>Wujud rekod keluar masuk pergerakan bahan.<p id="q7s3category1"required></p></td>
      <td><input type="radio" id="answer1q7s3c1NA" name="answer26" value="0"></td>
      <td><input type="radio" id="answer1q7s3c1" name="answer26" value="1"></td>
      <td><input type="radio" id="answer2q7s3c1"  name="answer26" value="2"></td>
      <td><input type="radio" id="answer3q7s3c1"  name="answer26" value="3"></td>
      <td><input type="radio" id="answer4q7s3c1"  name="answer26" value="4"></td>
      <td><input type="radio" id="answer5q7s3c1"  name="answer26" value="5"></td>
      <td><input type="file" name="images7s3category1">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans3category1" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 2: Keselamatan
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
      <td>Aspek keselamatan diutamakan.<p id="q1s3category2"required></p></td>
      <td><input type="radio" id="answer1q1s3c2NA" name="answer27" value="0"></td>
      <td><input type="radio" id="answer1q1s3c2" name="answer27" value="1"></td>
      <td><input type="radio" id="answer2q1s3c2"  name="answer27" value="2"></td>
      <td><input type="radio" id="answer3q1s2c2"  name="answer27" value="3"></td>
      <td><input type="radio" id="answer4q1s2c2"  name="answer27" value="4"></td>
      <td><input type="radio" id="answer5q1s2c2"  name="answer27" value="5"></td>
      <td><input type="file" name="images1s3category2">
      </tr>

    <tr>
      <td>Kawalan visual dan ciri keselamatan mencukupi.<p id="q2s3category2"required></p></td>
      <td><input type="radio" id="answer1q2s3c2NA" name="answer28" value="0"></td>
      <td><input type="radio" id="answer1q2s3c2" name="answer28" value="1"></td>
      <td><input type="radio" id="answer2q2s3c2"  name="answer28" value="2"></td>
      <td><input type="radio" id="answer3q2s3c2"  name="answer28" value="3"></td>
      <td><input type="radio" id="answer4q2s3c2"  name="answer28" value="4"></td>
      <td><input type="radio" id="answer5q2s3c2"  name="answer28" value="5"></td>
      <td><input type="file" name="images2s3category2">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans2category6" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 3: Seragam
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
      <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”.<p id="q1s3category3"required></p></td>
      <td><input type="radio" id="answer1q1s3c3NA" name="answer29" value="0"></td>
      <td><input type="radio" id="answer1q1s3c3" name="answer29" value="1"></td>
      <td><input type="radio" id="answer2q1s3c3"  name="answer29" value="2"></td>
      <td><input type="radio" id="answer3q1s3c3"  name="answer29" value="3"></td>
      <td><input type="radio" id="answer4q1s3c3"  name="answer29" value="4"></td>
      <td><input type="radio" id="answer5q1s3c3"  name="answer29" value="5"></td>
      <td><input type="file" name="images1s3category3">
      </tr>

      <tr>
      <td>Penggunaan Red Tag yang betul dan sesuai.<p id="q2s3category3"required></p></td>
      <td><input type="radio" id="answer1q2s3c3NA" name="answer30" value="0"></td>
      <td><input type="radio" id="answer1q2s3c3" name="answer30" value="1"></td>
      <td><input type="radio" id="answer2q2s3c3"  name="answer30" value="2"></td>
      <td><input type="radio" id="answer3q2s3c3"  name="answer30" value="3"></td>
      <td><input type="radio" id="answer4q2s3c3"  name="answer30" value="4"></td>
      <td><input type="radio" id="answer5q2s3c3"  name="answer30" value="5"></td>
      <td><input type="file" name="images1s3category3">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans3category3" cols="100" rows="3"></textarea>
    <br>
    <br>
   
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 4: Sentiasa Amal
</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $totalC4 ?>/5</div>
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
      <td>Kerjasama dan sikap positif untuk amalan berterusan.<p id="q1s3category4"required></p></td>
      <td><input type="radio" id="answer1q1s3c4NA" name="answer31" value="0"></td>
      <td><input type="radio" id="answer1q1s3c4" name="answer31" value="1"></td>
      <td><input type="radio" id="answer2q1s3c4"  name="answer31" value="2"></td>
      <td><input type="radio" id="answer3q1s3c4"  name="answer31" value="3"></td>
      <td><input type="radio" id="answer4q1s3c4"  name="answer31" value="4"></td>
      <td><input type="radio" id="answer5q1s3c4"  name="answer31" value="5"></td>
      <td><input type="file" name="images1s3category4">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans3category4" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br>

<button type="button" style="width: 90%" class="collapsible">Kategori 5: Impak
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
      <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos /Keselamatan/Moral/Inovasi)<p id="q2s3category5"required></p></td>
      <td><input type="radio" id="answer1q2s3c5NA" name="answer32" value="0"></td>
      <td><input type="radio" id="answer1q2s3c5" name="answer32" value="1"></td>
      <td><input type="radio" id="answer2q2s3c5"  name="answer32" value="2"></td>
      <td><input type="radio" id="answer3q2s3c5"  name="answer32" value="3"></td>
      <td><input type="radio" id="answer4q2s3c5"  name="answer32" value="4"></td>
      <td><input type="radio" id="answer5q2s3c5"  name="answer32" value="5"></td>
      <td><input type="file" name="images2s3category5">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatans3category5" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>

<br><br><br>
  <input type="Submit" name="Submit" value="Submit">
<br><br>
</form>
<div align="center"> Jumlah markah Seksyen 3: <?php echo $total ?>/65</div>
<br>
<br>
<div class="mbr-section-btn text-center"><a class="btn btn-primary display-4" href="QAInspectionSection4.php">SEKSYEN 4</a></div>

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