<?php

// Inialize session
session_start();

setlocale(LC_ALL, 'nl_NL');
 

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}
$time=strftime("%c");
$lastupdate1=date("c");

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

$judul=mysql_real_escape_string($_SESSION['username']);
$lokasi=$_POST['olokasi'];

 
	
for($i=0; $i<26; $i++){ 
$model=$_POST['models'.$i.''];
$harganew=$_POST['oharganew'.$i.'']; 
$stoknew=$_POST['ostoknew'.$i.'']; 
$detailnew=mysql_real_escape_string($_POST['odetailnew'.$i.'']); 

$harga2nd=$_POST['oharga2nd'.$i.'']; 
$stok2nd=$_POST['ostok2nd'.$i.'']; 
$detail2nd=mysql_real_escape_string($_POST['odetail2nd'.$i.'']); 

$check="select * from $model where judul='".$judul."'";
$result=mysql_query($check);
$num=mysql_num_rows($result);

if($harganew==''){$harganew=mysql_result($result,$s,"harganew");}
if($harga2nd==''){$harga2nd=mysql_result($result,$s,"harga2nd");}
if($detailnew==''){$detailnew=mysql_real_escape_string(mysql_result($result,$s,"deskripsinew"));}

if($stoknew==''){$stoknew=mysql_result($result,$s,"stoknew");}
if($stok2nd==''){$stok2nd=mysql_result($result,$s,"stok2nd");}
if($detail2nd==''){$detail2nd=mysql_real_escape_string(mysql_result($result,$s,"deskripsi2nd"));}


if($model=='' or $model=='undefined') break;

if($num==0){
$sql="INSERT INTO $model(harganew, harga2nd, judul, stoknew, stok2nd, deskripsinew, deskripsi2nd, time, lastupdate) VALUES('$harganew', '$harga2nd', '".$judul."', '$stoknew', '$stok2nd', '".$detailnew."', '".$detail2nd."', '$time', '$lastupdate1')";} 
else {$sql="UPDATE $model set harganew='$harganew', harga2nd='$harga2nd', stoknew='$stoknew', stok2nd='$stok2nd', deskripsinew='".$detailnew."', deskripsi2nd='".$detail2nd."', time='$time', lastupdate='$lastupdate1' where judul='".$judul."'";}



if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

unset($harganew);
unset($harga2nd);

unset($stoknew);
unset($stok2nd);

unset($deskripsinew);
unset($deskripsi2nd);


}
mysql_close($con);
echo "1 record added";


?>


<br>
<a href="index.php"> go back and input more data </a>
<br>
<br>
<a href="../index.php"> go to Onlinekarta.com </a>

</body>
</html>
