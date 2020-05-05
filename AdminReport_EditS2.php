<!DOCTYPE html>

<?php  

session_start();

// Include the database configuration file  
require_once 'Config.php'; 

// sql to delete a record
if(isset($_GET['inspectID'])){
    $inspectID = $_GET['inspectID'];
  } else {
    echo "Empty query!";
    exit;
  }

  if(!isset($inspectID)){
    echo "Empty Inspection ID! check again!";
    exit;
  }

// get user data
  $query = "SELECT inspectID, Answer4, Answer5, Answer6, Answer7, Answer8, Answer9, Answer10, Answer11, Answer12, Answer13, Answer14, Answer15, Answer16, Answer17, Answer18, Answer19, Category1, Category2, Category3, Category4, Category5, Category6, Category7, Category8, Category9, CategorySection2_TotalMarks FROM qacategory_section2 WHERE inspectID = '$inspectID'";
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
  
  <title>LAPORAN AUDIT</title>
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
                        PEMERIKSAAN AUDIT 5S / LAPORAN PENTADBIRAN</a></span>
            </div>
        </div>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
      <li class="nav-item">
        <a class="nav-link link text-white display-4" href="AdminReport.php" aria-expanded="true"><span class="mbrib-left mbr-iconfont mbr-iconfont-btn"></span>

        KEMBALI</a>
      </li>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
          <li class="nav-item"><a class="nav-link link text-white display-4" href="Logout.php?logout"><span class="mbrib-login mbr-iconfont mbr-iconfont-btn"></span>

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
  <form method="post" action="EditReport_S2.php">
        <h2 class="text-center">Edit Markah Seksyen 2</h2> <br>

        <div class="form-group">
            <input type="text" class="form-control" name="inspectID" placeholder="Inspection ID" value="<?php echo $row['inspectID'];?>" readOnly="true">
        </div> 

        <div class="form-group">
        Soalan 1: <input type="text" class="form-control" name="Answer4" placeholder="Soalan 1" value="<?php echo $row['Answer4'];?>" required="required">
        </div>

        <div class="form-group">
        Soalan 2: <input type="text" class="form-control" name="Answer5" placeholder="Soalan 2" value="<?php echo $row['Answer5'];?>" required="required">
        </div>

        <div class="form-group">
        Soalan 3: <input type="text" class="form-control" name="Answer6" placeholder="Soalan 3" value="<?php echo $row['Answer6'];?>" required="required">
        </div> 

        <div class="form-group">
        Jumlah Markah Kategori 1: <input type="text" class="form-control" name="Category1" placeholder="Kategori 1" value="<?php echo $row['Category1'];?>" readOnly="true">
        </div> 

        <div class="form-group">
        Soalan 1: <input type="text" class="form-control" name="Answer7" placeholder="Soalan 1" value="<?php echo $row['Answer7'];?>" required="required">

        </div><div class="form-group">
        Soalan 2: <input type="text" class="form-control" name="Answer8" placeholder="Soalan 2" value="<?php echo $row['Answer8'];?>" required="required">
        </div>

        <div class="form-group">
        Jumlah Markah Kategori 2: <input type="text" class="form-control" name="Category2" placeholder="Kategori 2" value="<?php echo $row['Category2'];?>" readOnly="true">
        </div>


        <div class="form-group">
        Soalan 1: <input type="text" class="form-control" name="Answer9" placeholder="Soalan 1" value="<?php echo $row['Answer9'];?>" required="required">
        </div>


        <div class="form-group">
        Soalan 2: <input type="text" class="form-control" name="Answer10" placeholder="Soalan 2" value="<?php echo $row['Answer10'];?>" required="required">
        </div>

        <div class="form-group">
        Jumlah Markah Kategori 3: <input type="text" class="form-control" name="Category3" placeholder="Kategori 3" value="<?php echo $row['Category3'];?>" readOnly="required">
        </div>


        <div class="form-group">
        Soalan 1: <input type="text" class="form-control" name="Answer11" placeholder="Soalan 1" value="<?php echo $row['Answer11'];?>" required="required">
        </div>


        <div class="form-group">
        Soalan 2: <input type="text" class="form-control" name="Answer12" placeholder="Soalan 2" value="<?php echo $row['Answer12'];?>" required="required">
        </div>


        <div class="form-group">
        Soalan 3: <input type="text" class="form-control" name="Answer13" placeholder="Soalan 3" value="<?php echo $row['Answer13'];?>" required="required">
        </div>

        <div class="form-group">
        Jumlah Markah Kategori 4: <input type="text" class="form-control" name="Category4" placeholder="Kategori 4" value="<?php echo $row['Category4'];?>" readOnly="required">
        </div>

        <div class="form-group">
        Soalan 1: <input type="text" class="form-control" name="Answer14" placeholder="Soalan 1" value="<?php echo $row['Answer14'];?>" required="required">
        </div>

        <div class="form-group">
        Jumlah Markah Kategori 5: <input type="text" class="form-control" name="Category5" placeholder="Kategori 5" value="<?php echo $row['Category5'];?>" readOnly="required">
        </div>
        
        <div class="form-group">
        Soalan 1: <input type="text" class="form-control" name="Answer15" placeholder="Soalan 1" value="<?php echo $row['Answer15'];?>" required="required">
        </div>

        <div class="form-group">
        Soalan 2: <input type="text" class="form-control" name="Answer16" placeholder="Soalan 3" value="<?php echo $row['Answer16'];?>" required="required">
        </div>

        <div class="form-group">
        Jumlah Markah Kategori 6: <input type="text" class="form-control" name="Category6" placeholder="Kategori 6" value="<?php echo $row['Category6'];?>" readOnly="required">
        </div>

        <div class="form-group">
        Soalan 1: <input type="text" class="form-control" name="Answer17" placeholder="Soalan 1" value="<?php echo $row['Answer17'];?>" required="required">
        </div>

        <div class="form-group">
        Jumlah Markah Kategori 7: <input type="text" class="form-control" name="Category7" placeholder="Kategori 7" value="<?php echo $row['Category7'];?>" readOnly="required">
        </div>

        <div class="form-group">
        Soalan 1: <input type="text" class="form-control" name="Answer18" placeholder="Soalan 1" value="<?php echo $row['Answer18'];?>" required="required">
        </div>

        <div class="form-group">
        Jumlah Markah Kategori 8: <input type="text" class="form-control" name="Category8" placeholder="Kategori 8" value="<?php echo $row['Category8'];?>" readOnly="required">
        </div>

        <div class="form-group">
        Soalan 1: <input type="text" class="form-control" name="Answer19" placeholder="Soalan 1" value="<?php echo $row['Answer19'];?>" required="required">
        </div>

        <div class="form-group">
        Jumlah Markah Kategori 9: <input type="text" class="form-control" name="Category9" placeholder="Kategori 9" value="<?php echo $row['Category9'];?>" readOnly="required">
        </div>

        <div class="form-group">
        Jumlah Markah Seksyen 2: <input type="text" class="form-control" name="CategorySection2_TotalMarks" placeholder="Jumlah Markah Seksyen 2" value="<?php echo $row['CategorySection2_TotalMarks'];?>" readOnly="true">
        </div>

        <br>

        <div class="form-group">
            <button type="Submit" name="update" value="update" class="btn btn-primary btn-block">Kemaskini</button>
        </div>  

        <br>

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