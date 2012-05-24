<?php

// Inialize session
session_start();
$pwd=$_POST["opwd"];
$konfpwd=$_POST["okonfpwd"];
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}

if ($pwd!=$konfpwd) {
header('Location: handphone.php');
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

<?php echo $_POST["ojudul"]; ?><br >
<?php echo $_POST["opwd"]; ?><br >
<?php echo $_POST["onohape"]; ?><br >
<?php echo $_POST["oemail"]; ?><br >
 

<? 

$judul = mysql_real_escape_string ($_POST['ojudul']); 
$pwd = $_POST['opwd']; 
$nohape = mysql_real_escape_string ($_POST['onohape']); 
$email = mysql_real_escape_string ($_POST['oemail']); 
 
if ( $_POST["ojudul"] != ''){


$sql="INSERT INTO datatoko (user, opwd, nohape, email)
VALUES ('".$judul."', md5('$pwd'), '".$nohape."', '".$email."')";

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
