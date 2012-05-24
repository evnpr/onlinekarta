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
</body> 
</html>
