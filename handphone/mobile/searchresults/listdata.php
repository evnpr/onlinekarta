<html>
<body>
<?php
$username="root";
$password="abc123";
$database="onlinekartatokohape";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$hape=$_GET['hape'];
$query="SELECT * FROM $hape order by lastupdate desc";
$result=mysql_query($query);




$num=mysql_num_rows($result);

?>

<?php if($_GET['hape']!='Pilih') echo '
<table border="1"  cellspacing="1" cellpadding="1">
<tr>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Harga New</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Stok</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Harga 2nd</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Stok</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Nama Toko</font></th> 
<th><font size="1px" face="Arial, Helvetica, sans-serif">Last Update</font></th>
</tr>'; ?>



<?php
$i=0; $total=0; $counter=0; $totalstok=0; $totalstok2nd=0;
while ($i < $num) {

$f1=mysql_result($result,$i,"harganew");
$f2=mysql_result($result,$i,"stoknew");
$f3=mysql_result($result,$i,"harga2nd");
$f4=mysql_result($result,$i,"stok2nd");
$f5=mysql_result($result,$i,"judul");
$f7=mysql_result($result,$i,"time");

$query2="SELECT * FROM datatoko where user='$f5'";
$result2=mysql_query($query2);
$f6=mysql_result($result2,$d,"lokasi");

 
if($f2==0 and $f4==0) echo ''; else {



?>

<tr >
<td width="7%"><b><a href="detail.php?merk=<?php echo $_GET['merk'];?>&&hape=<?php echo $_GET['hape'];?>&&toko=<?php echo $f5;?>&&detail=new"><font size="1px" color="#874c00" face="Arial, Helvetica, sans-serif" ><?php if($f1==00  && $f2!=0) echo 'hub kami'; else echo 'Rp'.$f1.'.000,-'; ?></font></a></b></td>
<td width="5%" style="text-align:center"><a href="detail.php?merk=<?php echo $_GET['merk'];?>&&hape=<?php echo $_GET['hape'];?>&&toko=<?php echo $f5;?>&&detail=new"> <font  size="1px" face="Arial, Helvetica, sans-serif" color=""> <?php if($f2==11) echo '>10'; else echo $f2; ?> </font></a> </td>
<td width="7%"><b><a href="detail.php?merk=<?php echo $_GET['merk'];?>&&hape=<?php echo $_GET['hape'];?>&&toko=<?php echo $f5;?>"><font size="1px" color="#874c00" face="Arial, Helvetica, sans-serif" ><?php if($f3==00 && $f4!=0) echo 'hub kami'; else echo 'Rp'.$f3.'.000,-'; ?></font></a></b></td>
<td width="5%" style="text-align:center"> <a href="detail.php?merk=<?php echo $_GET['merk'];?>&&hape=<?php echo $_GET['hape'];?>&&toko=<?php echo $f5;?>"><font  size="1px" face="Arial, Helvetica, sans-serif" color=""> <?php if($f4==11) echo '>10'; else echo $f4; ?> </font></a> </td>
 
<td width="45%"><a href="detail.php?merk=<?php echo $_GET['merk'];?>&&hape=<?php echo $_GET['hape'];?>&&toko=<?php echo $f5;?>&&detail=toko"> <font size="1" face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></a></td>
<td width="25%"><font size="1" face="Arial, Helvetica, sans-serif"><?php echo $f7; ?></font></td> 
</tr>

<?php 
$total=$total+$f1;
$counter++;
$totalstok=$totalstok+$f2;
$totalstok2nd=$totalstok2nd+$f4;

}
$i++;


} 
if($_GET['hape']!='Pilih') {
echo '<font size="2" color="black">jumlah toko yang sekarang menjual : <font color="red">'.$counter.'</font> &nbsp&nbsp| </font>';
echo '<font size="2" color="black">jumlah total stok new : <font color="red">'.$totalstok.'</font> &nbsp&nbsp| </font>';
echo '<font size="2" color="black">jumlah total stok 2nd : <font color="red">'.$totalstok2nd.'</font></font><br> ';}
mysql_close();
 
?> </table>
</body> 
</html>
