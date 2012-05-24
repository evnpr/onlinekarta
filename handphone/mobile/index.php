<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">


<head>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- \/ Enter page title, meta description & meta keywords \/ -->
<meta name="description" content="Onlinekarta.com adalah semacam search engine badan usaha di Indonesia. :D" />

<title>Onlinekarta</title>


<?php
$username="root";
$password="abc123";
$database="onlinekartatokohape";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");


$mmakes=$_GET['makes'];
if($_GET['makes']!='') {
$hape=$_GET['hape'];
$query="SELECT * FROM $mmakes";
$result=mysql_query($query);

$num=mysql_num_rows($result);
}


?>

</head>

 


<body style="border-style:solid; border-width:1px; border-color:#fff; background-color:#fff;">
<div  style="text-align:right; float:left; margin-top:1px; margin-left:5px;"> <a href="../register/index.php" style=""><font size="1">Daftar Sekarang!</a>       &nbsp</font></div>

<div  style="text-align:right; float:right; margin-top:1px; margin-left:5px;"> <a href="admin/index.php" style=""><font size="1">Log In Seller</a>       &nbsp</font></div>
<div  style="text-align:right; float:right; margin-top:1px; margin-left:5px;"> <a href="aboutus.php" style=""><font size="1">About Us</a>       |</font></div>
<div  style="text-align:right; float:right; margin-top:1px; margin-left:5px;"> <a href="index.php"  style=""><font size="1">Home</a>       |</font></div>



<center>

<div style="margin-top: 10%; width: 311px;">

<div>




<div> <font color="brown" size="6">Handphone di Jogja</font> <br><br>
</div>


</div>

<center>
<div>

<?php if($_GET['makes']=='') echo '
<form action="index.php" method="get">
<select size="1" name="makes"> 
<option value="NOKIA">NOKIA</option>
<option value="SAMSUNG">SAMSUNG</option>
<option value="BLACKBERRY">BLACKBERRY</option>
<option value="APPLE">APPLE</option>
<option value="SONY_ERICSSON">SONY_ERICSSON</option>'; 
else { echo '
<form action="data.php" method="post">
'.$mmakes.' <select size="1" name="models"> '; 
$i=0;
while ($i < $num) {
$f1=mysql_result($result,$i,"type");
echo '<option value="'.$f1.'">'.$f1.'</option>'; 
$i++; }}
?>



</select>
<input type="hidden" name="mak" value="<?php echo $_GET['makes']; ?>" ></input>
<div><br></div>
	<div>
	 
	</div>
	 
<input type="submit" value="<?php if($_GET['makes']=='') echo 'pilih type'; else echo 'cari sekarang'; ?>"  /> <br><br>
</form>

</div>
</center>


</div> 

</center> <div style="text-align:right"> <font size="1">Powered by <font color="brown">Onlinekarta </font></font></div>
 

</body>
</html>
