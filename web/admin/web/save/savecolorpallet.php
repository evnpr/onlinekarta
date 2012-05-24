<?php
$q=$_GET["warna"];
$id = 'header';

include "../db.php";
include "../dbtake.php";
  
$sql="UPDATE webs set colorHeader='$q' where domain = '$domain' ";
$result = mysql_query($sql);

$sql4="select colorHeader from webs where domain = '$domain' ";
$result4 = mysql_query($sql4);
$coba = mysql_result($result4, 0);
header('Location: ../index.php');
mysql_close($con);

?>
