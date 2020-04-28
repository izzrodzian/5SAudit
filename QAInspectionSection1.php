<!DOCTYPE html>

<?php  

session_start();
require_once 'Config.php'; 

  
// Display the alert box  
echo '<script>alert("Patuhi arahan berikut: Sila jawab semua soalan.Tinggalkan sebarang soalan yang tidak berkaitan dengan menulis (-) atau (0). Klik butang PADAM sekiranya terdapat sebarang kesilapan. Klik butang Hantar sebelum meneruskan ke bahagian seterusnya. Lihat laporan pada akhir proses pemeriksaan.")</script>'; 
  
$total = 0;
$answer1 = 0;
$answer2 = 0;
$answer3 = 0;

if (isset($_POST['Submit']))
{
  $userid = $_SESSION['user']; 
  $answer1 = $_POST['answer1'];
  $answer2 = $_POST['answer2'];
  $answer3 = $_POST['answer3'];
  $catatan1 = $_POST['catatan1'];
  $catatan2 = $_POST['catatan2'];
  $catatan3 = $_POST['catatan3'];
  $total = $answer1 + $answer2 + $answer3;

  //declare images variable
  $filename1 = $_FILES['image1']['name'];
  $filetmpname1 = $_FILES['image1']['tmp_name'];

  $filename2 = $_FILES['image2']['name'];
  $filetmpname2 = $_FILES['image2']['tmp_name'];

  $filename3 = $_FILES['image3']['name'];
  $filetmpname3 = $_FILES['image3']['tmp_name'];

  //folder where images will be uploaded
  $folder = 'imagesuploaded/';

  //function for saving the uploaded images in a specific folder
  move_uploaded_file($filetmpname1, $folder.$filename1);
  move_uploaded_file($filetmpname2, $folder.$filename2);
  move_uploaded_file($filetmpname3, $folder.$filename3);


  $sql1 = "INSERT INTO qacategory_section1 (userID,Category1, Category2, Category3, CategorySection1_TotalMarks, Image1, Image2, Image3, Catatan1, Catatan2, Catatan3) VALUES ('$userid', '$answer1', '$answer2', '$answer3', '$total', '$filename1', '$filename2', '$filename3', '$catatan1', '$catatan2', '$catatan3')";
  $result1 = mysqli_query($con,$sql1);

    if($result1)
    {    
     $sql2 = "INSERT INTO qamarks (userID, CategorySection1_TotalMarks) VALUES ('$userid','$total')"; 

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
  
  <title>5S Audit / Seksyen 1</title>
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
                        PEMERIKSAAN AUDIT 5S / SEKSYEN 1</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
        <li class="nav-item"><a class="nav-link link text-white display-4" href="Logout.php?logout"><span class="mbrib-login mbr-iconfont mbr-iconfont-btn"></span>

        KELUAR</a></li>
      </ul>
    </div></ul>

  </div>
    </nav>
</section>

<section class="cid-rPxomWSNoR">
<br><br>
<center>
  <h5>SEKSYEN 1: KEPERLUAN UTAMA PELAKSANAAN</h5>
  <br>
  <br>

<button type="button" style="width: 90%" class="collapsible">Kategori 1: Fail Program</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $answer1 ?>/5</div>
<br>
<form method="POST" enctype="multipart/form-data">
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
      <td>Maklumat Lengkap dan Terkini (Merujuk pada Senarai Semak Dokumen)<p id="s1category1"required></p></td>
      <td><input type="radio" id="answer1s1c1NA" name="answer1" value="0"></td>
      <td><input type="radio" id="answer1s1c1" name="answer1" value="1"></td>
      <td><input type="radio" id="answer2s1c1"  name="answer1" value="2"></td>
      <td><input type="radio" id="answer3s1c1"  name="answer1" value="3"></td>
      <td><input type="radio" id="answer4s1c1"  name="answer1" value="4"></td>
      <td><input type="radio" id="answer5s1c1"  name="answer1" value="5"></td>
      <td><input type="file" name="image1">
      </tr>
</table>
Catatan:<br>
    <textarea name="catatan1" cols="100" rows="3"></textarea>
    <br>
    <br>
</div>
<br> 

<button type="button" style="width: 90%" class="collapsible">Kategori 2: Sudut 5S</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $answer2 ?>/5</div>
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
      <td>Maklumat Lengkap dan Terkini (Merujuk pada Senarai Semak Dokumen)<p id="s1category2" required></p></td>
      <td><input type="radio" id="answer1s1c2NA" name="answer2" value="0"></td>
      <td><input type="radio" id="answer1s1c2" name="answer2" value="1"></td>
      <td><input type="radio" id="answer2s1c2"  name="answer2" value="2"></td>
      <td><input type="radio" id="answer3s1c2"  name="answer2" value="3"></td>
      <td><input type="radio" id="answer4s1c2"  name="answer2" value="4"></td>
      <td><input type="radio" id="answer5s1c2"  name="answer2" value="5"></td>
      <td><input type="file" name="image2">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan2" cols="100" rows="3"></textarea>
    <br>
    <br>
</div>
<br>



<button type="button" style="width: 90%" class="collapsible">Kategori 3: Kaizen</button>
<div class="content" style="width: 90%">
<br>
<div align="right"> Jumlah markah: <?php echo $answer3 ?>/5</div>
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
      <td>Penambahbaikan, Kreativiti dan Inovasi<p id="s1category3" required></p></td>
      <td><input type="radio" id="answer1s1c3NA" name="answer3" value="0"></td>
      <td><input type="radio" id="answer1s1c3" name="answer3" value="1"></td>
      <td><input type="radio" id="answer2s1c3"  name="answer3" value="2"></td>
      <td><input type="radio" id="answer3s1c3"  name="answer3" value="3"></td>
      <td><input type="radio" id="answer4s1c3"  name="answer3" value="4"></td>
      <td><input type="radio" id="answer5s1c3"  name="answer3" value="5"></td>
      <td><input type="file" name="image3">
      </tr>
    </table>
    Catatan:<br>
    <textarea name="catatan3" cols="100" rows="3"></textarea>
    <br>
    <br>
    
</div>
<br><br><br>
  <input class="button" type="reset" name="Reset" value="Padam">
  <input class="button" type="submit" name="Submit" value="Hantar">
<br><br>

</form>
<div align="center"> Jumlah markah Seksyen 1: <?php echo $total ?>/15</div>
<br>
<br>
<div class="mbr-section-btn text-center"><a class="btn btn-primary display-4" href="QAInspectionSection2.php">SEKSYEN 2</a></div>

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