<!DOCTYPE html>

<?php
session_start();

$con = mysqli_connect('127.0.0.1','root','') or die ('Not connected.');
mysqli_select_db($con,'5s') or die ('No database found.');

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
  
  <title>Laporan Audit 5S Ampang Line</title>
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

<br><br><br><br><br>

<div class="container align-center">
  <div class="col-ld-12">
   <img src="assets/images/prasarana.png" height="200" width="700">
   <br><br></b><h1>LAPORAN AUDIT 5S AMPANG LINE</h1><br>

   <div>
    <a onclick="window.print();">
      <input type="image" src="assets/images/print.png" title="print" width="40" height="40" align="right">
  </a><br><br>
</div>

<form method="POST">
    <table class="table table-hover  table-bordered align-center">



<!-- Seksyen 1  -->
<th class="align-left" colspan="5">SEKSYEN 1: KEPERLUAN UTAMA PELAKSANAAN</th>

<?php

$sql1 = "SELECT * FROM qacategory_section1";
$result1 = $con->query($sql1); 

if ($result1->num_rows > 0) {
    // output data of each row

?>

<tr>
    <th> Kategori </th>
    <th> Soalan </th>
    <th> Markah</th>
    <th> Gambar</th> 
    <th> Catatan </th>         
</tr>
<?php while($row1 = mysqli_fetch_assoc($result1)){ ?>
<tr>
    <td>Fail Program</td>
    <td> Maklumat Lengkap dan Terkini (Merujuk pada Senarai Semak Dokumen)</td>
    <td> <?php echo $row1['Category1']; ?></td>
    <td><?php echo $row1['Image1']; ?></td>
    <td><?php echo $row1['Catatan1']; ?></td>
</tr>

<tr>
    <td>Sudut 5S</td>
    <td>Maklumat Lengkap dan Terkini (Merujuk pada Senarai Semak Dokumen)</td>
    <td><?php echo $row1['Category2']; ?></td>
    <td><?php echo $row1['Image2'];?></td>
    <td><?php echo $row1['Catatan2']; ?></td>
</tr>


<tr>
    <td> Kaizen</td>
    <td>Penambahbaikan, Kreativiti dan Inovasi</td>
    <td><?php echo $row1['Category3']; ?></td>
    <td><?php echo $row1['Image3']; ?></td>
    <td><?php echo $row1['Catatan3'];?></td>
</tr>



<tr>
    <th colspan="3">JUMLAH MARKAH SEKSYEN 1</th>
    <th colspan="2"><?php echo $row1['CategorySection1_TotalMarks'] ?></th>
</tr>
<?php } ?>
</table><br><br>
<?php } ?>

<!--  Seksyen 2 -->
<table class="table table-hover  table-bordered align-center">

<th class="align-left" colspan="5"> SEKSYEN 2: RUANG PEJABAT</th>
<?php

$sql2 = "SELECT * FROM qacategory_section2";
$result2 = $con->query($sql2); 

if ($result2->num_rows > 0) {
    // output data of each row

?>

<tr>
    <th> Kategori </th>
    <th> Soalan </th>
    <th> Markah</th>
    <th> Gambar</th> 
    <th> Catatan </th>         
</tr>
<?php while($row2 = mysqli_fetch_assoc($result2)){ ?>

<tr>
    <td rowspan="3">Tempat Individu</td>
    <td> Susun atur kemas dan sistematik</td>
    <td><?php echo $row2['Answer4']; ?></td>
    <td><?php echo $row2['Image4'];?></td>
    <td rowspan="3"><?php echo $row2['Catatan4']; ?></td>
</tr>

<tr>

    <td> Bersih dan tiada kotoran</td>
    <td><?php echo $row2['Answer5']; ?></td>
    <td><?php echo $row2['Image5']; ?></td>
</tr>
<tr>

    <td> Item dalam keadaan minima/tiada item tidak perlu</td>
    <td><?php echo $row2['Answer6']; ?></td>
    <td><?php echo $row2['Image6']; ?></td>
</tr>

<tr>
    <td rowspan="2">Siling/Lantai
    /Dinding</td>
    <td>Susun atur kemas dan sistematik</td>
    <td><?php echo $row2['Answer7']; ?></td>
    <td><?php echo $row2['Image7']; ?></td>
    <td rowspan="2"><?php echo $row2['Catatan5']; ?></td>
</tr>
<tr>
    <td>Bersih dan tiada kotoran</td>
    <td><?php echo $row2['Answer8'];?></td>
    <td><?php echo $row2['Image8']; ?></td>
</tr>

<tr>
    <td rowspan="2"> Peralatan
    /Perkakas</td>
    <td>Kemas dan tersimpan di tempat asal</td>
    <td><?php echo $row2['Answer9']; ?></td>
    <td><?php echo $row2['Image9']; ?></td>
    <td rowspan="2"><?php echo $row2['Catatan6']; ?></td>
</tr>
<tr>
    <td>Bersih, tidak berdebu dan berfungsi baik</td>
    <td><?php echo $row2['Answer10']; ?></td>
    <td><?php echo $row2['Image10']; ?></td>
</tr>

<tr>
    <td rowspan="3">Tempat Fail/Rekod/Dokumen</td>
    <td> Kedudukan fail teratur dan kemas</td>
    <td><?php echo $row2['Answer11']; ?></td>
    <td><?php echo $row2['Image11']; ?></td>
    <td rowspan="3"><?php echo $row2['Catatan7']; ?></td>
</tr>
<tr>
    <td> Mudah dicari dan dikesan dengan mewujudkan pelabelan dan indeks kedudukan fail</td>
    <td><?php echo $row2['Answer12']; ?></td>
    <td><?php echo $row2['Image12']; ?></td>
</tr>

<tr>
    <td>Kabinet rak fail adalah bersih dan tidak berhabuk</td>
    <td><?php echo $row2['Answer13']; ?></td>
    <td><?php echo $row2['Image13']; ?></td>
</tr>

<tr>
    <td>Maklumat Visual</td>
    <td>Kemas, bersih dan terkini</td>
    <td><?php echo $row2['Answer14']; ?></td>
    <td><?php echo $row2['Image14']; ?></td>
    <td><?php echo $row2['Catatan8']; ?></td>
</tr>

<tr>
    <td rowspan="2"> Keselamatan</td>
    <td>Aspek keselamatan diutamakan</td>
    <td><?php echo $row2['Answer15']; ?></td>
    <td><?php echo $row2['Image15']; ?></td>
    <td rowspan="2"><?php echo $row2['Catatan9']; ?></td>
</tr>

<tr>
    <td>Kawalan visual dan ciri keselamatan mencukupi</td>
    <td><?php echo $row2['Answer16']; ?></td>
    <td><?php echo $row2['Image16']; ?></td>
</tr>

<tr>
    <td> Seragam</td>
    <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership</td>
    <td><?php echo $row2['Answer17']; ?></td>
    <td><?php echo $row2['Image17']; ?></td>
    <td><?php echo $row2['Catatan10']; ?></td>
</tr>

<tr>
    <td> Sentiasa Amal</td>
    <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
    <td><?php echo $row2['Answer18']; ?></td>
    <td><?php echo $row2['Image18']; ?></td>
    <td><?php echo $row2['Catatan11']; ?></td>
</tr>

<tr>
    <td> Impak</td>
    <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
    <td><?php echo $row2['Answer19']; ?></td>
    <td><?php echo $row2['Image19']; ?></td>
    <td><?php echo $row2['Catatan12']; ?></td>
</tr>

<tr>
    <th colspan="3">JUMLAH MARKAH SEKSYEN 2</th>
    <th colspan="2"><?php echo $row2['CategorySection2_TotalMarks']; ?></th>
</tr>
<?php } ?>
</table><br><br>
<?php } ?>

<!-- Seksyen 3 -->

<table class="table table-hover  table-bordered align-center">

<th class="align-left" colspan="5" >SEKSYEN 3: STOR (FAIL, BAHAN, ALAT GANTI, UNIFORM & SEBAGAINYA)</th>
<?php

$sql3 = "SELECT * FROM qacategory_section3";
$result3 = $con->query($sql3); 

if ($result3->num_rows > 0) {
    // output data of each row

?>

<tr>
    <th> Kategori </th>
    <th> Soalan </th>
    <th> Markah</th>
    <th> Gambar</th> 
    <th> Catatan </th>         
</tr>
<?php while($row3 = mysqli_fetch_assoc($result3)){ ?>

<tr>
    <td rowspan="7">Tempat Simpanan</td>
    <td> Keadaan tersusun, kemas dan teratur</td>
    <td><?php echo $row3['Answer20']; ?></td>
    <td><?php echo $row3['Image20']; ?></td>
    <td rowspan="7"><?php echo $row3['Catatan13']; ?></td>
</tr>
<tr>

    <td> Kawasan lantai bersih</td>
    <td><?php echo $row3['Answer21']; ?></td>
    <td><?php echo $row3['Image21']; ?></td>
</tr>
<tr>

    <td> Terdapat tanda 'label' bagi tiap-tiap bahan/rekod</td>
    <td><?php echo $row3['Answer22']; ?></td>
    <td><?php echo $row3['Image22']; ?></td>
</tr>

<tr>
<td> Mempunyai sistem susunan yang teratur dan mudah untuk diambil (seperti rak-rak) bila diperlukan</td>
<td><?php echo $row3['Answer23']; ?></td>
<td><?php echo $row3['Image23']; ?></td>
</tr>

<tr>
<td> Tidak terdapat bahan/item yang tidak diperlukan</td>
<td><?php echo $row3['Answer24']; ?></td>
<td><?php echo $row3['Image24']; ?></td>
</tr>

<tr>
<td> Terdapat “layout plan” sebagai panduan</td>
<td><?php echo $row3['Answer25']; ?></td>
<td><?php echo $row3['Image25']; ?></td>
</tr>

<td> Wujud rekod keluar masuk pergerakan bahan</td>
<td><?php echo $row3['Answer26']; ?></td>
<td><?php echo $row3['Image26']; ?></td>
</tr>

<tr>
  <td rowspan="2">Keselamatan</td>
  <td>Aspek keselamatan diutamakan</td>
  <td><?php echo $row3['Answer27']; ?></td>
  <td><?php echo $row3['Image27']; ?></td>
  <td rowspan="2"><?php echo $row3['Catatan14']; ?></td>
</tr>
<tr>
  <td>Kawalan visual dan ciri keselamatan mencukupi</td>
  <td><?php echo $row3['Answer28']; ?></td>
  <td><?php echo $row3['Image28']; ?></td>
</tr>

<tr>
  <td rowspan="2"> Seragam</td>
  <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”</td>
  <td><?php echo $row3['Answer29']; ?></td>
  <td><?php echo $row3['Image29']; ?></td>
  <td rowspan="2"><?php echo $row3['Catatan15']; ?></td>
</tr>

<tr>
  <td>Penggunaan Red Tag yang betul dan sesuai</td>
  <td><?php echo $row3['Answer30']; ?></td>
  <td><?php echo $row3['Image30']; ?></td>
</tr>

<tr>
  <td rowspan="1">Sentiasa Amal</td>
  <td> Kerjasama dan sikap positif untuk amalan berterusan</td>
  <td><?php echo $row3['Answer31']; ?></td>
  <td><?php echo $row3['Image31']; ?></td>
  <td><?php echo $row3['Catatan16']; ?></td>
</tr>


<tr>
  <td rowspan="1"> Impak</td>
  <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos /Keselamatan/Moral/Inovasi)</td>
  <td><?php echo $row3['Answer32']; ?></td>
  <td><?php echo $row3['Image32']; ?></td>
  <td><?php echo $row3['Catatan17']; ?></td>
</tr>

<tr>
  <th colspan="3">JUMLAH MARKAH SEKSYEN 3</th>
  <th colspan="2"><?php echo $row3['CategorySection3_TotalMarks']; ?></th>
</tr>
<?php } ?>
</table><br><br>
<?php } ?>

<!-- Seksyen 4 -->

<table class="table table-hover  table-bordered align-center">

<th class="align-left" colspan="5" >SEKSYEN 4: OPERASI
  (BENGKEL PENYELENGGARAAN AM, PAM MINYAK, “WASHING BAY”, BILIK KAWALAN, BILIK KIRAAN & SEBAGAINYA)</th>
<?php

$sql4 = "SELECT * FROM qacategory_section4";
$result4 = $con->query($sql4); 

if ($result4->num_rows > 0) {
    // output data of each row

?>

<tr>
    <th> Kategori </th>
    <th> Soalan </th>
    <th> Markah</th>
    <th> Gambar</th> 
    <th> Catatan </th>         
</tr>
<?php while($row4 = mysqli_fetch_assoc($result4)){ ?>

<tr>
    <td rowspan="3">Lantai/Dinding</td>
    <td> Lantai bersih, kemas dan tidak licin</td>
    <td><?php echo $row4['Answer33']; ?></td>
    <td><?php echo $row4['Image33']; ?></td>
    <td rowspan="3"><?php echo $row4['Catatan18']; ?></td>
</tr>
<tr>

    <td> Keadaan kemas dan rapi</td>
    <td><?php echo $row4['Answer34']; ?></td>
    <td><?php echo $row4['Image34']; ?></td>
</tr>
<tr>

    <td> Tiada barang yang tidak diperlukan</td>
    <td><?php echo $row4['Answer35']; ?></td>
    <td><?php echo $row4['Image35']; ?></td>
</tr>


<tr>
    <td rowspan="6">Peralatan dan Mesin</td>
    <td>Susun atur kemas dan rapi</td>
    <td><?php echo $row4['Answer36']; ?></td>
    <td><?php echo $row4['Image36']; ?></td>
    <td rowspan="6"><?php echo $row4['Catatan19']; ?></td>
</tr>

<tr>
    <td>Mesin dan peralatan adalah bersih</td>
    <td><?php echo $row4['Answer37']; ?></td>
    <td><?php echo $row4['Image37']; ?></td>
</tr>

<tr>
  <td>Tiada barang yang tidak diperlukan berada di lokasi mesin</td>
  <td><?php echo $row4['Answer38']; ?></td>
  <td><?php echo $row4['Image38']; ?></td>
</tr>

<tr>
  <td>Berkeadaan baik serta aktiviti penyelenggaraan mesin</td>
  <td><?php echo $row4['Answer39']; ?></td>
  <td><?php echo $row4['Image39']; ?></td>
</tr>

<tr>
  <td>Penggunaan “Manual”, “Visual Control” sebagai panduan</td>
  <td><?php echo $row4['Answer40']; ?></td>
  <td><?php echo $row4['Image40']; ?></td>
</tr>

<tr>
  <td>Rekod penggunaan peralatan dan lain-lain</td>
  <td><?php echo $row4['Answer41']; ?></td>
<td><?php echo $row4['Image41']; ?></td>
</tr>

<tr>
  <td rowspan="2"> Bahan</td>
  <td>Dalam keadaan kemas dan teratur</td>
  <td><?php echo $row4['Answer42']; ?></td>
  <td><?php echo $row4['Image42']; ?></td>
  <td rowspan="2"><?php echo $row4['Catatan20']; ?></td>
</tr>

<tr>
  <td>Tanda label untuk mudah kesan</td>
  <td><?php echo $row4['Answer43']; ?></td>
  <td><?php echo $row4['Image43']; ?></td>
</tr>

<tr>
  <td rowspan="2">Tempat Rekod/Dokumen</td>
  <td>Kemas dan sistematik</td>
  <td><?php echo $row4['Answer44']; ?></td>
  <td><?php echo $row4['Image44']; ?></td>
  <td rowspan="2"><?php echo $row4['Catatan21']; ?></td>
</tr>

<tr>
  <td>Bersih dan item masih diperlukan</td>
  <td><?php echo $row4['Answer45']; ?></td>
  <td><?php echo $row4['Image45']; ?></td>
</tr>


<tr>
  <td rowspan="1">Maklumat Visual</td>
  <td>Bersih, kemas dan maklumat sentiasa kemaskini</td>
  <td><?php echo $row4['Answer46']; ?></td>
  <td><?php echo $row4['Image46']; ?></td>
  <td><?php echo $row4['Catatan22']; ?></td>
</tr>

<tr>
  <td rowspan="1">Keselamatan</td>
  <td>Aspek keselamatan diutamakan</td>
  <td><?php echo $row4['Answer47']; ?></td>
  <td><?php echo $row4['Image47']; ?></td>
  <td><?php echo $row4['Catatan23']; ?></td>
</tr>

<tr>
  <td rowspan="1">Seragam</td>
  <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”</td>
  <td><?php echo $row4['Answer48']; ?></td>
  <td><?php echo $row4['Image48']; ?></td>
  <td><?php echo $row4['Catatan24']; ?></td>
</tr>

<tr>
  <td rowspan="1">Sentiasa Amal</td>
  <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
  <td><?php echo $row4['Answer49']; ?></td>
  <td><?php echo $row4['Image49']; ?></td>
  <td><?php echo $row4['Catatan25']; ?></td>
</tr>

<tr>
  <td rowspan="1">Impak</td>
  <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos/Keselamatan/Moral/Inovasi)</td>
  <td><?php echo $row4['Answer50']; ?></td>
  <td><?php echo $row4['Image50']; ?></td>
  <td><?php echo $row4['Catatan26']; ?></td>
</tr>

<tr>
  <th colspan="3">JUMLAH MARKAH SEKSYEN 4</th>
  <th colspan="3"><?php echo $row4['CategorySection4_TotalMarks']; ?></th>
</tr>
<?php } ?>
</table><br><br>
<?php } ?>

<!-- Seksyen 5 -->

<table class="table table-hover  table-bordered align-center">

<th class="align-left" colspan="5">SEKSYEN 5: KAWASAN PERSEKITARAN LUARAN</th>
<?php

$sql5 = "SELECT * FROM qacategory_section5";
$result5 = $con->query($sql5); 

if ($result5->num_rows > 0) {
    // output data of each row

?>
<tr>
    <th> Kategori </th>
    <th> Soalan </th>
    <th> Markah</th>
    <th> Gambar</th> 
    <th> Catatan </th>         
</tr>
<?php while($row5 = mysqli_fetch_assoc($result5)){ ?>

<tr>
    <td rowspan="3">Pos Keselamatan</td>
    <td> Kawasan bersih dan tiada item tidak perlu</td>
    <td><?php echo $row5['Answer51']; ?></td>
    <td><?php echo $row5['Image51']; ?></td>
    <td rowspan="3"><?php echo $row5['Catatan27']; ?></td>
</tr>
<tr>

    <td>Kekemasan selesa dan memuaskan</td>
    <td><?php echo $row5['Answer52']; ?></td>
    <td><?php echo $row5['Image52']; ?></td>
</tr>
<tr>

    <td>Aspek keselamatan (kawalan) diutamakan</td>
    <td><?php echo $row5['Answer53']; ?></td>
    <td><?php echo $row5['Image53']; ?></td>
</tr>


<tr>
    <td rowspan="2">Landskap</td>
    <td>Kawasan bersih dan tiada item tidak perlu</td>
    <td><?php echo $row5['Answer54']; ?></td>
    <td><?php echo $row5['Image54']; ?></td>
    <td rowspan="2"><?php echo $row5['Catatan28']; ?></td>
</tr>

<tr>
    <td>Sentiasa terjaga dan kekemasan memuaskan</td>
    <td><?php echo $row5['Answer55']; ?></td>
    <td><?php echo $row5['Image55']; ?></td>
</tr>

<tr>
    <td rowspan="2">Tempat Pelupusan, Longkang, Kawasan Sisa Berjadual</td>
    <td>Mempunyai tempat pembuangan sisa yang memuaskan mengikut keperluan undang-undang</td>
    <td><?php echo $row5['Answer56']; ?></td>
    <td><?php echo $row5['Image56']; ?></td>
    <td rowspan="2"><?php echo $row5['Catatan29']; ?></td>
</tr>

<tr>
    <td>Sentiasa bersih, kemas dan terjaga</td>
    <td><?php echo $row5['Answer57']; ?></td>
    <td><?php echo $row5['Image57']; ?></td>
</tr>

<tr>
    <td rowspan="3">Papan Tanda, Pandu Arah</td>
    <td>Kedudukan yang strategik dan berfungsi dengan baik</td>
    <td><?php echo $row5['Answer58']; ?></td>
    <td><?php echo $row5['Image58']; ?></td>
    <td rowspan="3"><?php echo $row5['Catatan30']; ?></td>
</tr>

<tr>
    <td>Saiz yang sesuai, mudah difahami dan mudah dilihat</td>
    <td><?php echo $row5['Answer59']; ?></td>
    <td><?php echo $row5['Image59']; ?></td>
</tr>

<tr>
    <td>Wujud pandu arah dan garisan lot parkir yang jelas</td>
    <td><?php echo $row5['Answer60']; ?></td>
    <td><?php echo $row5['Image60']; ?></td>
</tr>

<tr>
    <td rowspan="3">Kawasan Parkir</td>
    <td>Kawasan yang bersih dan teratur</td>
    <td><?php echo $row5['Answer61']; ?></td>
    <td><?php echo $row5['Image61']; ?></td>
    <td rowspan="3"><?php echo $row5['Catatan31']; ?></td>
</tr>

<tr>
    <td>Landskap jika ada, tidak mengganggu dan sentiasa dalam keadaan kemas dan selesa untuk pengguna</td>
    <td><?php echo $row5['Answer62']; ?></td>
    <td><?php echo $row5['Image62']; ?></td>
</tr>

<tr>
    <td>Tiada bahan/barang yang tidak perlu di lokasi</td>
    <td><?php echo $row5['Answer63']; ?></td>
    <td><?php echo $row5['Image63']; ?></td>
</tr>

<tr>
    <td rowspan="1">Keselamatan</td>
    <td>Aspek keselamatan diutamakan</td>
    <td><?php echo $row5['Answer64']; ?></td>
    <td><?php echo $row5['Image64']; ?></td>
    <td><?php echo $row5['Catatan32']; ?></td>
</tr>

<tr>
    <td rowspan="1">Seragam</td>
    <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”</td>
    <td><?php echo $row5['Answer65']; ?></td>
    <td><?php echo $row5['Image65']; ?></td>
    <td><?php echo $row5['Catatan33']; ?></td>
</tr>

<tr>
    <td rowspan="1">Sentiasa Amal</td>
    <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
    <td><?php echo $row5['Answer66']; ?></td>
    <td><?php echo $row5['Image66']; ?></td>
    <td><?php echo $row5['Catatan34']; ?></td>
</tr>

<tr>
    <td rowspan="1">Impak</td>
    <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos/Keselamatan/Moral/Inovasi)</td>
    <td><?php echo $row5['Answer67']; ?></td>
    <td><?php echo $row5['Image67']; ?></td>
    <td><?php echo $row5['Catatan35']; ?></td>
</tr>

<tr>
    <th colspan="3">JUMLAH MARKAH SEKSYEN 5</th>
    <th colspan="3"><?php echo $row5['CategorySection5_TotalMarks']; ?></th>
</tr>
<?php } ?>
</table><br><br>
<?php } ?>

<!-- Seksyen 6 -->

<table class="table table-hover  table-bordered align-center">

<th class="align-left" colspan="5">SEKSYEN 6: TEMPAT UMUM</th>
<?php

$sql6 = "SELECT * FROM qacategory_section6";
$result6 = $con->query($sql6); 

if ($result6->num_rows > 0) {
    // output data of each row

?>
<tr>
    <th> Kategori </th>
    <th> Soalan </th>
    <th> Markah</th>
    <th> Gambar</th> 
    <th> Catatan </th>         
</tr>
<?php while($row6 = mysqli_fetch_assoc($result6)){ ?>

<tr>
    <td rowspan="2">Kaunter/Lobi/Koridor/Tangga</td>
    <td> Kawasan lantai/dinding bersih dan tiada item tidak perlu</td>
    <td><?php echo $row6['Answer68']; ?></td>
    <td><?php echo $row6['Image68'];  ?></td>
    <td rowspan="2"><?php echo $row6['Catatan36'];  ?></td>
</tr>
<tr>

    <td>Susunatur peralatan dan item kemas dan memuaskan</td>
    <td><?php echo $row6['Answer69'];  ?></td>
    <td><?php echo $row6['Image69'];  ?></td>
</tr>
<tr>


    <tr>
      <td rowspan="3">Bilik Mesyuarat/Bilik VIP</td>
      <td>Kawasan lantai dan dinding bersih dan tiada item tidak perlu</td>
      <td><?php echo $row6['Answer70'];  ?></td>
      <td><?php echo $row6['Image70'];  ?></td>
      <td rowspan="3"><?php echo $row6['Catatan37'];  ?></td>
  </tr>

  <tr>
      <td>Susun atur peralatan/item kemas dan memudahkan</td>
      <td><?php echo $row6['Answer71'];  ?></td>
      <td><?php echo $row6['Image71'];  ?></td>
  </tr>

  <td>Maklumat Visual dalam keadaan bersih dan kemas (etika,inventori,kawalan penggunaan dsb)</td>
  <td><?php echo $row6['Answer72'];  ?></td>
  <td><?php echo $row6['Image72'];  ?></td>
</tr>


<tr>
    <td rowspan="3">Bilik Latihan/Simulasi</td>
    <td>Kawasan bersih dan tiada item tidak perlu</td>
    <td><?php echo $row6['Answer73'];  ?></td>
    <td><?php echo $row6['Image73'];  ?></td>
    <td rowspan="3"><?php echo $row6['Catatan38'];  ?></td>
</tr>

<tr>
    <td>Susunatur peralatan/item kemas dan memudahkan</td>
    <td><?php echo $row6['Answer74']; ?></td>
    <td><?php echo $row6['Image74'];  ?></td>
</tr>

<tr>
    <td>Maklumat Visual dalam keadaan bersih dan kemas.(etika,inventori,kawalan penggunaan dsb)</td>
    <td><?php echo $row6['Answer75'];  ?></td>
    <td><?php echo $row6['Image75'];  ?></td>
</tr>

<tr>
    <td rowspan="3">Kantin/Pantri</td>
    <td>Kawasan lantai bersih dan tiada item tidak perlu</td>
    <td><?php echo $row6['Answer76'];  ?></td>
    <td><?php echo $row6['Image76'];  ?></td>
    <td rowspan="3"><?php echo $row6['Catatan39'];  ?></td>
</tr>

<tr>
    <td>Susun atur peralatan dan item kemas dan rapi</td>
    <td><?php echo $row6['Answer77'];  ?></td>
    <td><?php echo $row6['Image77'];  ?></td>
</tr>

<tr>
    <td>Peralatan dan bahan dalam keadaan baik dan bersih</td>
    <td><?php echo $row6['Answer78'];  ?></td>
    <td><?php echo $row6['Image78'];  ?></td>
</tr>

<tr>
    <td rowspan="3">Surau/Ruang Solat</td>
    <td>Kawasan yang bersih dan memuaskan</td>
    <td><?php echo $row6['Answer79'];  ?></td>
    <td><?php echo $row6['Image79'];  ?></td>
    <td rowspan="3"><?php echo $row6['Catatan40'];  ?></td>
</tr>

<tr>
    <td>Peralatan sentiasa dalam keadaan baik dan boleh digunakan</td>
    <td><?php echo $row6['Answer80'];  ?></td>
    <td><?php echo $row6['Image80'];  ?></td>
</tr>

<tr>
    <td>Tiada bahan yang tidak perlu di lokasi</td>
    <td><?php echo $row6['Answer81'];  ?></td>
    <td><?php echo $row6['Image81'];  ?></td>
</tr>

<tr>
    <td rowspan="3">Tandas/Bilik Mandi</td>
    <td>Kawasan yang bersih dan memuaskan</td>
    <td><?php echo $row6['Answer82'];  ?></td>
    <td><?php echo $row6['Image82'];  ?></td>
    <td rowspan="3"><?php echo $row6['Catatan41'];  ?></td>
</tr>

<tr>
    <td>Peralatan sentiasa dalam keadaan baik dan boleh digunakan</td>
    <td><?php echo $row6['Answer83'];  ?></td>
    <td><?php echo $row6['Image83'];  ?></td>
</tr>

<tr>
    <td>Tiada bahan yang tidak perlu di lokasi</td>
    <td><?php echo $row6['Answer84'];  ?></td>
    <td><?php echo $row6['Image84'];  ?></td>
</tr>

<tr>
    <td rowspan="3">Bilik Kecemasan/Bilik Rehat/Penginapan</td>
    <td>Kawasan yang bersih dan memuaskan</td>
    <td><?php echo $row6['Answer85'];  ?></td>
    <td><?php echo $row6['Image85'];  ?></td>
    <td rowspan="3"><?php echo $row6['Catatan42'];  ?></td>
</tr>

<tr>
    <td>Dalam keadaan kemas dan teratur</td>
    <td><?php echo $row6['Answer86'];  ?></td>
    <td><?php echo $row6['Image86'];  ?></td>
</tr>

<tr>
    <td>Tiada bahan yang tidak perlu di lokasi</td>
    <td><?php echo $row6['Answer87'];  ?></td>
    <td><?php echo $row6['Image87'];  ?></td>
</tr>

<tr>
    <td rowspan="3">Pusat Sumber</td>
    <td>Kawasan yang bersih dan memuaskan</td>
    <td><?php echo $row6['Answer88'];  ?></td>
    <td><?php echo $row6['Image88'];  ?></td>
    <td rowspan="3"><?php echo $row6['Catatan43'];  ?></td>
</tr>

<tr>
    <td>Dalam keadaan kemas dan teratur</td>
    <td><?php echo $row6['Answer89'];  ?></td>
    <td><?php echo $row6['Image89'];  ?></td>
</tr>

<tr>
    <td>Tiada bahan yang tidak perlu di lokasi</td>
    <td><?php echo $row6['Answer90'];  ?></td>
    <td><?php echo $row6['Image90'];  ?></td>
</tr>

<tr>
    <td rowspan="3">Dewan</td>
    <td>Kawasan lantai bersih dan tiada item tidak perlu</td>
    <td><?php echo $row6['Answer91'];  ?></td>
    <td><?php echo $row6['Image91'];  ?></td>
    <td rowspan="3"><?php echo $row6['Catatan44'];  ?></td>
</tr>

<tr>
    <td>Susun atur peralatan dan item kemas dan rapi</td>
    <td><?php echo $row6['Answer92'];  ?></td>
    <td><?php echo $row6['Image92'];  ?></td>
</tr>

<tr>
    <td>Peralatan dan bahan dalam keadaan baik dan bersih</td>
    <td><?php echo $row6['Answer93'];  ?></td>
    <td><?php echo $row6['Image93'];  ?></td>
</tr>

<tr>
    <td rowspan="3">Bilik Gimnasium</td>
    <td>Kawasan yang bersih dan memuaskan</td>
    <td><?php echo $row6['Answer94']; ?></td>
    <td><?php echo $row6['Image94'];  ?></td>
    <td rowspan="3"><?php echo $row6['Catatan45'];  ?></td>
</tr>

<tr>
    <td>Dalam keadaan kemas dan teratur</td>
    <td><?php echo $row6['Answer95'];  ?></td>
    <td><?php echo $row6['Image95']; ?></td>
</tr>

<tr>
    <td>Tiada bahan yang tidak perlu di lokasi</td>
    <td><?php echo $row6['Answer96']; ?></td>
    <td><?php echo $row6['Image96']; ?></td>
</tr>


<tr>
    <td rowspan="1">Keselamatan</td>
    <td>Aspek keselamatan diutamakan</td>
    <td><?php echo $row6['Answer79'];  ?></td>
    <td><?php echo $row6['Image97'];  ?></td>
    <td><?php echo $row6['Catatan46'];  ?></td>
</tr>

<tr>
    <td rowspan="1">Seragam</td>
    <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”</td>
    <td><?php echo $row6['Answer98']; ?></td>
    <td><?php echo $row6['Image98'];  ?></td>
    <td><?php echo $row6['Catatan47'];  ?></td>
</tr>

<tr>
    <td rowspan="1">Sentiasa Amal</td>
    <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
    <td><?php echo $row6['Answer99'];  ?></td>
    <td><?php echo $row6['Image99'];  ?></td>
    <td><?php echo $row6['Catatan48'];  ?></td>
</tr>

<tr>
    <td rowspan="1">Impak</td>
    <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos/Keselamatan/Moral/Inovasi)</td>
    <td><?php echo $row6['Answer100'];  ?></td>
    <td><?php echo $row6['Image100'];  ?></td>
    <td><?php echo $row6['Catatan49'];  ?></td>
</tr>

<tr>
    <th colspan="3">JUMLAH MARKAH SEKSYEN 6</th>
    <th colspan="3"><?php echo $row6['CategorySection6_TotalMarks'];  ?></th>
</tr>
<?php } ?>
</table><br><br>
<?php

if ($result6) 
{

  $SQL1 = "SELECT * FROM qacategory_section1";
  $R1 = mysqli_query($con, $SQL1);

  if ($ROW1 = mysqli_fetch_array($R1))  
  { 
    $S1 = $ROW1['CategorySection1_TotalMarks'];
        
  if($R1)
  {
    $SQL2 = "SELECT * FROM qacategory_section2";
    $R2 = mysqli_query($con, $SQL2);

    if ($ROW2 = mysqli_fetch_array($R2))  
    { 
    $S2 = $ROW2['CategorySection2_TotalMarks'];
        
    if($R2)
    {
      $SQL3 = "SELECT * FROM qacategory_section3";
      $R3 = mysqli_query($con, $SQL3);

      if ($ROW3 = mysqli_fetch_array($R3))  
      { 
      $S3 = $ROW3['CategorySection3_TotalMarks'];
          
      if($R3)
      {
        $SQL4 = "SELECT * FROM qacategory_section4";
        $R4 = mysqli_query($con, $SQL4);

        if ($ROW4 = mysqli_fetch_array($R4))  
        { 
        $S4 = $ROW4['CategorySection4_TotalMarks'];
            
        if($R4)
        {
          $SQL5 = "SELECT * FROM qacategory_section5";
          $R5 = mysqli_query($con, $SQL5);

          if ($ROW5 = mysqli_fetch_array($R5))  
          { 
          $S5 = $ROW5['CategorySection5_TotalMarks'];
              
          if($R5)
          {
            $SQL6 = "SELECT * FROM qacategory_section6";
            $R6 = mysqli_query($con, $SQL6);

            if ($ROW6 = mysqli_fetch_array($R6))  
            { 
            $S6 = $ROW6['CategorySection6_TotalMarks'];

            
  $overall = $S1 + $S2 + $S3 + $S4 + $S5 + $S6;
  $percentage = 0;

    if (isset($_POST['convert']))
    {
        $sql ="INSERT INTO qamarks (TotalMarks) VALUES ('$overall')"; 
        $r = mysqli_query($con, $sql);

        if($r)
        {
            $percentage = ($overall / 500) * 100;
        }
    }

} } } } } } } } } } } }

} ?>

<table class="table table-hover  table-bordered align-center">

    <tr>
        <th><b><h5>JUMLAH KESELURUHAN:</h5></b></th>
        <th><?php echo $overall ?></th>
        <th rowspan="2"><br><input type="submit" name="convert" value="Tukar markah ke peratus" align="center"></th>

    </tr>

    <tr>
        <th><b><h5>PERATUSAN:</h5></b></th>
        <th><?php echo $percentage?>%</th> 
    </tr>
    
</table><br>


<table class="table table-hover  table-bordered align-center">


  <th class="align-left">AUDITOR</th>
  <th class="align-left">WAKIL AUDITOR</th>   

  <tr>
    <td class="align-left">Nama:</td>
    <td class="align-left">Nama:</td>
</tr>

<tr>
    <td class="align-left">Tarikh:</td>
    <td class="align-left">Tarikh:</td>
</tr>
<tr>
    <td class="align-left">Cop Pengesahan:</td>
    <td class="align-left">Cop Pengesahan:</td>
</tr>
</td>

</table><br><br>
</form>
</div>
</div>

<div align="center">
    <a href="AdminReport.php"><input type="button" class="btn btn-secondary" value="Back"></a>
    <br><br><br><br>
</div>

<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
<input name="animation" type="hidden">


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