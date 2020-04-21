<!DOCTYPE html>

<?php  

session_start();

// Include the database configuration file  
require_once 'Config.php'; 

// sql to delete a record
if(isset($_GET['userID'])){
    $userID = $_GET['userID'];
  } else {
    echo "Empty query!";
    exit;
  }

  if(!isset($userID)){
    echo "Empty User ID! check again!";
    exit;
  }

// get user data
  $query = "SELECT userID, userEmail, userFullname, userGender, userContact, userDept, userRole FROM users WHERE userID = '$userID'";
  $result = mysqli_query($con, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($con);
    exit;
  }

  $row = mysqli_fetch_assoc($result);

 
?>

<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.12.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo5s-122x125.png" type="image/x-icon">
  <meta name="description" content="Web Site Creator Description">
  
  <title>PENTADBIRAN</title>
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
                    
                         <img src="assets/images/logo5s-122x125.png" title="" style="height: 3.8rem;">
                    
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4">
                        PEMERIKSAAN AUDIT 5S / PENGURUSAN PENGGUNA</a></span>
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
<br><br><br><br><br>

 <div class="container">
  <div class="col-ld-12">
    <div class="form">
  <form method="post" action="EditUser.php">
        <h2 class="text-center">Edit User Details</h2>

        <div class="form-group">
            <input type="text" class="form-control" name="userID" placeholder="User ID" value="<?php echo $row['userID'];?>" readOnly="true">
        </div> 

        <div class="form-group">
            <input type="text" class="form-control" name="userEmail" placeholder="Email" value="<?php echo $row['userEmail'];?>" required="required">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="userFullname" placeholder="Full Name" value="<?php echo $row['userFullname'];?>" required="required">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="userGender" placeholder="Gender" value="<?php echo $row['userGender'];?>" required="required">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="userContact" placeholder="Contact Number" value="<?php echo $row['userContact'];?>" required="required">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="userDept" placeholder="Department" value="<?php echo $row['userDept'];?>" required="required">
        </div>

        <div class="form-group">
            <input class="form-control" list="role" name="userRole" placeholder="Role" value="<?php echo $row['userRole'];?>" readOnly="true">
            <datalist id="role">
                <option value="Staff"></option>
                <option value="Admin"></option>
                <option value="Management"></option>
            </datalist>
        </div>

        <div class="form-group">
            <button type="Submit" name="update" value="update" class="btn btn-primary btn-block">Update</button>
        </div>  
    </form>
  </div>
</div>
</div>

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