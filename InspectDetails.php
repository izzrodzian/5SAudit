<!DOCTYPE html>

<?php

session_start();

// Include the database configuration file  
require_once 'Config.php'; 

if (isset($_POST['Submit']))
{
  $userid = $_POST['userid'];
  $inspectdate = $_POST['inspectdate'];
  $inspecttime = $_POST['inspecttime'];
  $inspectlocation = $_POST['inspectlocation'];

  $sql = "INSERT INTO inspect (userID, inspectDate, inspectTime, inspectLocation) VALUES ('$userid', '$inspectdate','$inspecttime', '$inspectlocation')";
  $result = mysqli_query($con,$sql);
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
  
  <title>PEMERIKSAAN</title>
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
                    
                         <img src="assets/images/logo5s-122x125.png" title="" style="height: 3.8rem;">
                    
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4">
                        PEMERIKSAAN AUDIT 5S</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
      <li class="nav-item">
        <a class="nav-link link text-white display-4" href="Inspection.php" aria-expanded="true"><span class="mbrib-left mbr-iconfont mbr-iconfont-btn"></span>

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
</section><br><br><br>

<section class="cid-rPxomWSNoR"> 

<div class="container">
<form method="POST">

<table class="table table-hover ">


    <tr>
        <th> Staff ID: </th>
        <td>
           <div><input class="form-control px-3 display-7" type="text" name="userid">
           </div></br>
       </td>
   </tr>

    <tr>
        <th> Inspect Date: </th>
        <td>
           <div><input class="form-control px-3 display-7" type="date" name="inspectdate" >
           </div></br>
        </td>
    </tr>

     <tr>
        <th> Inspect Time: </th>
        <td>
           <div><input class="form-control px-3 display-7" type="time" name="inspecttime">
           </div></br>
        </td>
    </tr>


    <tr>
      <th> Location:  </th>
      <td>
        <div><input class="form-control px-3 display-7" list="location" name ="inspectlocation">
        <datalist id="location">
        <option value="Ampang Station">
        <option value="Cahaya Station">
        <option value="Cempaka Station">
        <option value="Pandan Indah Station">
        <option value="Pandan Jaya Station">
        <option value="Maluri Station">
        <option value="Miharja Station">
        <option value="Chan Sow Lin Station">
        <option value="Pudu Station">
        <option value="Hang Tuah Station">
        <option value="Plaza Rakyat Station">
        <option value="Masjid Jamek Station">
        <option value="Bandaraya Station">
        <option value="Sultan Ismail Station">
        <option value="PWTC Station">
        <option value="Titiwangsa Station">
        <option value="Sentul Station">
        <option value="Sentul Timur Station">
        </datalist> 
      </div></br>
    </td>
    </tr>

</table>


<div align="right">
    <a href="AuditorDash.php"><input type="submit" name="Submit" class="btn btn-secondary" value="TERUSKAN"></a>
    <br><br><br><br>
</div>
</form>
</div>
</div>
  
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