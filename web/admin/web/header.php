<script src="apps/texteditor/lib/prototype.js" type="text/javascript"></script>
    <script src="apps/texteditor/lib/effects.js" type="text/javascript"></script>
    <script src="apps/texteditor/lib/controls.js" type="text/javascript"></script>
    <script src="apps/texteditor/lib/patch_inplaceeditor_1-8-2.js" type="text/javascript"></script>
    <script src="apps/texteditor/lib/patch_inplaceeditor_editonblank_1-8-2.js" type="text/javascript"></script>
    <script src="apps/texteditor/lib/tiny_mce/tiny_mce.js" type="text/javascript"></script>
    <script src="apps/texteditor/lib/tiny_mce_init.js" type="text/javascript"></script>
    <script src="apps/texteditor/src/inplacericheditor.js" type="text/javascript"></script>
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<script type="text/javascript" src="scripts/hide.js"></script> 

<!-- LOGO -->
<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimglogo').live('change', function()			{ 
			           $("#logo").html('');
		
			    $("#logo").html('<img src="loader.gif" alt="Uploading...." />');

			$("#imageformlogo").ajaxForm({
						target: '#logo'
		}).submit();
		
			});
        }); 
</script>
<!-- /LOGO -->

<!-- BANNER UPLOAD LANGSUNG -->
<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg0').live('change', function()			{ 
			           $("#body").html('');
		
			    $("#body").html('<img src="loader.gif" alt="Uploading...." />');

			$("#imageform0").ajaxForm({
						target: '#body'
		}).submit();
		
			});
        }); 
</script>
<!-- /BANNER UPLOAD LANGSUNG-->

<!-- HARGA -->
<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
		
			    $("#preview").html('<img src="loader.gif" alt="Uploading...." />');

			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
		
			});
        }); 

function HideHarga1()  
{
	document.getElementById("price1").style.display='block';
	document.getElementById("harga1").style.display='none'; 
 
		
}

<?php for($hideharga=2;$hideharga<10;$hideharga++)echo '
function HideHarga'.$hideharga.'()  
{
	 document.getElementById("price'.$hideharga.'").style.display="block";
	document.getElementById("harga'.$hideharga.'").style.display="none"; 
 
		
}
';
?> 
</script>
<!-- /HARGA -->

<!-- AJAX UPLOAD PRODUCT HOMEPAGE -->
<?php
for($i=2;$i<11;$i++) { echo '<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('."'".'#photoimg'.$i.''."'".').live('."'".'change'."'".', function()			{ 
			           $("#preview'.$i.'").html('."'"."'".');
		
			    $("#preview'.$i.'").html('."'".'<img src="loader.gif" alt="Uploading...." />'."'".');

			$("#imageform'.$i.'").ajaxForm({
						target: '."'".'#preview'.$i.''."'".'
		}).submit();
		
			});
        }); 


</script>';
?>
<!-- /AJAX UPLOAD PRODUCT HOMEPAGE-->


<?php
// ----------- FORM PRODUCT HOMEPAGE UPLOAD ---------------
echo '<script type="text/javascript" > 
function Hide'.$i.'()
{
	document.getElementById("photoimg'.$i.'").style.display='."'".'none'."'".';
	document.getElementById("photocrop'.$i.'").style.display="none";  
		
}

function Appear'.$i.'()
{
	document.getElementById("photoimg'.$i.'").style.display='."'".'block'."'".';
	document.getElementById("photocrop'.$i.'").style.display="block"; 	 
		
}





function Hideabout'.$i.'()
{
	document.getElementById("photoimgabout'.$i.'").style.display="none";
	 
	document.getElementById("refreshabout'.$i.'").style.display="none";  	
}

function Appearabout'.$i.'()
{
	document.getElementById("photoimgabout'.$i.'").style.display="block";
	 
	document.getElementById("refreshabout'.$i.'").style.display="block"; 
		
}
</script>'; }
?>


	
	 

  <style>
.preview
{ 
width:100%;
height:100%;
border:solid 1px #dedede;
 
z-index:2; 
}


</style>
 
 

 


 
<body>

<center>
<div id="header-atas"> <script type="text/javascript" src="apps/jscolor/jscolor.js"></script>
 
<div id="header-atas-fixed"> 


<!-- COLOR CHANGE -->
<form action="save/savecolorpallet.php" id="pilihwarna" style="right:400px; top:2px; position:absolute; display:none;" method="get">
	<label><font size="2" color="white">Pilih Warna </font><input name="warna" value="<?php echo $c1; ?>" class="color"></label>
	<input type="submit" value="save"/>
</form>	


<!-- BACKGROUND CHANGE -->

<form id="imageform0" method="post" enctype="multipart/form-data" action='ajaximage0.php' style="right:-40px; position:absolute; display:none">
<label><font size="2" color="white">Background Image</font> <input type="file" name="photoimg" id="photoimg0"/></label>
</form>

<!-- /BACKGROUND CHANGE-->

	
<a href="index.php"><input type="button" value="refresh" id="refresh" style="right:-40px; position:absolute; margin-top:40px; width=:150px; height:50px; display:none" /></a>


<div style="float:left; margin-left:20px; margin-top:0px; padding-top:0px; height:45px; width:180px;" id="logo" onMouseover="Appearlogo()" onMouseout="Hidelogo()"> <img src="<?php if($image0logo == 1) echo 'http://'.$hostimage.'/web/'; else if($image0logo == 0) echo ''; ?>apps/uploadwithcrop/upload_pic/<? echo $imagelogo; ?>" height="45px" width="180px" /> </div>




<!-- LOGO CHANGE -->
<form id="imageformlogo" method="post" enctype="multipart/form-data" action='ajaximagelogo.php' style="margin-top:0px; left:0px; position:absolute">
<input type="file" name="photoimg" id="photoimglogo"  style="display:none;" onMouseover="Appearlogo()"/>
</form>

<a href="http://<?=$hostimage?>/web/apps/uploadwithcrop/index.php?id=logo">
<input type="button" value="Advance Upload" id="photocroplogo" style="display:none; position:absolute; margin-top:25px" onMouseover="Appearlogo()" onMouseout="Hidelogo()" />
</a>
<!-- /LOGO CHANGE -->

</div>
</div>
