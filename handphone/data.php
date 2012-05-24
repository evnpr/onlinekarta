
<?php

$mulai=time();


$_provinsi=$_POST["makes"]; //ini tu provinsi
$_daerah=$_POST["models"]; //ini tu daerah
$_barang=$_POST["kategori"]; //ini tu barangnya

 header("Location: searchresults/indexlist.php?merk=$_provinsi&&hape=$_daerah");

  
?>

