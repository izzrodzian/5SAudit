<!DOCTYPE html>

<?php

session_start();

$con = mysqli_connect('127.0.0.1','root','') or die ('Not connected.');
mysqli_select_db($con,'5s') or die ('No database found.');

if (isset($_POST['login']))
{
  $userID = $_POST['userID'];
  $userPassword = $_POST['userPassword'];
  $userRole = $_POST['userRole'];

  $sql = "SELECT * FROM users WHERE userID ='$userID' and userRole ='$userRole'";
  $result = mysqli_query($con,$sql);

  while($row=mysqli_fetch_array($result))


      if($row['userID'] == $userID && $row['userPassword'] == $userPassword &&  $row['userRole']== 'Admin')
      {
        
        $_SESSION['user']= $_POST['userID'];
        header("Location:AdminDashboard.php");
    }

    else if ($row['userID'] == $userID && $row['userPassword'] == $userPassword  && $row['userRole']== 'Auditor')
      {
        $_SESSION['user']= $_POST['userID'];
        header("Location:Inspection.php");

    } else if ($row['userID'] == $userID && $row['userPassword'] == $userPassword && $row['userID']== 'Staff')
    {
       $_SESSION['user']= $_POST['userID'];
      header("Location:Report.php");

    }
  }
?>

<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.12.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo5s-122x125.png" type="image/x-icon">
  <meta name="description" content="Website Builder Description">
  
  <title>Login</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-rPwfwJELGC" once="menu" id="menu1-b">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">

      <div class="menu-logo">
        <div class="navbar-brand">
          <span class="navbar-logo">

           <img src="assets/images/logo5s-122x125.png" alt="Mobirise" title="" style="height: 3.8rem;">

         </span>
         <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4">
         5S AUDIT INSPECTION</a></span>
       </div>
     </div>
   </nav>
 </section>

 <section class="header15 cid-rPxhb253yR mbr-fullscreen " id="header15-g">

  <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>
  <div class="container align-center">
 <center><div class="mbr-white content-container">
        <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">USER LOGIN</h1>
      </div></center>
    
      
       <form method="POST">

          <div class="container">
            <div>
              <input class="form-control px-3 display-7 align-center" type="text" name="userID" placeholder="Enter your ID no" required="">
            </div></br>

            <input class="form-control px-3 display-7 align-center" type="password" name="userPassword" placeholder="Enter your password" required="">
          </div></br>

          <div>
            <input class="form-control px-3 display-7 align-center" list="userRole" name ="userRole" placeholder="Select role type">
            <datalist id="userRole">
              <option value="Admin"></option>
              <option value="Auditor"></option>
              <option value="Staff"></option>
            </datalist> 
          </div></br>

          <div>
            <a href="Homepage.php"><input class="btn btn-primary btn-form display-4" type="button" name="cancel" value="Cancel" /></a>
            <input class="btn btn-primary btn-form display-4"  type="submit" name="login" value="Login">
          </div>
        </div>

      </form>
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
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>