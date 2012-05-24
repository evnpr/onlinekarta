<?php

// Inialize session
session_start();
$pwd=$_POST["opwd"];
$konfpwd=$_POST["okonfpwd"];
// Check, if username session is NOT set then this page will jump to login page


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
 


$nama_ganda = mysql_query("SELECT * FROM datatoko WHERE user='".$judul."'");
$jml_ganda = mysql_num_rows($nama_ganda);

if($jml_ganda>0){
         echo "ERROR: Nama $judul telah terdaftar, mohon menggunakan yang lain";
        }
else
{
if ( $_POST["ojudul"] != '' && $_POST['opwd'] != ''){


$sql="INSERT INTO datatoko (user, opwd, nohape, email)
VALUES ('".$judul."', md5('$pwd'), '".$nohape."', '".$email."')";




if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
echo '<br>
<a href="../admin/index.php"> go to log in </a>';


} else echo 'nama dan password tidak boleh kosong';
mysql_close($con); }
?>


</body>
</html>
