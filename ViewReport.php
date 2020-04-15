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
      $query = "SELECT * FROM qacategory_section1";  
      $result = mysqli_query($con, $query); 


      if ($row = mysqli_fetch_array($result))  
      { 
        $C1 = $row['Category1'];
        $C2 = $row['Category2'];
        $C3 = $row['Category3'];
        $S1 = $row['CategorySection1_TotalMarks'];
        $Image1 = $row['Image1'];
        $Image2 = $row['Image2'];
        $Image3 = $row['Image3'];
        $Catatan1 = $row['Catatan1'];
        $Catatan2 = $row['Catatan2'];
        $Catatan3 = $row['Catatan3'];

        if($result)
        {
          $query2 = "SELECT * FROM qacategory_section2";  
          $result2 = mysqli_query($con, $query2);  
          if ($row2 = mysqli_fetch_array($result2))  
          { 
            $A4 = $row2['Answer4'];
            $A5 = $row2['Answer5'];
            $A6 = $row2['Answer6'];
            $A7 = $row2['Answer7'];
            $A8 = $row2['Answer8'];
            $A9 = $row2['Answer9'];
            $A10 = $row2['Answer10'];
            $A11 = $row2['Answer11'];
            $A12 = $row2['Answer12'];
            $A13 = $row2['Answer13'];
            $A14 = $row2['Answer14'];
            $A15 = $row2['Answer15'];
            $A16 = $row2['Answer16'];
            $A17 = $row2['Answer17'];
            $A18 = $row2['Answer18'];
            $A19 = $row2['Answer19'];
            $C1S2 = $row2['Category1'];
            $C2S2 = $row2['Category2'];
            $C3S2 = $row2['Category3'];
            $C4S2 = $row2['Category4'];
            $C5S2 = $row2['Category5'];
            $C6S2 = $row2['Category6'];
            $C7S2 = $row2['Category7'];
            $C8S2 = $row2['Category8'];
            $C9S2 = $row2['Category9'];
            $S2 = $row2['CategorySection2_TotalMarks'];
            $Image4 = $row2['Image4'];
            $Image5 = $row2['Image5'];
            $Image6 = $row2['Image6'];
            $Image7 = $row2['Image7'];
            $Image8 = $row2['Image8'];
            $Image9 = $row2['Image9'];
            $Image10 = $row2['Image10'];
            $Image11 = $row2['Image11'];
            $Image12 = $row2['Image12'];
            $Image13 = $row2['Image13'];
            $Image14 = $row2['Image14'];
            $Image15 = $row2['Image15'];
            $Image16 = $row2['Image16'];
            $Image17 = $row2['Image17'];
            $Image18 = $row2['Image18'];
            $Image19 = $row2['Image19'];
            $Catatan4 = $row['Catatan4'];
            $Catatan5 = $row['Catatan5'];
            $Catatan6 = $row['Catatan6'];
            $Catatan7 = $row['Catatan7'];
            $Catatan8 = $row['Catatan8'];
            $Catatan9 = $row['Catatan9'];
            $Catatan10 = $row['Catatan10'];
            $Catatan11 = $row['Catatan11'];
            $Catatan12 = $row['Catatan12'];
        

            if($result2)
            {
              $query3 = "SELECT * FROM qacategory_section3";  
              $result3 = mysqli_query($con, $query3);  
              if ($row3 = mysqli_fetch_array($result3))  
              { 
                $A20 = $row3['Answer20'];
                $A21 = $row3['Answer21'];
                $A22 = $row3['Answer22'];
                $A23 = $row3['Answer23'];
                $A24 = $row3['Answer24'];
                $A25 = $row3['Answer25'];
                $A26 = $row3['Answer26'];
                $A27 = $row3['Answer27'];
                $A28 = $row3['Answer28'];
                $A29 = $row3['Answer29'];
                $A30 = $row3['Answer30'];
                $A31 = $row3['Answer31'];
                $A32 = $row3['Answer32'];
                $C1S3 = $row3['Category1'];
                $C2S3 = $row3['Category2'];
                $C3S3 = $row3['Category3'];
                $C4S3 = $row3['Category4'];
                $C5S3 = $row3['Category5'];
                $S3 = $row3['CategorySection3_TotalMarks'];
                $Image20 = $row3['Image20'];
                $Image21 = $row3['Image21'];
                $Image22 = $row3['Image22'];
                $Image23 = $row3['Image23'];
                $Image24 = $row3['Image24'];
                $Image25 = $row3['Image25'];
                $Image26 = $row3['Image26'];
                $Image27 = $row3['Image27'];
                $Image28 = $row3['Image28'];
                $Image29 = $row3['Image29'];
                $Image30 = $row3['Image30'];
                $Image31 = $row3['Image31'];
                $Image32 = $row3['Image32'];
                $Catatan13 = $row['Catatan13'];
                $Catatan14 = $row['Catatan14'];
                $Catatan15 = $row['Catatan15'];
                $Catatan16 = $row['Catatan16'];
                $Catatan17 = $row['Catatan17'];

                if($result3)
                {
                  $query4 = "SELECT * FROM qacategory_section4";  
                  $result4 = mysqli_query($con, $query4);  
                  if ($row4 = mysqli_fetch_array($result4))  
                  { 
                    $A33 = $row4['Answer33'];
                    $A34 = $row4['Answer34'];
                    $A35 = $row4['Answer35'];
                    $A36 = $row4['Answer36'];
                    $A37 = $row4['Answer37'];
                    $A38 = $row4['Answer38'];
                    $A39 = $row4['Answer39'];
                    $A40 = $row4['Answer40'];
                    $A41 = $row4['Answer41'];
                    $A42 = $row4['Answer42'];
                    $A43 = $row4['Answer43'];
                    $A44 = $row4['Answer44'];
                    $A45 = $row4['Answer45'];
                    $A46 = $row4['Answer46'];
                    $A47 = $row4['Answer47'];
                    $A48 = $row4['Answer48'];
                    $A49 = $row4['Answer49'];
                    $A50 = $row4['Answer50'];
                    $C1S4 = $row4['Category1'];
                    $C2S4 = $row4['Category2'];
                    $C3S4 = $row4['Category3'];
                    $C4S4 = $row4['Category4'];
                    $C5S4 = $row4['Category5'];
                    $C6S4 = $row4['Category6'];
                    $C7S4 = $row4['Category7'];
                    $C8S4 = $row4['Category8'];
                    $C9S4 = $row4['Category9'];
                    $S4 = $row4['CategorySection4_TotalMarks'];
                    $Image33 = $row4['Image33'];
                    $Image34 = $row4['Image34'];
                    $Image35 = $row4['Image35'];
                    $Image36 = $row4['Image36'];
                    $Image37 = $row4['Image37'];
                    $Image38 = $row4['Image38'];
                    $Image39 = $row4['Image39'];
                    $Image40 = $row4['Image40'];
                    $Image41 = $row4['Image41'];
                    $Image42 = $row4['Image42'];
                    $Image43 = $row4['Image43'];
                    $Image44 = $row4['Image44'];
                    $Image45 = $row4['Image45'];
                    $Image46 = $row4['Image46'];
                    $Image47 = $row4['Image47'];
                    $Image48 = $row4['Image48'];
                    $Image49 = $row4['Image49'];
                    $Image50 = $row4['Image50'];
                    $Catatan18 = $row['Catatan18'];
                    $Catatan19 = $row['Catatan19'];
                    $Catatan20 = $row['Catatan20'];
                    $Catatan21 = $row['Catatan21'];
                    $Catatan22 = $row['Catatan22'];
                    $Catatan23 = $row['Catatan23'];
                    $Catatan24 = $row['Catatan24'];
                    $Catatan25 = $row['Catatan25'];
                    $Catatan26 = $row['Catatan26'];

                    if($result4)
                    {
                      $query5 = "SELECT * FROM qacategory_section5";  
                      $result5 = mysqli_query($con, $query5);  
                      if ($row5 = mysqli_fetch_array($result5))  
                      { 
                        $A51 = $row5['Answer51'];
                        $A52 = $row5['Answer52'];
                        $A53 = $row5['Answer53'];
                        $A54 = $row5['Answer54'];
                        $A55 = $row5['Answer55'];
                        $A56 = $row5['Answer56'];
                        $A57 = $row5['Answer57'];
                        $A58 = $row5['Answer58'];
                        $A59 = $row5['Answer59'];
                        $A60 = $row5['Answer60'];
                        $A61 = $row5['Answer61'];
                        $A62 = $row5['Answer62'];
                        $A63 = $row5['Answer63'];
                        $A64 = $row5['Answer64'];
                        $A65 = $row5['Answer65'];
                        $A66 = $row5['Answer66'];
                        $A67 = $row5['Answer67'];
                        $C1S5 = $row5['Category1'];
                        $C2S5 = $row5['Category2'];
                        $C3S5 = $row5['Category3'];
                        $C4S5 = $row5['Category4'];
                        $C5S5 = $row5['Category5'];
                        $C6S5 = $row5['Category6'];
                        $C7S5 = $row5['Category7'];
                        $C8S5 = $row5['Category8'];
                        $C9S5 = $row5['Category9'];
                        $S5 = $row5['CategorySection5_TotalMarks'];
                        $Image51 = $row5['Image51'];
                        $Image52 = $row5['Image52'];
                        $Image53 = $row5['Image53'];
                        $Image54 = $row5['Image54'];
                        $Image55 = $row5['Image55'];
                        $Image56 = $row5['Image56'];
                        $Image57 = $row5['Image57'];
                        $Image58 = $row5['Image58'];
                        $Image59 = $row5['Image59'];
                        $Image60 = $row5['Image60'];
                        $Image61 = $row5['Image61'];
                        $Image62 = $row5['Image62'];
                        $Image63 = $row5['Image63'];
                        $Image64 = $row5['Image64'];
                        $Image65 = $row5['Image65'];
                        $Image66 = $row5['Image66'];
                        $Image67 = $row5['Image67'];
                        $Catatan27 = $row['Catatan27'];
                        $Catatan28 = $row['Catatan28'];
                        $Catatan29 = $row['Catatan29'];
                        $Catatan30 = $row['Catatan30'];
                        $Catatan31 = $row['Catatan31'];
                        $Catatan32 = $row['Catatan32'];
                        $Catatan33 = $row['Catatan33'];
                        $Catatan34 = $row['Catatan34'];
                        $Catatan35 = $row['Catatan35'];

                        if($result5)
                        {
                          $query6 = "SELECT * FROM qacategory_section6";  
                          $result6 = mysqli_query($con, $query6);  
                          if ($row6 = mysqli_fetch_array($result6))  
                          { 
                            $A68 = $row6['Answer68'];
                            $A69 = $row6['Answer69'];
                            $A70 = $row6['Answer70'];
                            $A71 = $row6['Answer71'];
                            $A72 = $row6['Answer72'];
                            $A73 = $row6['Answer73'];
                            $A74 = $row6['Answer74'];
                            $A75 = $row6['Answer75'];
                            $A76 = $row6['Answer76'];
                            $A77 = $row6['Answer77'];
                            $A78 = $row6['Answer78'];
                            $A79 = $row6['Answer79'];
                            $A80 = $row6['Answer80'];
                            $A81 = $row6['Answer81'];
                            $A82 = $row6['Answer82'];
                            $A83 = $row6['Answer83'];
                            $A84 = $row6['Answer84'];
                            $A85 = $row6['Answer85'];
                            $A86 = $row6['Answer86'];
                            $A87 = $row6['Answer87'];
                            $A88 = $row6['Answer88'];
                            $A89 = $row6['Answer89'];
                            $A90 = $row6['Answer90'];
                            $A91 = $row6['Answer91'];
                            $A92 = $row6['Answer92'];
                            $A93 = $row6['Answer93'];
                            $A94 = $row6['Answer94'];
                            $A95 = $row6['Answer95'];
                            $A96 = $row6['Answer96'];
                            $A97 = $row6['Answer97'];
                            $A98 = $row6['Answer98'];
                            $A99 = $row6['Answer99'];
                            $A100 = $row6['Answer100'];
                            $C1S6 = $row6['Category1'];
                            $C2S6 = $row6['Category2'];
                            $C3S6 = $row6['Category3'];
                            $C4S6 = $row6['Category4'];
                            $C5S6 = $row6['Category5'];
                            $C6S6 = $row6['Category6'];
                            $C7S6 = $row6['Category7'];
                            $C8S6 = $row6['Category8'];
                            $C9S6 = $row6['Category9'];
                            $C10S6 = $row6['Category10'];
                            $C11S6 = $row6['Category11'];
                            $C12S6 = $row6['Category12'];
                            $C13S6 = $row6['Category13'];
                            $C14S6 = $row6['Category14'];
                            $S6 = $row6['CategorySection6_TotalMarks'];
                            $Image68 = $row6['Image68'];
                            $Image69 = $row6['Image69'];
                            $Image70 = $row6['Image70'];
                            $Image71 = $row6['Image71'];
                            $Image72 = $row6['Image72'];
                            $Image73 = $row6['Image73'];
                            $Image74 = $row6['Image74'];
                            $Image75 = $row6['Image75'];
                            $Image76 = $row6['Image76'];
                            $Image77 = $row6['Image77'];
                            $Image78 = $row6['Image78'];
                            $Image79 = $row6['Image79'];
                            $Image80 = $row6['Image80'];
                            $Image81 = $row6['Image81'];
                            $Image82 = $row6['Image82'];
                            $Image83 = $row6['Image83'];
                            $Image84 = $row6['Image84'];
                            $Image85 = $row6['Image85'];
                            $Image86 = $row6['Image86'];
                            $Image87 = $row6['Image87'];
                            $Image88 = $row6['Image88'];
                            $Image89 = $row6['Image89'];
                            $Image90 = $row6['Image90'];
                            $Image91 = $row6['Image91'];
                            $Image92 = $row6['Image92'];
                            $Image93 = $row6['Image93'];
                            $Image94 = $row6['Image94'];
                            $Image95 = $row6['Image95'];
                            $Image96 = $row6['Image96'];
                            $Image97 = $row6['Image97'];
                            $Image98 = $row6['Image98'];
                            $Image99 = $row6['Image99'];
                            $Image100 = $row6['Image100'];
                            $Catatan36 = $row['Catatan36'];
                            $Catatan37 = $row['Catatan37'];
                            $Catatan38 = $row['Catatan38'];
                            $Catatan39 = $row['Catatan39'];
                            $Catatan40 = $row['Catatan40'];
                            $Catatan41 = $row['Catatan41'];
                            $Catatan42 = $row['Catatan42'];
                            $Catatan43 = $row['Catatan43'];
                            $Catatan44 = $row['Catatan44'];
                            $Catatan45 = $row['Catatan45'];
                            $Catatan46 = $row['Catatan46'];
                            $Catatan47 = $row['Catatan47'];
                            $Catatan48 = $row['Catatan48'];
                            $Catatan49 = $row['Catatan49'];

                            if ($result6) 
                            {

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

                        }
                    }      
                }
            }          
        }          
    }
}
}
}  
}
}
}
?> 
<tr>
    <th> Kategori </th>
    <th> Soalan </th>
    <th> Markah</th>
    <th> Gambar</th> 
    <th> Catatan </th>         
</tr>

<tr>
    <td>Fail Program</td>
    <td> Maklumat Lengkap dan Terkini (Merujuk pada Senarai Semak Dokumen)</td>

    <td> <?php echo $C1 ?></td>
    <td><?php echo $Image1 ?></td>
    <td><?php echo $Catatan1 ?></td>
</tr>

<tr>
    <td>Sudut 5S</td>
    <td>Maklumat Lengkap dan Terkini (Merujuk pada Senarai Semak Dokumen)</td>
    <td><?php echo $C2 ?></td>
    <td><?php echo $Image1 ?></td>
    <td><?php echo $Catatan2 ?></td>
</tr>


<tr>
    <td> Kaizen</td>
    <td>Penambahbaikan, Kreativiti dan Inovasi</td>
    <td> <?php echo $C3 ?></td>
    <td></td>
    <td><?php echo $Catatan3 ?></td>
</tr>



<tr>
    <th colspan="3">JUMLAH MARKAH SEKSYEN 1</th>
    <th colspan="2"><?php echo $S1 ?></th>
</tr>
</table><br><br>


<!--  Seksyen 2 -->
<table class="table table-hover  table-bordered align-center">

  <th class="align-left" colspan="5"> SEKSYEN 2: RUANG PEJABAT</th>
  <tr>
    <th> Kategori </th>
    <th> Soalan </th>
    <th> Markah</th>
    <th> Gambar</th>  
    <th> Catatan </th>        
</tr>

<tr>
    <td rowspan="3">Tempat Individu</td>
    <td> Susun atur kemas dan sistematik</td>
    <td><?php echo $A4 ?></td>
    <td><?php echo $Image4 ?></td>
    <td rowspan="3"><?php echo $Catatan4 ?></td>
</tr>

<tr>

    <td> Bersih dan tiada kotoran</td>
    <td><?php echo $A5 ?></td>
    <td><?php echo $Image5 ?></td>
</tr>
<tr>

    <td> Item dalam keadaan minima/tiada item tidak perlu</td>
    <td><?php echo $A6 ?></td>
    <td><?php echo $Image6 ?></td>
</tr>

<tr>
    <td rowspan="2">Siling/Lantai
    /Dinding</td>
    <td>Susun atur kemas dan sistematik</td>
    <td><?php echo $A7 ?></td>
    <td><?php echo $Image7 ?></td>
    <td rowspan="2"><?php echo $Catatan5 ?></td>
</tr>
<tr>
    <td>Bersih dan tiada kotoran</td>
    <td><?php echo $A8 ?></td>
    <td><?php echo $Image8 ?></td>
</tr>

<tr>
    <td rowspan="2"> Peralatan
    /Perkakas</td>
    <td>Kemas dan tersimpan di tempat asal</td>
    <td><?php echo $A9 ?></td>
    <td><?php echo $Image9 ?></td>
    <td rowspan="2"><?php echo $Catatan6 ?></td>
</tr>
<tr>
    <td>Bersih, tidak berdebu dan berfungsi baik</td>
    <td><?php echo $A10 ?></td>
    <td><?php echo $Image10 ?></td>
</tr>

<tr>
    <td rowspan="3">Tempat Fail/Rekod/Dokumen</td>
    <td> Kedudukan fail teratur dan kemas</td>
    <td><?php echo $A11 ?></td>
    <td><?php echo $Image11 ?></td>
    <td rowspan="3"><?php echo $Catatan7 ?></td>
</tr>
<tr>
    <td> Mudah dicari dan dikesan dengan mewujudkan pelabelan dan indeks kedudukan fail</td>
    <td><?php echo $A12 ?></td>
    <td><?php echo $Image12 ?></td>
</tr>

<tr>
    <td>Kabinet rak fail adalah bersih dan tidak berhabuk</td>
    <td><?php echo $A13 ?></td>
    <td><?php echo $Image13 ?></td>
</tr>

<tr>
    <td>Maklumat Visual</td>
    <td>Kemas, bersih dan terkini</td>
    <td><?php echo $A14 ?></td>
    <td><?php echo $Image14 ?></td>
    <td><?php echo $Catatan8 ?></td>
</tr>

<tr>
    <td rowspan="2"> Keselamatan</td>
    <td>Aspek keselamatan diutamakan</td>
    <td><?php echo $A15 ?></td>
    <td><?php echo $Image15 ?></td>
    <td rowspan="2"><?php echo $Catatan9 ?></td>
</tr>

<tr>
    <td>Kawalan visual dan ciri keselamatan mencukupi</td>
    <td><?php echo $A16 ?></td>
    <td><?php echo $Image16 ?></td>
</tr>

<tr>
    <td> Seragam</td>
    <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership</td>
    <td><?php echo $A17 ?></td>
    <td><?php echo $Image17 ?></td>
    <td><?php echo $Catatan10 ?></td>
</tr>

<tr>
    <td> Sentiasa Amal</td>
    <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
    <td><?php echo $A18 ?></td>
    <td><?php echo $Image18 ?></td>
    <td><?php echo $Catatan11 ?></td>
</tr>

<tr>
    <td> Impak</td>
    <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
    <td><?php echo $A19 ?></td>
    <td><?php echo $Image19 ?></td>
    <td><?php echo $Catatan12 ?></td>
</tr>

<tr>
    <th colspan="3">JUMLAH MARKAH SEKSYEN 2</th>
    <th colspan="2"><?php echo $S2 ?></th>
</tr>
</table><br><br>

<!-- Seksyen 3 -->

<table class="table table-hover  table-bordered align-center">

  <th class="align-left" colspan="5" >SEKSYEN 3: STOR (FAIL, BAHAN, ALAT GANTI, UNIFORM & SEBAGAINYA)</th>
  <tr>
    <th> Kategori </th>
    <th> Soalan </th>
    <th> Markah</th>
    <th> Gambar</th>  
    <th> Catatan </th>        
</tr>

<tr>
    <td rowspan="7">Tempat Simpanan</td>
    <td> Keadaan tersusun, kemas dan teratur</td>
    <td><?php echo $A20 ?></td>
    <td><?php echo $Image20 ?></td>
    <td rowspan="7"><?php echo $Catatan13 ?></td>
</tr>
<tr>

    <td> Kawasan lantai bersih</td>
    <td><?php echo $A21 ?></td>
    <td><?php echo $Image21 ?></td>
</tr>
<tr>

    <td> Terdapat tanda 'label' bagi tiap-tiap bahan/rekod</td>
    <td><?php echo $A22 ?></td>
    <td><?php echo $Image22 ?></td>
</tr>

<td> Mempunyai sistem susunan yang teratur dan mudah untuk diambil (seperti rak-rak) bila diperlukan</td>
<td><?php echo $A23 ?></td>
<td><?php echo $Image23 ?></td>
</tr>

<td> Tidak terdapat bahan/item yang tidak diperlukan</td>
<td><?php echo $A24 ?></td>
<td><?php echo $Image24 ?></td>
</tr>

<td> Terdapat “layout plan” sebagai panduan</td>
<td><?php echo $A25 ?></td>
<td><?php echo $Image25 ?></td>
</tr>

<td> Wujud rekod keluar masuk pergerakan bahan</td>
<td><?php echo $A26 ?></td>
<td><?php echo $Image26 ?></td>
</tr>

<tr>
  <td rowspan="2">Keselamatan</td>
  <td>Aspek keselamatan diutamakan</td>
  <td><?php echo $A27 ?></td>
  <td><?php echo $Image27 ?></td>
  <td rowspan="2"><?php echo $Catatan14 ?></td>
</tr>
<tr>
  <td>Kawalan visual dan ciri keselamatan mencukupi</td>
  <td><?php echo $A28 ?></td>
  <td><?php echo $Image28 ?></td>
</tr>

<tr>
  <td rowspan="2"> Seragam</td>
  <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”</td>
  <td><?php echo $A29 ?></td>
  <td><?php echo $Image29 ?></td>
  <td rowspan="2"><?php echo $Catatan15 ?></td>
</tr>

<tr>
  <td>Penggunaan Red Tag yang betul dan sesuai</td>
  <td><?php echo $A30 ?></td>
  <td><?php echo $Image30 ?></td>
</tr>

<tr>
  <td rowspan="1">Sentiasa Amal</td>
  <td> Kerjasama dan sikap positif untuk amalan berterusan</td>
  <td><?php echo $A31 ?></td>
  <td><?php echo $Image31 ?></td>
  <td><?php echo $Catatan16 ?></td>
</tr>


<tr>
  <td rowspan="1"> Impak</td>
  <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos /Keselamatan/Moral/Inovasi)</td>
  <td><?php echo $A32 ?></td>
  <td><?php echo $Image32 ?></td>
  <td><?php echo $Catatan17 ?></td>
</tr>

<tr>
  <th colspan="3">JUMLAH MARKAH SEKSYEN 3</th>
  <th colspan="2"><?php echo $S3 ?></th>
</tr>
</table><br><br>

<!-- Seksyen 4 -->

<table class="table table-hover  table-bordered align-center">

  <th class="align-left" colspan="5" >SEKSYEN 4: OPERASI
  (BENGKEL PENYELENGGARAAN AM, PAM MINYAK, “WASHING BAY”, BILIK KAWALAN, BILIK KIRAAN & SEBAGAINYA)</th>
  <tr>
    <th> Kategori </th>
    <th> Soalan </th>
    <th> Markah</th>
    <th> Gambar</th>  
    <th> Catatan</th>        
</tr>

<tr>
    <td rowspan="3">Lantai/Dinding</td>
    <td> Lantai bersih, kemas dan tidak licin</td>
    <td><?php echo $A33 ?></td>
    <td><?php echo $Image33 ?></td>
    <td rowspan="3"><?php echo $Catatan14 ?></td>
</tr>
<tr>

    <td> Keadaan kemas dan rapi</td>
    <td><?php echo $A34 ?></td>
    <td><?php echo $Image34 ?></td>
</tr>
<tr>

    <td> Tiada barang yang tidak diperlukan</td>
    <td><?php echo $A35 ?></td>
    <td><?php echo $Image35 ?></td>
</tr>


<tr>
    <td rowspan="6">Peralatan dan Mesin</td>
    <td>Susun atur kemas dan rapi</td>
    <td><?php echo $A36 ?></td>
    <td><?php echo $Image36 ?></td>
    <td rowspan="6"><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td>Mesin dan peralatan adalah bersih</td>
    <td><?php echo $A37 ?></td>
    <td><?php echo $Image37 ?></td>
</tr>

<td>Tiada barang yang tidak diperlukan berada di lokasi mesin</td>
<td><?php echo $A38 ?></td>
<td><?php echo $Image38 ?></td>
</tr>

<td>Berkeadaan baik serta aktiviti penyelenggaraan mesin</td>
<td><?php echo $A39 ?></td>
<td><?php echo $Image39 ?></td>
</tr>

<td>Penggunaan “Manual”, “Visual Control” sebagai panduan</td>
<td><?php echo $A40 ?></td>
<td><?php echo $Image40 ?></td>
</tr>

<td>Rekod penggunaan peralatan dan lain-lain</td>
<td><?php echo $A41 ?></td>
<td><?php echo $Image41 ?></td>
</tr>

<tr>
  <td rowspan="2"> Bahan</td>
  <td>Dalam keadaan kemas dan teratur</td>
  <td><?php echo $A42 ?></td>
  <td><?php echo $Image42 ?></td>
  <td rowspan="2"><?php echo $Catatan14 ?></td>
</tr>

<tr>
  <td>Tanda label untuk mudah kesan</td>
  <td><?php echo $A43 ?></td>
  <td><?php echo $Image43 ?></td>
</tr>

<tr>
  <td rowspan="2">Tempat Rekod/Dokumen</td>
  <td>Kemas dan sistematik</td>
  <td><?php echo $A44 ?></td>
  <td><?php echo $Image44 ?></td>
  <td rowspan="2"><?php echo $Catatan14 ?></td>
</tr>

<tr>
  <td>Bersih dan item masih diperlukan</td>
  <td><?php echo $A45 ?></td>
  <td><?php echo $Image45 ?></td>
</tr>


<tr>
  <td rowspan="1">Maklumat Visual</td>
  <td>Bersih, kemas dan maklumat sentiasa kemaskini</td>
  <td><?php echo $A46 ?></td>
  <td><?php echo $Image46 ?></td>
  <td><?php echo $Catatan14 ?></td>
</tr>

<tr>
  <td rowspan="1">Keselamatan</td>
  <td>Aspek keselamatan diutamakan</td>
  <td><?php echo $A47 ?></td>
  <td><?php echo $Image47 ?></td>
  <td><?php echo $Catatan14 ?></td>
</tr>

<tr>
  <td rowspan="1">Seragam</td>
  <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”</td>
  <td><?php echo $A48 ?></td>
  <td><?php echo $Image48 ?></td>
  <td><?php echo $Catatan14 ?></td>
</tr>

<tr>
  <td rowspan="1">Sentiasa Amal</td>
  <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
  <td><?php echo $A49 ?></td>
  <td><?php echo $Image49 ?></td>
  <td><?php echo $Catatan14 ?></td>
</tr>

<tr>
  <td rowspan="1">Impak</td>
  <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos/Keselamatan/Moral/Inovasi)</td>
  <td><?php echo $A50 ?></td>
  <td><?php echo $Image50 ?></td>
  <td><?php echo $Catatan14 ?></td>
</tr>

<tr>
  <th colspan="3">JUMLAH MARKAH SEKSYEN 4</th>
  <th colspan="3"><?php echo $S4 ?></th>
</tr>

</table><br><br>

<!-- Seksyen 5 -->

<table class="table table-hover  table-bordered align-center">

  <th class="align-left" colspan="5">SEKSYEN 5: KAWASAN PERSEKITARAN LUARAN</th>
  <tr>
    <th> Kategori </th>
    <th> Soalan </th>
    <th> Markah</th>
    <th> Gambar</th>  
    <th> Catatan</th>        
</tr>

<tr>
    <td rowspan="3">Pos Keselamatan</td>
    <td> Kawasan bersih dan tiada item tidak perlu</td>
    <td><?php echo $A51 ?></td>
    <td><?php echo $Image51 ?></td>
    <td rowspan="3"><?php echo $Catatan14 ?></td>
</tr>
<tr>

    <td>Kekemasan selesa dan memuaskan</td>
    <td><?php echo $A52 ?></td>
    <td><?php echo $Image52 ?></td>
</tr>
<tr>

    <td>Aspek keselamatan (kawalan) diutamakan</td>
    <td><?php echo $A53 ?></td>
    <td><?php echo $Image53 ?></td>
</tr>


<tr>
    <td rowspan="2">Landskap</td>
    <td>Kawasan bersih dan tiada item tidak perlu</td>
    <td><?php echo $A54 ?></td>
    <td><?php echo $Image54 ?></td>
    <td rowspan="2"><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td>Sentiasa terjaga dan kekemasan memuaskan</td>
    <td><?php echo $A55 ?></td>
    <td><?php echo $Image55 ?></td>
</tr>

<tr>
    <td rowspan="2">Tempat Pelupusan, Longkang, Kawasan Sisa Berjadual</td>
    <td>Mempunyai tempat pembuangan sisa yang memuaskan mengikut keperluan undang-undang</td>
    <td><?php echo $A56 ?></td>
    <td><?php echo $Image56 ?></td>
    <td rowspan="2"><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td>Sentiasa bersih, kemas dan terjaga</td>
    <td><?php echo $A57 ?></td>
    <td><?php echo $Image57 ?></td>
</tr>

<tr>
    <td rowspan="3">Papan Tanda, Pandu Arah</td>
    <td>Kedudukan yang strategik dan berfungsi dengan baik</td>
    <td><?php echo $A58 ?></td>
    <td><?php echo $Image58 ?></td>
    <td rowspan="3"><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td>Saiz yang sesuai, mudah difahami dan mudah dilihat</td>
    <td><?php echo $A59 ?></td>
    <td><?php echo $Image59 ?></td>
</tr>

<tr>
    <td>Wujud pandu arah dan garisan lot parkir yang jelas</td>
    <td><?php echo $A60 ?></td>
    <td><?php echo $Image60 ?></td>
</tr>

<tr>
    <td rowspan="3">Kawasan Parkir</td>
    <td>Kawasan yang bersih dan teratur</td>
    <td><?php echo $A61 ?></td>
    <td><?php echo $Image61 ?></td>
    <td rowspan="3"><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td>Landskap jika ada, tidak mengganggu dan sentiasa dalam keadaan kemas dan selesa untuk pengguna</td>
    <td><?php echo $A62 ?></td>
    <td><?php echo $Image62 ?></td>
</tr>

<tr>
    <td>Tiada bahan/barang yang tidak perlu di lokasi</td>
    <td><?php echo $A63 ?></td>
    <td><?php echo $Image63 ?></td>
</tr>

<tr>
    <td rowspan="1">Keselamatan</td>
    <td>Aspek keselamatan diutamakan</td>
    <td><?php echo $A64 ?></td>
    <td><?php echo $Image64 ?></td>
    <td><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td rowspan="1">Seragam</td>
    <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”</td>
    <td><?php echo $A65 ?></td>
    <td><?php echo $Image65 ?></td>
    <td><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td rowspan="1">Sentiasa Amal</td>
    <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
    <td><?php echo $A66 ?></td>
    <td><?php echo $Image66 ?></td>
    <td><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td rowspan="1">Impak</td>
    <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos/Keselamatan/Moral/Inovasi)</td>
    <td><?php echo $A67 ?></td>
    <td><?php echo $Image67 ?></td>
    <td><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <th colspan="3">JUMLAH MARKAH SEKSYEN 5</th>
    <th colspan="3"><?php echo $S5 ?></th>
</tr>
</table><br><br>

<!-- Seksyen 6 -->

<table class="table table-hover  table-bordered align-center">

  <th class="align-left" colspan="5">SEKSYEN 6: TEMPAT UMUM</th>
  <tr>
    <th> Kategori </th>
    <th> Soalan </th>
    <th> Markah</th>
    <th> Gambar</th>
    <th> Catatan</th>          
</tr>

<tr>
    <td rowspan="2">Kaunter/Lobi/Koridor/Tangga</td>
    <td> Kawasan lantai/dinding bersih dan tiada item tidak perlu</td>
    <td><?php echo $A68 ?></td>
    <td><?php echo $Image68 ?></td>
    <td rowspan="2"><?php echo $Catatan14 ?></td>
</tr>
<tr>

    <td>Susunatur peralatan dan item kemas dan memuaskan</td>
    <td><?php echo $A69 ?></td>
    <td><?php echo $Image69 ?></td>
</tr>
<tr>


    <tr>
      <td rowspan="3">Bilik Mesyuarat/Bilik VIP</td>
      <td>Kawasan lantai dan dinding bersih dan tiada item tidak perlu</td>
      <td><?php echo $A70 ?></td>
      <td><?php echo $Image70 ?></td>
      <td rowspan="3"><?php echo $Catatan14 ?></td>
  </tr>

  <tr>
      <td>Susun atur peralatan/item kemas dan memudahkan</td>
      <td><?php echo $A71 ?></td>
      <td><?php echo $Image71 ?></td>
  </tr>

  <td>Maklumat Visual dalam keadaan bersih dan kemas (etika,inventori,kawalan penggunaan dsb)</td>
  <td><?php echo $A72 ?></td>
  <td><?php echo $Image72 ?></td>
</tr>


<tr>
    <td rowspan="3">Bilik Latihan/Simulasi</td>
    <td>Kawasan bersih dan tiada item tidak perlu</td>
    <td><?php echo $A73 ?></td>
    <td><?php echo $Image73 ?></td>
    <td rowspan="3"><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td>Susunatur peralatan/item kemas dan memudahkan</td>
    <td><?php echo $A74 ?></td>
    <td><?php echo $Image74 ?></td>
</tr>

<tr>
    <td>Maklumat Visual dalam keadaan bersih dan kemas.(etika,inventori,kawalan penggunaan dsb)</td>
    <td><?php echo $A75 ?></td>
    <td><?php echo $Image75 ?></td>
</tr>

<tr>
    <td rowspan="3">Kantin/Pantri</td>
    <td>Kawasan lantai bersih dan tiada item tidak perlu</td>
    <td><?php echo $A76 ?></td>
    <td><?php echo $Image76 ?></td>
    <td rowspan="3"><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td>Susun atur peralatan dan item kemas dan rapi</td>
    <td><?php echo $A77 ?></td>
    <td><?php echo $Image77 ?></td>
</tr>

<tr>
    <td>Peralatan dan bahan dalam keadaan baik dan bersih</td>
    <td><?php echo $A78 ?></td>
    <td><?php echo $Image78 ?></td>
</tr>

<tr>
    <td rowspan="3">Surau/Ruang Solat</td>
    <td>Kawasan yang bersih dan memuaskan</td>
    <td><?php echo $A79 ?></td>
    <td><?php echo $Image79 ?></td>
    <td rowspan="3"><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td>Peralatan sentiasa dalam keadaan baik dan boleh digunakan</td>
    <td><?php echo $A80 ?></td>
    <td><?php echo $Image80 ?></td>
</tr>

<tr>
    <td>Tiada bahan yang tidak perlu di lokasi</td>
    <td><?php echo $A81 ?></td>
    <td><?php echo $Image81 ?></td>
</tr>

<tr>
    <td rowspan="3">Tandas/Bilik Mandi</td>
    <td>Kawasan yang bersih dan memuaskan</td>
    <td><?php echo $A82 ?></td>
    <td><?php echo $Image82 ?></td>
    <td rowspan="3"><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td>Peralatan sentiasa dalam keadaan baik dan boleh digunakan</td>
    <td><?php echo $A83 ?></td>
    <td><?php echo $Image83 ?></td>
</tr>

<tr>
    <td>Tiada bahan yang tidak perlu di lokasi</td>
    <td><?php echo $A84 ?></td>
    <td><?php echo $Image84 ?></td>
</tr>

<tr>
    <td rowspan="3">Bilik Kecemasan/Bilik Rehat/Penginapan</td>
    <td>Kawasan yang bersih dan memuaskan</td>
    <td><?php echo $A85 ?></td>
    <td><?php echo $Image85 ?></td>
    <td rowspan="3"><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td>Dalam keadaan kemas dan teratur</td>
    <td><?php echo $A86 ?></td>
    <td><?php echo $Image86 ?></td>
</tr>

<tr>
    <td>Tiada bahan yang tidak perlu di lokasi</td>
    <td><?php echo $A87 ?></td>
    <td><?php echo $Image87 ?></td>
</tr>

<tr>
    <td rowspan="3">Pusat Sumber</td>
    <td>Kawasan yang bersih dan memuaskan</td>
    <td><?php echo $A88 ?></td>
    <td><?php echo $Image88 ?></td>
    <td rowspan="3"><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td>Dalam keadaan kemas dan teratur</td>
    <td><?php echo $A89 ?></td>
    <td><?php echo $Image89 ?></td>
</tr>

<tr>
    <td>Tiada bahan yang tidak perlu di lokasi</td>
    <td><?php echo $A90 ?></td>
    <td><?php echo $Image90 ?></td>
</tr>

<tr>
    <td rowspan="3">Dewan</td>
    <td>Kawasan lantai bersih dan tiada item tidak perlu</td>
    <td><?php echo $A91 ?></td>
    <td><?php echo $Image91 ?></td>
    <td rowspan="3"><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td>Susun atur peralatan dan item kemas dan rapi</td>
    <td><?php echo $A92 ?></td>
    <td><?php echo $Image92 ?></td>
</tr>

<tr>
    <td>Peralatan dan bahan dalam keadaan baik dan bersih</td>
    <td><?php echo $A93 ?></td>
    <td><?php echo $Image93 ?></td>
</tr>

<tr>
    <td rowspan="3">Bilik Gimnasium</td>
    <td>Kawasan yang bersih dan memuaskan</td>
    <td><?php echo $A94 ?></td>
    <td><?php echo $Image94 ?></td>
    <td rowspan="3"><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td>Dalam keadaan kemas dan teratur</td>
    <td><?php echo $A95 ?></td>
    <td><?php echo $Image95 ?></td>
</tr>

<tr>
    <td>Tiada bahan yang tidak perlu di lokasi</td>
    <td><?php echo $A96 ?></td>
    <td><?php echo $Image96 ?></td>
</tr>


<tr>
    <td rowspan="1">Keselamatan</td>
    <td>Aspek keselamatan diutamakan</td>
    <td><?php echo $A97 ?></td>
    <td><?php echo $Image97 ?></td>
    <td><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td rowspan="1">Seragam</td>
    <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”</td>
    <td><?php echo $A98 ?></td>
    <td><?php echo $Image98 ?></td>
    <td><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td rowspan="1">Sentiasa Amal</td>
    <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
    <td><?php echo $A99 ?></td>
    <td><?php echo $Image99 ?></td>
    <td><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <td rowspan="1">Impak</td>
    <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos/Keselamatan/Moral/Inovasi)</td>
    <td><?php echo $A100 ?></td>
    <td><?php echo $Image100 ?></td>
    <td><?php echo $Catatan14 ?></td>
</tr>

<tr>
    <th colspan="3">JUMLAH MARKAH SEKSYEN 6</th>
    <th colspan="3"><?php echo $S6 ?></th>
</tr>

</table><br>

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