<?php
$q=$_GET["sidebar"];


include "../db.php";
include "../dbtake.php";
 
 

$sql="select textSidebar from webs where domain='$domain'";
$result = mysql_query($sql);
$coba = mysql_result($result, 0);
echo $coba;

mysql_close($con);
?>
