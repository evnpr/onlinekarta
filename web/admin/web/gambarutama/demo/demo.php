<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
 
    <link rel="stylesheet" href="../themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../themes/pascal/pascal.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../themes/orman/orman.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../nivo-slider.css" type="text/css" media="screen" />
 <?php
include "../../db.php";
include "../../dbtake.php";

?>
</head>
<body>
    <div id="wrapper">
    
       

        <div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
			
			
			
			
			
			
			
			
			
			
			
			
			
                <img src="<?php if($image100 == 1) echo 'http://' .$hostimage. '/web/'; else if($image100 == 0) echo '../../'; ?>apps/uploadwithcrop/upload_pic/<? echo $image10; ?>" alt="" width="930" height="350"/>
				
				
				
                <img src="<?php if($image100 == 1) echo 'http://' .$hostimage. '/web/'; else if($image100 == 0) echo '../../'; ?>apps/uploadwithcrop/upload_pic/<? echo $image10_2; ?>" alt="" width="930" height="350" title="<?=$image10_caption?>" /> 
								
				
				
                <img src="<?php if($image100 == 1) echo 'http://' .$hostimage. '/web/'; else if($image100 == 0) echo '../../'; ?>apps/uploadwithcrop/upload_pic/<? echo $image10_3; ?>" alt="" width="930" height="350"data-transition="slideInLeft" />
				
				
				
				
                <img src="<?php if($image100 == 1) echo 'http://' .$hostimage. '/web/'; else if($image100 == 0) echo '../../'; ?>apps/uploadwithcrop/upload_pic/<? echo $image10_4; ?>" alt="" width="930" height="350"title="#htmlcaption" />
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <?=$image10_caption2?>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="scripts/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="../jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>
