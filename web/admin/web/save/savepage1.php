<?php
 
$page=$_GET["page"];

include "../db.php";
include "../dbtake.php";
 
 

$sql="select $page from webs where domain='$domain'";
$result = mysql_query($sql);
$coba = mysql_result($result, 0);
echo $coba;

mysql_close($con);
?>
