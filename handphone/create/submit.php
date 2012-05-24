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

if ( $_POST["ojudul"] != ''){


$sql="INSERT INTO datatoko (judul, lokasi, produk, harga, buka, kontak, deskripsi, logo, propinsi, daerah, kategori, kategori2, kategori3, link)
VALUES ('$_POST[ojudul]', '$_POST[olokasi]', '$_POST[oproduk]', '$_POST[oharga]','$_POST[obuka]', '$_POST[okontak]', '$_POST[odeskripsi]', '$_POST[ologo]', '$_POST[opropinsi]', '$_POST[odaerah]', '$_POST[okategori]', '$_POST[okategori2]', '$_POST[okategori3]', '$_POST[olink]')";

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
