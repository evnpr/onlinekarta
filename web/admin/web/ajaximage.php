<?php
include('db.php');
include('dbtake.php');
 
$session_id='1'; //$session id
$id=$_GET['id'];
$path = "apps/uploadwithcrop/upload_pic/";

	$valid_formats = array("jpg", "png", "gif", "bmp");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(1024*1024))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
$que = "SELECT Nomer FROM clockupload where id='$id' and domain='$domain'";
$res = mysql_query($que);
$Nomer = mysql_result($res, 0);
 
				mysql_query("UPDATE clockupload SET Nomer='0'  WHERE id='$id' and domain='$domain'");
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
if($id=='logo') $id='pictLogo';
			
								
if($Nomer!='1'){
$queimg = "SELECT $id FROM webs where domain='$domain'";
$resimg = mysql_query($queimg);
$image = mysql_result($resimg, 0);
$deldel = 'apps/uploadwithcrop/upload_pic/'.$image;
unlink($deldel);}

				mysql_query("UPDATE webs SET $id='$actual_image_name'  WHERE domain='$domain'");
								
								//mysql_query("UPDATE harga SET ThumbImageLocal='$actual_image_name', Nomer='0' WHERE id='$id'");	
												echo "<img src='apps/uploadwithcrop/upload_pic/".$actual_image_name."'  class='preview'> ";
								}
							else
								echo "failed";
						}
						else
						echo "Image file size max 1 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}
?>
