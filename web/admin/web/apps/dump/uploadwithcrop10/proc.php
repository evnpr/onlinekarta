<?php
$dbimageThumb = $_GET['image'];
$id = $_GET['id'];

$con = mysql_connect("localhost","root","abc123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db('test');
if (!$db_selected) {
    die('Could not select database: ' . mysql_error());
}


$query0 = "DELETE from harga where id='".$id."' ";
$result0 = mysql_query($query0);

$query = "INSERT INTO harga (ThumbImage, id) values ('$dbimageThumb','$id')";
$result = mysql_query($query);
if (!$result) {
    die('Query failed: ' . mysql_error());
}


header('Location: ../../index.php');
?>
