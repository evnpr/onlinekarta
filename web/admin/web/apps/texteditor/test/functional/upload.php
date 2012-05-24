<?php 

include ('../../../../db.php');
include ('../../../../dbtake.php');
 
$id= $_GET['id'];

$vvv = $_POST["value"];

$new = strip_tags("$vvv","<strong><p><a><img><div><ul><li><ol><hr><br>");



$query="UPDATE webs set $id = '".mysql_real_escape_string($new)."' where domain='$domain'";
$result=mysql_query($query);
 
 

echo $new;



?>
