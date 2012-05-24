<html>
<body>
<?php
$username="root";
$password="abc123";
$database="onlinekartatokohape";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$hape=$_GET['hape'];

$query="SELECT * FROM $hape where judul='PULSA'";
$result=mysql_query($query);

$query2="SELECT * FROM $hape";
$result2=mysql_query($query2);
$num=mysql_num_rows($result2);

$merk=$_GET['merk'];
$query3="SELECT * FROM $merk";
$result3=mysql_query($query3);
$num3=mysql_num_rows($result3);


mysql_close();
?>


 


<?php 

$e1=mysql_result($result,0,"logo");
$e2=mysql_result($result,0,"merk");
$e3=mysql_result($result,0,"deskripsi");

?>

<div style="float:left; padding:3px;"><a href="indexlist.php?merk=<?php echo $_GET['merk']; ?>&&hape=<?php echo $_GET['hape']; ?>"><img src="images/<?php if($_GET['hape']=='Pilih') echo 'stan.png'; else echo $_GET['merk'].'-'.$_GET['hape'].'.jpg';   ?>" height="50"  /></a></div>

<div style="  background-color:#fff; text-align:left; font-size:100%; padding-left:3px;"><a href="" ><b style="font-size:14px; line-height:170%;"> <font size="2"></b></a></font> 
<div style=" padding-left:3px; text-align:left; font-size:100%;"> 

<b><font size="2"color="red"></font></b> <a href="indexlist.php?merk=<?php echo $_GET['merk']; ?>&&hape=<?php echo $_GET['hape']; ?>"><font size="4" color="blue"><?php if($_GET['hape']=='Pilih'){echo 'SILAKAN PILIH TYPE HAPENYA';} else {echo $_GET['merk'].' '.$_GET['hape'];}?></a></font>

<?php
if($_GET['merk']!='Pilih' && $_GET['hape']=='Pilih'){
echo '<br><br><br>'.$_GET['merk'].':<br>';
for($m=0;$m<$num3;$m++){
$merklist=mysql_result($result3,$m,"type");
echo '<a href="indexlist.php?merk='.$_GET['merk'].'&&hape='.$merklist.'">'.$merklist.'</a><br>';}

} 

?>
 <br>
<div style="padding-left:4%;">
 <font size="1" color="grey"><?php echo $e3; ?></font><br>
</div>
 

<div style="padding-left:4%;">
<font size="1" color="black"><font color="red"></font></font><br> 
</div>
 
</div> </div>


