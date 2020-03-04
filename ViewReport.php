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
  <a href="AdminReport.php"><input type="image" src="assets/images/back.png" title="back" width="40" height="40" align="left" ></a>
   <a onclick="window.print();">
    <input type="image" src="assets/images/print.png" title="print" width="40" height="40" align="right">
  </a><br><br>
</div>

   <form method="POST">
    <table class="table table-hover  table-bordered align-center">



<!-- Seksyen 1  -->
<th class="align-left" colspan="4">SEKSYEN 1: KEPERLUAN UTAMA PELAKSANAAN</th>
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
        </tr>

         <tr>
          <td>Fail Program</td>
          <td> Maklumat Lengkap dan Terkini (Merujuk pada Senarai Semak Dokumen)</td>

          <td> <?php echo $C1 ?></td>
          <td><?php echo '<img src="data:image/png;base64,'.base64_encode($row["Image1"] ).'">' ?></td>

        </tr>

        <tr>
          <td>Sudut 5S</td>
          <td>Maklumat Lengkap dan Terkini (Merujuk pada Senarai Semak Dokumen)</td>
          <td><?php echo $C2 ?></td>
          <td><?php echo $Image1 ?></td>
        </tr>

         <tr>
          <td> Kaizen</td>
          <td>Penambahbaikan, Kreativiti dan Inovasi</td>
          <td> <?php echo $C3 ?></td>
          <td></td>
        </tr>

        <tr>
          <th colspan="2">JUMLAH MARKAH SEKSYEN 1</th>
          <th colspan="2"><?php echo $S1 ?></th>
        </tr>
      </table><br><br>


<!--  Seksyen 2 -->
 <table class="table table-hover  table-bordered align-center">

        <th class="align-left" colspan="4"> SEKSYEN 2: RUANG PEJABAT</th>
        <tr>
          <th> Kategori </th>
          <th> Soalan </th>
          <th> Markah</th>
          <th> Gambar</th>          
        </tr>

         <tr>
          <td rowspan="3">Tempat Individu</td>
          <td> Susun atur kemas dan sistematik</td>
          <td><?php echo $A4 ?></td>
          <td><?php echo $Image4 ?></td>
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
        </tr>

         <tr>
          <td rowspan="2"> Keselamatan</td>
          <td>Aspek keselamatan diutamakan</td>
          <td><?php echo $A15 ?></td>
          <td><?php echo $Image15 ?></td>
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
        </tr>

        <tr>
          <td> Sentiasa Amal</td>
          <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
          <td><?php echo $A18 ?></td>
          <td><?php echo $Image18 ?></td>
        </tr>

        <tr>
          <td> Impak</td>
          <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
          <td><?php echo $A19 ?></td>
          <td><?php echo $Image19 ?></td>
        </tr>

         <tr>
          <th colspan="2">JUMLAH MARKAH SEKSYEN 2</th>
          <th colspan="2"><?php echo $S2 ?></th>
        </tr>
</table><br><br>

<!-- Seksyen 3 -->

 <table class="table table-hover  table-bordered align-center">

        <th class="align-left" colspan="4" >SEKSYEN 3: STOR (FAIL, BAHAN, ALAT GANTI, UNIFORM & SEBAGAINYA)</th>
        <tr>
          <th> Kategori </th>
          <th> Soalan </th>
          <th> Markah</th>
          <th> Gambar</th>          
        </tr>

         <tr>
          <td rowspan="7">Tempat Simpanan</td>
          <td> Keadaan tersusun, kemas dan teratur</td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          
          <td> Kawasan lantai bersih</td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          
          <td> Terdapat tanda 'label' bagi tiap-tiap bahan/rekod</td>
          <td> </td>
          <td> </td>
        </tr>

         <td> Mempunyai sistem susunan yang teratur dan mudah untuk diambil (seperti rak-rak) bila diperlukan</td>
          <td> </td>
          <td> </td>
        </tr>

         <td> Tidak terdapat bahan/item yang tidak diperlukan</td>
          <td> </td>
          <td> </td>
        </tr>

         <td> Terdapat “layout plan” sebagai panduan</td>
          <td> </td>
          <td> </td>
        </tr>

         <td> Wujud rekod keluar masuk pergerakan bahan</td>
          <td> </td>
          <td> </td>
        </tr>

        <tr>
          <td rowspan="2">Keselamatan</td>
          <td>Aspek keselamatan diutamakan</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
        <td>Kawalan visual dan ciri keselamatan mencukupi</td>
          <td></td>
          <td></td>
        </tr>

         <tr>
          <td rowspan="2"> Seragam</td>
          <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>Penggunaan Red Tag yang betul dan sesuai</td>
          <td></td>
          <td></td>
        </tr>

          <tr>
          <td rowspan="1">Sentiasa Amal</td>
          <td> Kerjasama dan sikap positif untuk amalan berterusan</td>
          <td> </td>
          <td> </td>
        </tr>


         <tr>
          <td rowspan="1"> Impak</td>
          <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos /Keselamatan/Moral/Inovasi)</td>
          <td></td>
          <td></td>
        </tr>
      </table><br><br>

<!-- Seksyen 4 -->

 <table class="table table-hover  table-bordered align-center">

<th class="align-left" colspan="4" >SEKSYEN 4: OPERASI
(BENGKEL PENYELENGGARAAN AM, PAM MINYAK, “WASHING BAY”, BILIK KAWALAN, BILIK KIRAAN & SEBAGAINYA)</th>
<tr>
  <th> Kategori </th>
  <th> Soalan </th>
  <th> Markah</th>
  <th> Gambar</th>          
</tr>

         <tr>
          <td rowspan="3">Lantai/Dinding</td>
          <td> Lantai bersih, kemas dan tidak licin</td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          
          <td> Keadaan kemas dan rapi</td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          
          <td> Tiada barang yang tidak diperlukan</td>
          <td> </td>
          <td> </td>
        </tr>


        <tr>
          <td rowspan="6">Peralatan dan Mesin</td>
          <td>Susun atur kemas dan rapi</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
        <td>Mesin dan peralatan adalah bersih</td>
          <td></td>
          <td></td>
        </tr>

        <td>Tiada barang yang tidak diperlukan berada di lokasi mesin</td>
          <td></td>
          <td></td>
        </tr>

        <td>Berkeadaan baik serta aktiviti penyelenggaraan mesin</td>
          <td></td>
          <td></td>
        </tr>

        <td>Penggunaan “Manual”, “Visual Control” sebagai panduan</td>
          <td></td>
          <td></td>
        </tr>

        <td>Rekod penggunaan peralatan dan lain-lain</td>
          <td></td>
          <td></td>
        </tr>

         <tr>
          <td rowspan="2"> Bahan</td>
          <td>Dalam keadaan kemas dan teratur</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>Tanda label untuk mudah kesan</td>
          <td></td>
          <td></td>
        </tr>

          <tr>
          <td rowspan="2">Tempat Rekod/Dokumen</td>
          <td>Kemas dan sistematik</td>
          <td> </td>
          <td> </td>
        </tr>

        <tr>
          <td>Bersih dan item masih diperlukan</td>
          <td></td>
          <td></td>
        </tr>


         <tr>
          <td rowspan="1">Maklumat Visual</td>
          <td>Bersih, kemas dan maklumat sentiasa kemaskini</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td rowspan="1">Keselamatan</td>
          <td>Aspek keselamatan diutamakan</td>
          <td></td>
          <td></td>
        </tr>

          <tr>
          <td rowspan="1">Seragam</td>
          <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td rowspan="1">Sentiasa Amal</td>
          <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td rowspan="1">Impak</td>
          <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos/Keselamatan/Moral/Inovasi)</td>
          <td></td>
          <td></td>
        </tr>
      </table><br><br>

<!-- Seksyen 5 -->

 <table class="table table-hover  table-bordered align-center">

<th class="align-left" colspan="4">SEKSYEN 5: KAWASAN PERSEKITARAN LUARAN</th>
<tr>
  <th> Kategori </th>
  <th> Soalan </th>
  <th> Markah</th>
  <th> Gambar</th>          
</tr>

         <tr>
          <td rowspan="3">Pos Keselamatan</td>
          <td> Kawasan bersih dan tiada item tidak perlu</td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          
          <td>Kekemasan selesa dan memuaskan</td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          
          <td>Aspek keselamatan (kawalan) diutamakan</td>
          <td> </td>
          <td> </td>
        </tr>


        <tr>
          <td rowspan="2">Landskap</td>
          <td>Kawasan bersih dan tiada item tidak perlu</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
        <td>Sentiasa terjaga dan kekemasan memuaskan</td>
          <td></td>
          <td></td>
        </tr>

         <tr>
          <td rowspan="2">Tempat Pelupusan, Longkang, Kawasan Sisa Berjadual</td>
          <td>Mempunyai tempat pembuangan sisa yang memuaskan mengikut keperluan undang-undang</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>Sentiasa bersih, kemas dan terjaga</td>
          <td></td>
          <td></td>
        </tr>

          <tr>
          <td rowspan="3">Papan Tanda, Pandu Arah</td>
          <td>Kedudukan yang strategik dan berfungsi dengan baik</td>
          <td> </td>
          <td> </td>
        </tr>

        <tr>
          <td>Saiz yang sesuai, mudah difahami dan mudah dilihat</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>Wujud pandu arah dan garisan lot parkir yang jelas</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td rowspan="3">Kawasan Parkir</td>
          <td>Kawasan yang bersih dan teratur</td>
          <td> </td>
          <td> </td>
        </tr>

        <tr>
          <td>Landskap jika ada, tidak mengganggu dan sentiasa dalam keadaan kemas dan selesa untuk pengguna</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>Tiada bahan/barang yang tidak perlu di lokasi</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td rowspan="1">Keselamatan</td>
          <td>Aspek keselamatan diutamakan</td>
          <td></td>
          <td></td>
        </tr>

          <tr>
          <td rowspan="1">Seragam</td>
          <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td rowspan="1">Sentiasa Amal</td>
          <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td rowspan="1">Impak</td>
          <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos/Keselamatan/Moral/Inovasi)</td>
          <td></td>
          <td></td>
        </tr>
      </table><br><br>

<!-- Seksyen 6 -->

 <table class="table table-hover  table-bordered align-center">

<th class="align-left" colspan="4">SEKSYEN 6: TEMPAT UMUM</th>
<tr>
  <th> Kategori </th>
  <th> Soalan </th>
  <th> Markah</th>
  <th> Gambar</th>          
</tr>

         <tr>
          <td rowspan="2">Kaunter/Lobi/Koridor/Tangga</td>
          <td> Kawasan lantai/dinding bersih dan tiada item tidak perlu</td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          
          <td>Susunatur peralatan dan item kemas dan memuaskan</td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          
       
        <tr>
          <td rowspan="3">Bilik Mesyuarat/Bilik VIP</td>
          <td>Kawasan lantai dan dinding bersih dan tiada item tidak perlu</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
        <td>Susun atur peralatan/item kemas dan memudahkan</td>
          <td></td>
          <td></td>
        </tr>

           <td>Maklumat Visual dalam keadaan bersih dan kemas (etika,inventori,kawalan penggunaan dsb)</td>
          <td> </td>
          <td> </td>
        </tr>


          <tr>
          <td rowspan="3">Bilik Latihan/Simulasi</td>
          <td>Kawasan bersih dan tiada item tidak perlu</td>
          <td> </td>
          <td> </td>
        </tr>

        <tr>
          <td>Susunatur peralatan/item kemas dan memudahkan</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>Maklumat Visual dalam keadaan bersih dan kemas.(etika,inventori,kawalan penggunaan dsb)</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td rowspan="3">Kantin/Pantri</td>
          <td>Kawasan lantai bersih dan tiada item tidak perlu</td>
          <td> </td>
          <td> </td>
        </tr>

        <tr>
          <td>Susun atur peralatan dan item kemas dan rapi</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>Peralatan dan bahan dalam keadaan baik dan bersih</td>
          <td></td>
          <td></td>
        </tr>

         <tr>
          <td rowspan="3">Surau/Ruang Solat</td>
          <td>Kawasan yang bersih dan memuaskan</td>
          <td> </td>
          <td> </td>
        </tr>

        <tr>
          <td>Peralatan sentiasa dalam keadaan baik dan boleh digunakan</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>Tiada bahan yang tidak perlu di lokasi</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td rowspan="3">Tandas/Bilik Mandi</td>
          <td>Kawasan yang bersih dan memuaskan</td>
          <td> </td>
          <td> </td>
        </tr>

        <tr>
          <td>Peralatan sentiasa dalam keadaan baik dan boleh digunakan</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>Tiada bahan yang tidak perlu di lokasi</td>
          <td></td>
          <td></td>
        </tr>

         <tr>
          <td rowspan="3">Bilik Kecemasan/Bilik Rehat/Penginapan</td>
          <td>Kawasan yang bersih dan memuaskan</td>
          <td> </td>
          <td> </td>
        </tr>

        <tr>
          <td>Dalam keadaan kemas dan teratur</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>Tiada bahan yang tidak perlu di lokasi</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td rowspan="3">Pusat Sumber</td>
          <td>Kawasan yang bersih dan memuaskan</td>
          <td> </td>
          <td> </td>
        </tr>

        <tr>
          <td>Dalam keadaan kemas dan teratur</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>Tiada bahan yang tidak perlu di lokasi</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td rowspan="3">Dewan</td>
          <td>Kawasan lantai bersih dan tiada item tidak perlu</td>
          <td> </td>
          <td> </td>
        </tr>

        <tr>
          <td>Susun atur peralatan dan item kemas dan rapi</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>Peralatan dan bahan dalam keadaan baik dan bersih</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td rowspan="3">Bilik Gimnasium</td>
          <td>Kawasan yang bersih dan memuaskan</td>
          <td> </td>
          <td> </td>
        </tr>

        <tr>
          <td>Dalam keadaan kemas dan teratur</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>Tiada bahan yang tidak perlu di lokasi</td>
          <td></td>
          <td></td>
        </tr>


        <tr>
          <td rowspan="1">Keselamatan</td>
          <td>Aspek keselamatan diutamakan</td>
          <td></td>
          <td></td>
        </tr>

          <tr>
          <td rowspan="1">Seragam</td>
          <td>Sokongan pelaksanaan dengan mewujudkan kawalan visual dan “konsep ownership”</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td rowspan="1">Sentiasa Amal</td>
          <td>Kerjasama dan sikap positif untuk amalan berterusan</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td rowspan="1">Impak</td>
          <td>Penambahbaikkan yang dibuat memberikan kesan melalui (Produktiviti/Kualiti/Penghantaran/Kos/Keselamatan/Moral/Inovasi)</td>
          <td></td>
          <td></td>
        </tr>
         
    </table><br><br>

          
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