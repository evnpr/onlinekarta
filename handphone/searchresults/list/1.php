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

$query4="SELECT * FROM SAMSUNG";
$result4=mysql_query($query4);
$num4=mysql_num_rows($result4);

$query5="SELECT * FROM APPLE";
$result5=mysql_query($query5);
$num5=mysql_num_rows($result5);

$query6="SELECT * FROM SONY_ERICSSON";
$result6=mysql_query($query6);
$num6=mysql_num_rows($result6);

$query7="SELECT * FROM NOKIA";
$result7=mysql_query($query7);
$num7=mysql_num_rows($result7);

$query8="SELECT * FROM BLACKBERRY";
$result8=mysql_query($query8);
$num8=mysql_num_rows($result8);


mysql_close();
?>


 


<?php 

$e1=mysql_result($result,0,"logo");
$e2=mysql_result($result,0,"merk");
$e3=mysql_result($result,0,"deskripsi");

?>

<div style="float:left; padding:3px;"><a href="indexlist.php?merk=<?php echo $_GET['merk']; ?>&&hape=<?php echo $_GET['hape']; ?>"><?php if($_GET['hape']!='Pilih') echo '<img src="images/'.$_GET['merk'].'-'.$_GET['hape'].'.jpg" height="50"  />';   ?></a></div>

<div style="  background-color:#fff; text-align:left; font-size:100%; padding-left:3px;"><a href="" ><b style="font-size:14px; line-height:170%;"> <font size="2"></b></a></font> 
<div style=" padding-left:3px; text-align:left; font-size:100%;"> 

<b><font size="2"color="red"></font></b> <a href="indexlist.php?merk=<?php echo $_GET['merk']; ?>&&hape=<?php echo $_GET['hape']; ?>"><font size="4" color="blue"><?php if($_GET['hape']=='Pilih'){echo '';} else {echo $_GET['merk'].' '.$_GET['hape'];}?></a></font>

<?php
if($_GET['merk']!='Pilih' && $_GET['hape']=='Pilih'){
echo '<br><br><br>'.$_GET['merk'].':<br>';
for($m=0;$m<$num3;$m++){
$merklist=mysql_result($result3,$m,"type");
echo '<a href="indexlist.php?merk='.$_GET['merk'].'&&hape='.$merklist.'"><img src="images/'.$_GET['merk'].'-'.$merklist.'.jpg" height="40px"/>'.$merklist.'</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
if($_GET['merk']!='NOKIA') {if($m%4==0 && $m!=0) echo '<br>';} else {if($m%6==0 && $m!=0) echo '<br>';} 

}
} 
if($_GET['merk']=='Pilih' && $_GET['hape']=='Pilih'){
echo '<br><br><br>SAMSUNG :<br>';
for($m=0;$m<$num4;$m++){
$merklist=mysql_result($result4,$m,"type");
echo '<a href="indexlist.php?merk=SAMSUNG&&hape='.$merklist.'"><img src="images/SAMSUNG-'.$merklist.'.jpg" height="40px"/>'.$merklist.'</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
if($m%4==0 && $m!=0) echo '<br>';}

echo '<br><br><br>APPLE :<br>';
for($m=0;$m<$num5;$m++){
$merklist=mysql_result($result5,$m,"type");
echo '<a href="indexlist.php?merk=APPLE&&hape='.$merklist.'"><img src="images/APPLE-'.$merklist.'.jpg" height="40px"/>'.$merklist.'</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
if($m%4==0 && $m!=0) echo '<br>';}

echo '<br><br><br>SONY ERICSSON :<br>';
for($m=0;$m<$num6;$m++){
$merklist=mysql_result($result6,$m,"type");
echo '<a href="indexlist.php?merk=SONY_ERICSSON&&hape='.$merklist.'"><img src="images/SONY_ERICSSON-'.$merklist.'.jpg" height="40px"/>'.$merklist.'</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
if($m%4==0 && $m!=0) echo '<br>';}

echo '<br><br><br>NOKIA :<br>';
for($m=0;$m<$num7;$m++){
$merklist=mysql_result($result7,$m,"type");
echo '<a href="indexlist.php?merk=NOKIA&&hape='.$merklist.'"><img src="images/NOKIA-'.$merklist.'.jpg" height="40px"/>'.$merklist.'</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
if($m%6==0 && $m!=0) echo '<br>';}

echo '<br><br><br>BLACKBERRY :<br>';
for($m=0;$m<$num8;$m++){
$merklist=mysql_result($result8,$m,"type");
echo '<a href="indexlist.php?merk=BLACKBERRY&&hape='.$merklist.'"><img src="images/BLACKBERRY-'.$merklist.'.jpg" height="40px"/>'.$merklist.'</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
if($m%4==0 && $m!=0) echo '<br>';}



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


