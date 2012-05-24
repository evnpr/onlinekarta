
<div class="gambarutama" >

<form id="imageform10" method="post" enctype="multipart/form-data" action='ajaximage10.php'>
<!-- <input type="file" name="photoimg" id="photoimg10" style="display:none; position:absolute; margin-top:130px; " onMouseover="Appear10()"/> -->
<div id='photoimg10'></div>
</form>

<div  id="photocrop10"  onMouseover="Appear10()" onMouseout="Hide10()" style="display:none">
<a href="http://<?=$hostimage?>/web/apps/uploadwithcrop/index.php?id=gambarutama">
<input type="button" value="Upload Photo 1" style="position:absolute; margin-top:0px" onMouseover="Appear10()" onMouseout="Hide10()"/>
</a>
<a href="http://<?=$hostimage?>/web/apps/uploadwithcrop/index.php?id=gambarutama2">
<input type="button" value="Upload Photo 2" style="position:absolute; margin-top:0px; margin-left: 120px" onMouseover="Appear10()" onMouseout="Hide10()"/>
</a>
<a href="http://<?=$hostimage?>/web/apps/uploadwithcrop/index.php?id=gambarutama3">
<input type="button" value="Upload Photo 3" style="position:absolute; margin-top:0px; margin-left: 240px" onMouseover="Appear10()" onMouseout="Hide10()"/>
</a>
<a href="http://<?=$hostimage?>/web/apps/uploadwithcrop/index.php?id=gambarutama4">
<input type="button" value="Upload Photo 4" style="position:absolute; margin-top:0px; margin-left: 360px" onMouseover="Appear10()" onMouseout="Hide10()"/>
</a>
</div>
<div id='preview10' style="height:100%; border: 1px solid white; margin-top:-20px ; "  onMouseover="Appear10()" onMouseout="Hide10()">

<!--
<img src="<?php if($image100 == 1) echo 'http://<?=$hostimage?>/web/'; else if($image100 == 0) echo ''; ?>apps/uploadwithcrop10/upload_pic/<? echo $image10; ?>" width="100%" height="100%" />
-->

<iframe src="gambarutama/demo/demo.php" width="100%" height="118%" frameborder="0"></iframe>
 
</div>

</div>
