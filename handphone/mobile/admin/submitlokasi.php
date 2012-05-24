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

 

<?php
$judul=$_SESSION['username'];
 
	
$lokasi=mysql_real_escape_string($_POST['olokasi']); 
$nohape=mysql_real_escape_string($_POST['onohape']); 
$email=mysql_real_escape_string($_POST['oemail']); 
$pwdlama=mysql_real_escape_string(md5($_POST['opwdlama']));  
$pwdbaru=mysql_real_escape_string($_POST['opwdbaru']); 

$check="select * from datatoko where user='$judul'";
$result=mysql_query($check);
$num=mysql_num_rows($result);

if($lokasi==''){$lokasi=mysql_real_escape_string(mysql_result($result,$s,"lokasi"));} 
if($nohape==''){$nohape=mysql_real_escape_string(mysql_result($result,$s,"nohape"));} 
if($email==''){$email=mysql_real_escape_string(mysql_result($result,$s,"email"));}
$pwdd=mysql_real_escape_string(mysql_result($result,$s,"opwd"));
if($pwdlama!=$pwdd){echo 'PASSWORD salah';} else { 

if($pwdbaru==''){$pwdbaru=$_POST['opwdlama'];} 


if($num==0){
$sql="INSERT INTO datatoko(lokasi, nohape, email, opwd) VALUES('".$lokasi."', '".$nohape."', '".$email."', md5('".$pwdbaru."') )";} 
else {$sql="UPDATE datatoko set lokasi='".$lokasi."', nohape='".$nohape."', email='".$email."', opwd=md5('".$pwdbaru."')  where user='$judul'";}
 


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

 
mysql_close($con); }
?>


<br>
<a href="index.php"> go back and input more data </a>
<br>
<br>
<a href="../index.php"> go to Onlinekarta.com </a>

</body>
</html>
