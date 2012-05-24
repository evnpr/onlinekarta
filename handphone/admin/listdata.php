<html>
<body>
<?php
$username="root";
$password="abc123";
$database="onlinekartatokohape";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$hape=$_GET['merk'];

$query="SELECT * FROM $hape";
$result=mysql_query($query);
 



$num=mysql_num_rows($result);

?>
<table border="1"  cellspacing="1" cellpadding="1">
<tr>
<th width="4%"><font size="1px" face="Arial, Helvetica, sans-serif">Merk</font></th>
<th width="5%"><font size="1px" face="Arial, Helvetica, sans-serif" >Harga New</font></th>
<th width="2%"><font size="1px" face="Arial, Helvetica, sans-serif">Stok New</font></th>
<th width="7%"><font size="1px" face="Arial, Helvetica, sans-serif">Deskripsi New</font></th>
<th width="5%"><font size="1px" face="Arial, Helvetica, sans-serif">Harga 2nd</font></th>
<th width="2%"><font size="1px" face="Arial, Helvetica, sans-serif">Stok 2nd</font></th>
<th width="7%"><font size="1px" face="Arial, Helvetica, sans-serif">Deskripsi 2nd</font></th> 
</tr>



<?php
$i=0; $total=0; $counter=0; $totalstok=0; $totalstok2nd=0;
while ($i < $num) {

$f1=mysql_result($result,$i,"type");
$usrnme=$_SESSION['username'];
$query2="SELECT * FROM $f1 where judul='$usrnme'";
$result2=mysql_query($query2);
$f2=mysql_result($result2,$d,"harganew");
$f3=mysql_result($result2,$d,"stoknew");
$f4=mysql_result($result2,$d,"harga2nd");
$f5=mysql_result($result2,$d,"stok2nd");
$f6=mysql_result($result2,$d,"deskripsinew");
$f7=mysql_result($result2,$d,"deskripsi2nd");

 
 {



?>

<tr >
<td><b><font size="1px" color="#874c00" face="Arial, Helvetica, sans-serif" ><?php echo $f1; ?></font> </b></td>
<td><b><font size="1px" color="#874c00" face="Arial, Helvetica, sans-serif" ><?php if($f2==00  && $f3!=00) echo 'hub kami'; else echo 'Rp'.$f2.'.000,-'; ?></font> </b></td>
<td style="text-align:center"><font  size="1px" face="Arial, Helvetica, sans-serif" color=""> <?php if($f3==11) echo '>10'; else echo $f3; ?> </font></a> </td>
<td><b><font size="1px" color="#874c00" face="Arial, Helvetica, sans-serif" ><?php echo $f6; ?></font></a></b></td>
<td><b><font size="1px" color="#874c00" face="Arial, Helvetica, sans-serif" ><?php if($f4==00  && $f5!=00) echo 'hub kami'; else echo 'Rp'.$f4.'.000,-'; ?></font></a></b></td>
<td style="text-align:center"><font  size="1px" face="Arial, Helvetica, sans-serif" color=""> <?php if($f5==11) echo '>10'; else echo $f5; ?> </font></a> </td>
<td><font size="1px" face="Arial, Helvetica, sans-serif"><?php echo $f7; ?></font></a></td> 
 
</tr>

<?php 
  
}
$i++;


} 
 mysql_close();
 
?> </table>
</body> 
</html>
