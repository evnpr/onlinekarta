<html>
<head>
<?php

$pagenumber = $_GET["page"]; 

include ('../../db.php');
include ('../../dbtake.php');


if(isset($imageItem1)) {
$image1 = 'http://' .$hostimage. '/web/apps/uploadwithcroppage/upload_pic/'.$imageItem1.''; }
if(isset($imageItem2)) {
$image2 = 'http://' .$hostimage. '/web/apps/uploadwithcroppage/upload_pic/'.$imageItem2.''; }
if(isset($imageItem3)) {
$image3 = 'http://' .$hostimage. '/web/apps/uploadwithcroppage/upload_pic/'.$imageItem3.''; }


?>
<!-- Load the Cloud Zoom CSS file -->
<link href="cloud-zoom.css" rel="stylesheet" type="text/css" />

<!-- You can load the jQuery library from the Google Content Network.
Probably better than from your own server. -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<!-- Load the Cloud Zoom JavaScript file -->
<script type="text/JavaScript" src="cloud-zoom.1.0.2.min.js"></script>

</head>
    <body style="width:680px;">
        
        <!--	
        An anchor with class of 'cloud-zoom' should surround the small image.
        The anchor's href should point to the big zoom image.
        Any options can be specified in the rel attribute of the anchor.
        Options should be specified in regular JavaScript object format,
        but without the braces.
        -->





    	<div id="left" style="float:left">
<div>
        <a href="<?=$image1?>"  class = 'cloud-zoom' id='zoom1' rel="zoomHeight:300, zoomWidth:300, adjustX: 0, adjustY:0 "
          >
            <img src="<?=$image1?>"  alt='' title="Zoom Image" height="300px" width="245px" style="border: 1px solid #bebebe; margin-bottom:7px;"/>
        </a>
        
</div>         
        <!--	
        You can optionally create a gallery by creating anchors with a class of 'cloud-zoom-gallery'.
        The anchor's href should point to the big zoom image.
        In the rel attribute you must specify the id of the zoom to use (useZoom: 'zoom1'),
        and also the small image to use (smallImage: images/....)
        -->


<div>        
        <a href='<?php echo $image1; ?>' class='cloud-zoom-gallery' title='Thumbnail 1' 
        	rel=" useZoom: 'zoom1', smallImage: '<?=$image1?>'  ">
        <img src='<?php echo $image1; ?>' alt = "Thumbnail 1" width="75px" height="90px;" style="border: 1px solid #bebebe; margin-right:5px;"/></a>
        
        <a href='<?=$image2?>'  class='cloud-zoom-gallery' title='Thumbnail 2'
        	rel="useZoom: 'zoom1', smallImage: '<?=$image2?>' ">
        <img src='<?=$image2?>'  alt = "Thumbnail 2" width="75px" height="90px;" style="border: 1px solid #bebebe; margin-right:5px;"/></a>                  
        
        <a href='<?=$image3?>'  class='cloud-zoom-gallery' title='Thumbnail 3'
        	rel="useZoom: 'zoom1', smallImage: '<?=$image3?>'  ">
        <img src='<?=$image3?>'  alt = "Thumbnail 3" width="75px" height="90px;" style="border: 1px solid #bebebe; margin-right:5px;"/></a> 
		
	</div>	
</div>













    	<div id="right" style="float:left; margin-left:10px;">
<?php 

if($_SERVER['SERVER_NAME'] == 'localhost') $domainn = 'localhost/web'; else $domainn = $domain;

$homepage = file_get_contents('http://'.$domainn.'/admin/web/apps/texteditor/test/functional/test.php?id='.$pagenumber.'');
echo $homepage;

?>
</div>		
    </body>
</html>
