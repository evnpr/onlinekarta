<html>
<body>
<?php
$username="root";
$password="abc123";
$database="onlinekartatoko";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM datatoko";
$result=mysql_query($query);

$num=mysql_num_rows($result);

mysql_close();
?>
<table border="1" cellspacing="2" cellpadding="2">
<tr>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Nama Toko</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Link logo</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Buka</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Produk</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Lokasi</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Harga</font></th>

<th><font size="1px" face="Arial, Helvetica, sans-serif">Link</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Propinsi</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Daerah</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Kategori</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Kategori2</font></th>
<th><font size="1px" face="Arial, Helvetica, sans-serif">Kategori3</font></th>


</tr>

<?php
$i=0;
while ($i < $num) {

$f1=mysql_result($result,$i,"judul");
$f2=mysql_result($result,$i,"logo");
$f3=mysql_result($result,$i,"buka");
$f4=mysql_result($result,$i,"produk");
$f5=mysql_result($result,$i,"lokasi");
$f6=mysql_result($result,$i,"harga");
$f7=mysql_result($result,$i,"deskripsi");
$f8=mysql_result($result,$i,"link");
$f9=mysql_result($result,$i,"propinsi");
$f10=mysql_result($result,$i,"daerah");
$f11=mysql_result($result,$i,"kategori");
$f12=mysql_result($result,$i,"kategori2");
$f13=mysql_result($result,$i,"kategori3");

?>

<tr>
<td><font size="1px" face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
<td><font size="1px" face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
<td><font size="1px" face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
<td><font size="1px" face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
<td><font size="1px" face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
<td><font size="1px" face="Arial, Helvetica, sans-serif"><?php echo $f6; ?></font></td>

<td><font size="1px" face="Arial, Helvetica, sans-serif"><?php echo $f8; ?></font></td>
<td><font size="1px" face="Arial, Helvetica, sans-serif"><?php echo $f9; ?></font></td>
<td><font size="1px" face="Arial, Helvetica, sans-serif"><?php echo $f10; ?></font></td>
<td><font size="1px" face="Arial, Helvetica, sans-serif"><?php echo $f11; ?></font></td>
<td><font size="1px" face="Arial, Helvetica, sans-serif"><?php echo $f12; ?></font></td>
<td><font size="1px" face="Arial, Helvetica, sans-serif"><?php echo $f13; ?></font></td>

</tr>

<?php
$i++;
}
?>
</body>
</html>
