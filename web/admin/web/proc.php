<?php
$dbimageThumb = $_GET['image'];
$id = $_GET['id'];

include "db.php";
include "dbtake.php";
 
$que = "SELECT Nomer FROM clockupload where id='$id' and domain='$domain'";
$res = mysql_query($que);
$Nomer = mysql_result($res, 0);
 

mysql_query("UPDATE clockupload SET Nomer='1'  WHERE id='$id' and domain='$domain'");

if($id=='kiri1') $id='pict1';
if($id=='kiri2') $id='pict2';
if($id=='kiri3') $id='pict3';
if($id=='kiri4') $id='pict4';
if($id=='kiri5') $id='pict5';
if($id=='kiri6') $id='pict6';
if($id=='kiri7') $id='pict7';
if($id=='kiri8') $id='pict8';
if($id=='kiri9') $id='pict9';
if($id=='gambarutama') $id='pictBanner';
if($id=='gambarutama2') $id='pictBanner2';
if($id=='gambarutama3') $id='pictBanner3';
if($id=='gambarutama4') $id='pictBanner4';
if($id=='logo') $id='pictLogo';


if($Nomer!='1'){
$queimg = "SELECT $id FROM webs where domain='$domain'";
$resimg = mysql_query($queimg);
$image = mysql_result($resimg, 0);
$deldel = 'apps/uploadwithcrop10/upload_pic/'.$image;
unlink($deldel);}

$query = "UPDATE webs SET $id='$dbimageThumb' WHERE domain='$domain'";
$result = mysql_query($query);
if (!$result) {
    die('Query failed: ' . mysql_error());
}


header('Location: index.php');
?>
