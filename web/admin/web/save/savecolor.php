<?php
$q=$_GET["color"];
$id = $_GET["id"];


include "../db.php";
include "../dbtake.php";

$sql2="select * from harga where id = '".$id."' and domain ='".$domain."'";
$result2 = mysql_query($sql2);
$num_rows = mysql_num_rows($result2);

if($num_rows=1) {
$sql3="DELETE from harga where id='".$id."' and domain ='".$domain."'";
$result3 = mysql_query($sql3); }



$sql="INSERT into harga (color,Nomer,id) values ('".$q."','1','".$id."')";
$result = mysql_query($sql);

$sql4="select color from harga where id = '".$id."' ";
$result4 = mysql_query($sql4);
$coba = mysql_result($result4, 0);
echo '#'.$coba;

mysql_close($con);
?>
