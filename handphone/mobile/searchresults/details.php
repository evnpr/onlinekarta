<html>
<body>
<?php
$username="root";
$password="abc123";
$database="onlinekartatokohape";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$hape=$_GET['hape'];
$judul=$_GET['toko'];

$query="SELECT * FROM $hape where judul='$judul'";
$result=mysql_query($query);




$num=mysql_num_rows($result);

?>
<table border="1"  cellspacing="1" cellpadding="1">
<tr>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Nama Toko</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Alamat</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif"><?php if($_GET['detail']=='new') echo 'Details New'; else if($_GET['detail']=='toko') echo 'Telephone'; else echo 'Details 2nd'; ?></font></th> 
</tr>



<?php
$i=0; $total=0; $counter=0; $totalstok=0; $totalstok2nd=0;
while ($i < $num) {

$f1=mysql_result($result,$i,"judul");
$f3=mysql_result($result,$i,"deskripsinew");
$f4=mysql_result($result,$i,"deskripsi2nd"); 

$query2="SELECT * FROM datatoko where user='$f1'";
$result2=mysql_query($query2);
$f2=mysql_result($result2,$d,"lokasi");
$f5=mysql_result($result2,$d,"nohape");
 
{

?>
<br>
<tr >
<td width="10%"><a href="detail.php?merk=<?php echo $_GET['merk'];?>&&hape=<?php echo $_GET['hape'];?>&&toko=<?php echo $f1;?>&&detail=toko"><font size="1" face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></a></td>
<td width="20%"><font size="1" face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td> 
<td width="30%"> <font size="1" face="Arial, Helvetica, sans-serif"><?php if($_GET['detail']=='new') {echo $f3;} else if($_GET['detail']=='toko') echo $f5; else echo $f4; ?></font></td>
 </tr>

<?php  
}
$i++;


}  
mysql_close();
 
?> </table>
</body> 
</html>
