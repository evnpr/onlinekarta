<?php
$q=$_GET["harga"];
$id=$_GET["id"];


include "../db.php";
include "../dbtake.php";
 


$new = htmlspecialchars("$q", ENT_QUOTES);
$sql="UPDATE webs set $id = '".$new."' where domain='$domain'";
$result = mysql_query($sql);

$sql4="select $id from webs where domain='$domain' ";
$result4 = mysql_query($sql4);
$coba = mysql_result($result4, 0);
echo $coba;

mysql_close($con);
?>
