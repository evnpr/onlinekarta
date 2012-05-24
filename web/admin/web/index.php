<html>
<head>

 
<?php


include "db.php";
include "dbtake.php";
include "style.php";

?> 
</head>

<?php include "header.php"; ?>
	
<div id="konten">

<?php include "banner.php"; ?>
<?php include "menu.php"; ?>



<div id="isi" style="float:left">
 
 
<div id="kiri">

<div class="kiri-top">

<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php?id=kiri1'>
<input type="file" name="photoimg" id="photoimg" style="display:none; position:absolute; margin-top:30px" onMouseover="Appear()"/>
</form>
<a href="http://' .$hostimage. '/web/apps/uploadwithcrop/index.php?id=kiri1">
<input type="button" value="Advance Upload" id="photocrop" style="display:none; position:absolute; margin-top:0px" onMouseover="Appear()" onMouseout="Hide()"/>
</a>
<div id='preview' style="height:84%; border: 1px solid white;"  onMouseover="Appear()" onMouseout="Hide()">
<a href="page.php?page=textPage1"><img src="<?php if($image01 == 1) echo 'http://' .$hostimage. '/web/'; else if($image01 == 0) echo ''; ?>apps/uploadwithcrop/upload_pic/<? echo $image; ?>" width="100%" height="100%"/></div>
</a>
 


<script type="text/javascript">
function showHint(str,hrg)
{

document.getElementById("price1").style.display='none';
document.getElementById("harga1").style.display='block'; 

if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("harga1").innerHTML=xmlhttp.responseText;
    
    }
  }
xmlhttp.open("GET","save/saveharga.php?harga="+str+"&id="+hrg,true);
xmlhttp.send();
	
	}
</script>

<?php 
for($ihrg=2;$ihrg<10;$ihrg++) echo '
<script type="text/javascript">
function showHint'.$ihrg.'(str,hrg)
{

document.getElementById("price'.$ihrg.'").style.display="none";
document.getElementById("harga'.$ihrg.'").style.display="block"; 

if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("harga'.$ihrg.'").innerHTML=xmlhttp.responseText;
    
    }
  }
xmlhttp.open("GET","save/saveharga.php?harga="+str+"&id="+hrg,true);
xmlhttp.send();
	
	}
</script>
'; ?>




<div style="height:15%; border: 0px solid; background-color: #f4f0ed"  onclick="HideHarga1()">
<div style="padding:5px;" id="harga1"><? echo $harga; ?></div><input type="text" id="price1" onblur="showHint(this.value,this.id)" value="<? echo $harga; ?>" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
<? 
 mysql_close($con);
?>
</div>
</div>
<?php $s=2; ?>
<div class="kiri-mid">
 
<?php if($image02 == 1) $image02 = 'http://' .$hostimage. '/web/'; else if($image02 == 0) $image02 = '';  
echo '<form id="imageform'.$s.'" method="post" enctype="multipart/form-data" action="ajaximage.php?id=kiri2">
<input type="file" name="photoimg" id="photoimg'.$s.'" style="display:none; position:absolute; margin-top:35px" onMouseover="Appear'.$s.'()"/>
</form>
<a href="http://' .$hostimage. '/web/apps/uploadwithcrop/index.php?id=kiri2">
<input type="button" value="Advance Upload" id="photocrop'.$s.'" style="display:none; position:absolute; margin-top:0px" onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()"/>
</a>
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage2"><img src="'.$image02.'apps/uploadwithcrop/upload_pic/'.$image2.'" width="100%" height="100%"/></div></a>
<div style="height:15%; border: 0px solid; background-color: #f4f0ed"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga2.'</div><input type="text" id="price'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga2.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>

</div>

<div class="kiri-bottom">
<?php
if($image03 == 1) $image03 = 'http://' .$hostimage. '/web/'; else if($image03 == 0) $image03 = '';  
echo '<form id="imageform'.$s.'" method="post" enctype="multipart/form-data" action="ajaximage.php?id=kiri3">
<input type="file" name="photoimg" id="photoimg'.$s.'" style="display:none; position:absolute; margin-top:35px" onMouseover="Appear'.$s.'()"/>
</form>
<a href="http://' .$hostimage. '/web/apps/uploadwithcrop/index.php?id=kiri3">
<input type="button" value="Advance Upload" id="photocrop'.$s.'" style="display:none; position:absolute; margin-top:0px" onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()"/>
</a>
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage3"><img src="'.$image03.'apps/uploadwithcrop/upload_pic/'.$image3.'" width="100%" height="100%"/></div></a>
<div style="height:15%; border: 0px solid; background-color: #f4f0ed"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga3.'</div><input type="text" id="price'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga3.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>
</div>
</div>


<div id="tengah">

<div class="tengah-top">

<?php
if($image04 == 1) $image04 = 'http://' .$hostimage. '/web/'; else if($image04 == 0) $image04 = '';  
echo '<form id="imageform'.$s.'" method="post" enctype="multipart/form-data" action="ajaximage.php?id=kiri4">
<input type="file" name="photoimg" id="photoimg'.$s.'" style="display:none; position:absolute; margin-top:35px" onMouseover="Appear'.$s.'()"/>
</form>
<input type="file" name="photoimg" id="photoimg'.$s.'" style="display:none; position:absolute; margin-top:35px" onMouseover="Appear'.$s.'()"/>
</form>
<a href="http://' .$hostimage. '/web/apps/uploadwithcrop/index.php?id=kiri4">
<input type="button" value="Advance Upload" id="photocrop'.$s.'" style="display:none; position:absolute; margin-top:0px" onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()"/>
</a>
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage4"><img src="'.$image04.'apps/uploadwithcrop/upload_pic/'.$image4.'" width="100%" height="100%"/></div></a>
<div style="height:15%; border: 0px solid; background-color: #f4f0ed"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga4.'</div><input type="text" id="price'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga4.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>

</div>

<div class="tengah-mid">
<?php
if($image05 == 1) $image05 = 'http://' .$hostimage. '/web/'; else if($image05 == 0) $image05 = '';  
echo '<form id="imageform'.$s.'" method="post" enctype="multipart/form-data" action="ajaximage.php?id=kiri5">
<input type="file" name="photoimg" id="photoimg'.$s.'" style="display:none; position:absolute; margin-top:35px" onMouseover="Appear'.$s.'()"/>
</form>
<a href="http://' .$hostimage. '/web/apps/uploadwithcrop/index.php?id=kiri5">
<input type="button" value="Advance Upload" id="photocrop'.$s.'" style="display:none; position:absolute; margin-top:0px" onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()"/>
</a>
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage5"><img src="'.$image05.'apps/uploadwithcrop/upload_pic/'.$image5.'" width="100%" height="100%"/></div></a>
<div style="height:15%; border: 0px solid; background-color: #f4f0ed"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga5.'</div><input type="text" id="price'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga5.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>


</div>
<div class="tengah-bottom">
<?php
if($image06 == 1) $image06 = 'http://' .$hostimage. '/web/'; else if($image06 == 0) $image06 = '';  
echo '<form id="imageform'.$s.'" method="post" enctype="multipart/form-data" action="ajaximage.php?id=kiri6">
<input type="file" name="photoimg" id="photoimg'.$s.'" style="display:none; position:absolute; margin-top:35px" onMouseover="Appear'.$s.'()"/>
</form>
<a href="http://' .$hostimage. '/web/apps/uploadwithcrop/index.php?id=kiri6">
<input type="button" value="Advance Upload" id="photocrop'.$s.'" style="display:none; position:absolute; margin-top:0px" onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()"/>
</a>
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage6"><img src="'.$image06.'apps/uploadwithcrop/upload_pic/'.$image6.'" width="100%" height="100%"/></div></a>
<div style="height:15%; border: 0px solid; background-color: #f4f0ed"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga6.'</div><input type="text" id="price'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga6.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>


</div>
 
</div>



<div id="kanan">
<div class="kanan-top">
<?php
if($image07 == 1) $image07 = 'http://' .$hostimage. '/web/'; else if($image07 == 0) $image07 = '';  
echo '<form id="imageform'.$s.'" method="post" enctype="multipart/form-data" action="ajaximage.php?id=kiri7">
<input type="file" name="photoimg" id="photoimg'.$s.'" style="display:none; position:absolute; margin-top:35px" onMouseover="Appear'.$s.'()"/>
</form>
<a href="http://' .$hostimage. '/web/apps/uploadwithcrop/index.php?id=kiri7">
<input type="button" value="Advance Upload" id="photocrop'.$s.'" style="display:none; position:absolute; margin-top:0px" onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()"/>
</a>
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage7"><img src="'.$image07.'apps/uploadwithcrop/upload_pic/'.$image7.'" width="100%" height="100%"/></div></a>
 <div style="height:15%; border: 0px solid; background-color: #f4f0ed"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga7.'</div><input type="text" id="price'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga7.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>


</div>
<div class="kanan-mid">
<?php
if($image08 == 1) $image08 = 'http://' .$hostimage. '/web/'; else if($image08 == 0) $image08 = '';  
echo '<form id="imageform'.$s.'" method="post" enctype="multipart/form-data" action="ajaximage.php?id=kiri8">
<input type="file" name="photoimg" id="photoimg'.$s.'" style="display:none; position:absolute; margin-top:35px" onMouseover="Appear'.$s.'()"/>
</form>
<a href="http://' .$hostimage. '/web/apps/uploadwithcrop/index.php?id=kiri8">
<input type="button" value="Advance Upload" id="photocrop'.$s.'" style="display:none; position:absolute; margin-top:0px" onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()"/>
</a>
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage8"><img src="'.$image08.'apps/uploadwithcrop/upload_pic/'.$image8.'" width="100%" height="100%"/></div></a>
 <div style="height:15%; border: 0px solid; background-color: #f4f0ed"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga8.'</div><input type="text" id="price'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga8.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>

</div>
<div class="kanan-bottom">
<?php
if($image09 == 1) $image09 = 'http://' .$hostimage. '/web/'; else if($image09 == 0) $image09 = '';  
echo '<form id="imageform'.$s.'" method="post" enctype="multipart/form-data" action="ajaximage.php?id=kiri9">
<input type="file" name="photoimg" id="photoimg'.$s.'" style="display:none; position:absolute; margin-top:35px" onMouseover="Appear'.$s.'()"/>
</form>
<a href="http://' .$hostimage. '/web/apps/uploadwithcrop/index.php?id=kiri9">
<input type="button" value="Advance Upload" id="photocrop'.$s.'" style="display:none; position:absolute; margin-top:0px" onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()"/>
</a>
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage9"><img src="'.$image09.'apps/uploadwithcrop/upload_pic/'.$image9.'" width="100%" height="100%"/></div></a>
 <div style="height:15%; border: 0px solid; background-color: #f4f0ed"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga9.'</div><input type="text" id="price'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga9.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>

</div>
</div>
 
</div>
<script type="text/javascript">
function showSidebar(str)
{
if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("sidebar").innerHTML=xmlhttp.responseText;
    
    }
  }
xmlhttp.open("GET","save/savesidebar.php?sidebar="+str,true);
xmlhttp.send();
}
</script>
<div id="kanan2" style="margin-top:15px">
 
 
<?php include "sidebar.php"; ?>
  
</div>

</div>

<?php include "bottom.php"; ?>
  

		  

		 
</center>	
</body>

	
 
	 
	 
	 
		 
		  
</html>
