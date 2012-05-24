<?php
include('db.php');
include('dbtake.php');
 
$session_id='1'; //$session id
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
											
							
$que = "SELECT Nomer FROM clockupload where id='gambarutama' and domain='$domain'";
$res = mysql_query($que);
$Nomer = mysql_result($res, 0);
 
	 			
if($Nomer!='1'){
$queimg = "SELECT pictBanner FROM webs where domain='$domain'";
$resimg = mysql_query($queimg);
$image = mysql_result($resimg, 0);
$deldel = 'apps/uploadwithcrop10/upload_pic/'.$image;
unlink($deldel);}
				mysql_query("UPDATE webs SET pictBanner='$actual_image_name'  WHERE domain='$domain'");
				mysql_query("UPDATE clockupload SET Nomer='0'  WHERE id='gambarutama' and domain='$domain'");
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
