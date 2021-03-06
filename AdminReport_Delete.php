<!DOCTYPE html>

<?php

session_start();

// Include the database configuration file  
require_once 'Config.php'; 

$sql = "SELECT inspectID, userID, inspectDate, inspectTime, inspectLocation FROM inspect";
$result = mysqli_query($con,$sql);

if ($result->num_rows > 0) {
    // output data of each row

?>

<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.12.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo5s-122x125.png" type="image/x-icon">
  <meta name="description" content="Web Site Builder Description">
  
  <title>Delete Report</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
</head>

<section class="menu cid-rPwfwJELGC" once="menu" id="menu1-k">


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

         <img src="assets/images/logo5s-122x125.png" title="" style="height: 3.8rem;">

       </span>
       <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4">
       PEMERIKSAAN AUDIT 5S / LAPORAN PENTADBIR</a></span>
     </div>
   </div>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
      <li class="nav-item">
        <a class="nav-link link text-white display-4" href="AdminDash.php" aria-expanded="true"><span class="mbrib-left mbr-iconfont mbr-iconfont-btn"></span>

        KEMBALI</a>
      </li>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
          <li class="nav-item"><a class="nav-link link text-white display-4" href="Homepage.php"><span class="mbrib-login mbr-iconfont mbr-iconfont-btn"></span>

          KELUAR</a></li>
        </ul>
      </div></ul>

    </div>
  </nav>
</section>
<br><br><br><br><br>

 <div class="container">
  <div class="col-ld-12">
  
  <?php while($row = mysqli_fetch_assoc($result)){ ?>

  Auditor ID: <?php echo $row['userID']; ?> <br>
  Inspection Date: <?php echo $row['inspectDate']; ?> <br>
  Inspection Time: <?php echo $row['inspectTime']; ?> <br>




<br><br>

<table class="table table-striped table-hover table-bordered align-center">

  <tr>
    <th>Section</th>
    <th>Action</th>       
  </tr>

  <tr>
    <td>Section 1</td>
    <td><a href="AdminReport_DeleteS1.php?inspectID=<?php echo $row['inspectID']; ?>">
          <input type="image" src="assets/images/viewreport.png" title="Delete" width="30" height="30">
        </a></td>
  </tr>

  <tr>
    <td>Section 2</td>
    <td><a href="AdminReport_DeleteS2.php?inspectID=<?php echo $row['inspectID']; ?>">
          <input type="image" src="assets/images/viewreport.png" title="Delete" width="30" height="30">
        </a></td>
  </tr>

  <tr>
    <td>Section 3</td>
    <td><a href="AdminReport_DeleteS3.php?inspectID=<?php echo $row['inspectID']; ?>">
          <input type="image" src="assets/images/viewreport.png" title="Delete" width="30" height="30">
        </a></td>
  </tr>

  <tr>
    <td>Section 4</td>
    <td><a href="AdminReport_DeleteS4.php?inspectID=<?php echo $row['inspectID']; ?>">
          <input type="image" src="assets/images/viewreport.png" title="Delete" width="30" height="30">
        </a></td></td>
  </tr>

  <tr>
    <td>Section 5</td>
    <td><a href="AdminReport_DeleteS5.php?inspectID=<?php echo $row['inspectID']; ?>">
          <input type="image" src="assets/images/viewreport.png" title="Delete" width="30" height="30">
        </a></td></td>
  </tr>

  <tr>
    <td>Section 6</td>
    <td><a href="AdminReport_DeleteS6.php?inspectID=<?php echo $row['inspectID']; ?>">
          <input type="image" src="assets/images/viewreport.png" title="Delete" width="30" height="30">
        </a></td>
  </tr>

    <?php 
      }   
    }
  ?> 
  

</table>

</div>
</div>

<br><br>
   
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
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>