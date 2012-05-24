<?php
$q=$_GET["about"];


include "../db.php";
include "../dbtake.php";
 

$sql="select textAbout from webs where domain='$domain'";
$result = mysql_query($sql);
$coba = mysql_result($result, 0);
echo $coba;

mysql_close($con);
?>
