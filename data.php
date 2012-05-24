
<?php

$mulai=time();


$_provinsi=$_POST["makes"]; //ini tu provinsi
$_daerah=$_POST["models"]; //ini tu daerah
$_barang=$_POST["kategori"]; //ini tu barangnya

 header("Location: searchresults/index.php?kat=$_barang&prop=$_provinsi&dae=$_daerah");

  
?>

