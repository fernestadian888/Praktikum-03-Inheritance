<?php
require_once 'Mahasiswa2.php';
require_once  'MahasiswaBaru';
require_once 'pegawai.php';
require_once 'dosen.php';
 
$ripan = new Mahasiswa('H1101201030','Ripan Sanjaya','2002-03-05','Pria');
$gerry = new Mahasiswa('H1101201020','Gerry Shane','2002-10-20','Pria');
$budi = pegawai('221309987441','Budi Anzah','082134786541','Rp.4.000.000')
 
?>
<html>
 <head>
   <title>PHP Test</title>
 </head>
 <body>
   <?php echo '<p>Hello World</p>'; ?>
   <h3>Ripan Sanjaya </h3>
   <?php
     $ripan->tampilkanUmur();
  
   ?>
   <h3>Gerry Shane </h3>
   <?php
     $gerry->tampilkanUmur();
 
    ?>
   <h3>Budi Anzah </h3>
   <?php
     $budi->tampilkanGaji();
  
 </body>
</html>
