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
<table border="0" cellspacing="2" cellpadding="2">
<tr>
<th><font face="Arial, Helvetica, sans-serif">Value1</font></th>
<th><font face="Arial, Helvetica, sans-serif">Value2</font></th>
<th><font face="Arial, Helvetica, sans-serif">Value3</font></th>
<th><font face="Arial, Helvetica, sans-serif">Value4</font></th>
<th><font face="Arial, Helvetica, sans-serif">Value5</font></th>
</tr>

<?php
$i=0;
while ($i < $num) {

$f1=mysql_result($result,$i,"judul");
$f2=mysql_result($result,$i,"logo");
$f3=mysql_result($result,$i,"buka");
$f4=mysql_result($result,$i,"produk");
$f5=mysql_result($result,$i,"lokasi");
?>

<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
</tr>

<?php
$i++;
}
?>
</body>
</html>
