<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}

?>

<html>
<body>

<?
$con = mysql_connect("localhost","root","abc123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("onlinekartatoko", $con);
?>

<?php echo $_POST["ojudul"]; ?><br >
<?php echo $_POST["olokasi"]; ?><br >
<?php echo $_POST["opropinsi"]; ?><br >
<?php echo $_POST["odaerah"]; ?><br >
<?php echo $_POST["oproduk"]; ?><br >
<?php echo $_POST["oharga"]; ?><br >
<?php echo $_POST["obuka"]; ?><br >
<?php echo $_POST["okontak"]; ?><br >
<?php echo $_POST["odeskripsi"]; ?><br >
<?php echo $_POST["olink"]; ?><br >
<?php echo $_POST["ologo"]; ?><br >
<?php echo $_POST["okategori"]; ?><br >
<?php echo $_POST["okategori2"]; ?><br >
<?php echo $_POST["okategori3"]; ?><br >


<? 

$judul = mysql_real_escape_string ($_POST['ojudul']); 
$lokasi = mysql_real_escape_string ($_POST['olokasi']); 
$daerah = mysql_real_escape_string ($_POST['odaerah']); 
$produk = mysql_real_escape_string ($_POST['oproduk']); 
$harga = mysql_real_escape_string ($_POST['oharga']); 
$buka = mysql_real_escape_string ($_POST['obuka']); 
$kontak = mysql_real_escape_string ($_POST['okontak']); 
$deskripsi = mysql_real_escape_string ($_POST['odeskripsi']); 
$link = mysql_real_escape_string ($_POST['olink']); 
$logo = mysql_real_escape_string ($_POST['ologo']); 

if ( $_POST["ojudul"] != ''){


$sql="INSERT INTO datatoko (judul, lokasi, produk, harga, buka, kontak, deskripsi, logo, propinsi, daerah, kategori, kategori2, kategori3, link)
VALUES ('".$judul."', '".$lokasi."', '".$produk."', '".$harga."', '".$buka."', '".$kontak."', '".$deskripsi."', '".$logo."', '$_POST[opropinsi]', '".$daerah."', '$_POST[okategori]', '$_POST[okategori2]', '$_POST[okategori3]', '".$link."')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}
mysql_close($con);
?>
<br>
<a href="index.php"> go back and input more data </a>
<br>
<br>
<a href="../index.php"> go to Onlinekarta.com </a>

</body>
</html>
