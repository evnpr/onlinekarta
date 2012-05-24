<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username-admin'])) {
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
<?php echo $_POST["oedit"]; ?><br >
<?php echo $_POST["oeditannya"]; ?><br >

<?
	$edit_judul = $_POST["ojudul"];
 
?>
<?

if ( $_POST["ojudul"] != ''){


$sql="DELETE from datatoko WHERE judul='$edit_judul'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record deleted";
}
mysql_close($con);
?>

<a href="index.php"> go back and delete more data </a>
<br>
<br>


</body>
</html>
