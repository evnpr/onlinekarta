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

mysql_select_db("onlinekartatokohape", $con);
?>

<?php echo $_POST["omerk"]; ?><br >
<?php echo $_POST["otype"]; ?><br >
  

<? 

$merk = $_POST['omerk']; 
$type=mysql_real_escape_string($_POST['otype']);  

{


$sql="create table $type(judul varchar(40), harganew int(5), stoknew int(3), harga2nd int(5), stok2nd int(3), lastupdate varchar(150), logo varchar(250), merk varchar(40), time varchar(150), deskripsinew varchar(1000), deskripsi2nd varchar(1000))";
$sql2="insert into $merk(type) values('".$type."')";
mysql_query($sql2);

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
