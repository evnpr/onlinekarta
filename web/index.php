<html>
<head>

 
<?php
include "db.php";
include "dbtake.php";
include "style.php";

?>


</head>
	 

	
	 


<script type="text/javascript" >
 function Appear() {
 
 document.getElementById('preview').style.border='1px solid #000';
 
 
 }
 
 function Hide() {
 
 document.getElementById('preview').style.border='1px solid #fff';
 
 
 }
 
 
</script>

 
 
<?php 
for($p=2;$p<10;$p++) echo '<script type="text/javascript" >
 function Appear'.$p.'() {
 
 document.getElementById("preview'.$p.'").style.border="1px solid #000";
 
 
 }
 
 function Hide'.$p.'() {
 
 document.getElementById("preview'.$p.'").style.border="1px solid #fff";
 
 
 }
 
 
</script>'; ?>
 

 
<body>

<center>

<?php 
include "header.php";
?>

<div id="konten">


<?php include "banner.php" ; ?> 
<?php include "menu.php" ; ?> 




<div id="isi" style="float:left">
 
<div id="kiri">

<div class="kiri-top">

<div id='preview' style="height:84%; border: 1px solid white;  ; padding:1px; <? if($harga=='close') echo 'display:none'; ?>"  onMouseover="Appear()" onMouseout="Hide()">
<a href="page.php?page=textPage1"><img src="<?php if($image01 == 1) echo 'http://' .$hostimage. '/web/'; else if($image01 == 0) echo 'admin/web/'; ?>apps/uploadwithcrop/upload_pic/<? echo $image; ?>" width="100%" height="100%"/></a></div>

<div style="height:15%; border: 0px solid; background-color: #f4f0ed; <? if($harga=='close') echo 'display:none'; ?>"  onclick="HideHarga1()">
<div style="padding:5px;" id="harga1"><? echo $harga; ?></div><input type="text" id="inputharga1" onblur="showHint(this.value,this.id)" value="<? echo $harga; ?>" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
<? 
 mysql_close($con);
?>
</div>
</div>
<?php $s=2; ?>
<div class="kiri-mid">
 
<?php if($image02 == 1) $image02 = 'http://' .$hostimage. '/web/'; else if($image02 == 0) $image02 = 'admin/web/';  
echo ' 
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;  ; padding:1px;'; if($harga2=='close') echo 'display:none'; echo '"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage2"><img src="'.$image02.'apps/uploadwithcrop/upload_pic/'.$image2.'" width="100%" height="100%"/></div></a>
<div style="height:15%; border: 0px solid; background-color: #f4f0ed;';if($harga2=='close') echo 'display:none'; echo '"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga2.'</div><input type="text" id="inputharga'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga2.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>

</div>

<div class="kiri-bottom">
<?php
if($image03 == 1) $image03 = 'http://' .$hostimage. '/web/'; else if($image03 == 0) $image03= 'admin/web/';  
echo ' 
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;  ; padding:1px; '; if($harga3=='close') echo 'display:none'; echo '"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage3"><img src="'.$image03.'apps/uploadwithcrop/upload_pic/'.$image3.'" width="100%" height="100%"/></div></a>
<div style="height:15%; border: 0px solid; background-color: #f4f0ed; '; if($harga3=='close') echo 'display:none'; echo '"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga3.'</div><input type="text" id="inputharga'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga3.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>
</div>
</div>


<div id="tengah">

<div class="tengah-top">

<?php
if($image04 == 1) $image04 = 'http://' .$hostimage. '/web/'; else if($image04 == 0) $image04= 'admin/web/';  
echo ' 
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;  ; padding:1px;'; if($harga4=='close') echo 'display:none'; echo '"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage4"><img src="'.$image04.'apps/uploadwithcrop/upload_pic/'.$image4.'" width="100%" height="100%"/></div></a>
<div style="height:15%; border: 0px solid; background-color: #f4f0ed; '; if($harga4=='close') echo 'display:none'; echo '"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga4.'</div><input type="text" id="inputharga'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga4.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>

</div>

<div class="tengah-mid">
<?php
if($image05 == 1) $image05 = 'http://' .$hostimage. '/web/'; else if($image05 == 0) $image05= 'admin/web/';  
echo ' 
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;  ; padding:1px; '; if($harga5=='close') echo 'display:none'; echo '"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage5"><img src="'.$image05.'apps/uploadwithcrop/upload_pic/'.$image5.'" width="100%" height="100%"/></div></a>
<div style="height:15%; border: 0px solid; background-color: #f4f0ed; '; if($harga5=='close') echo 'display:none'; echo '"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga5.'</div><input type="text" id="inputharga'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga5.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>


</div>
<div class="tengah-bottom">
<?php
if($image06 == 1) $image06 = 'http://' .$hostimage. '/web/'; else if($image06 == 0) $image06= 'admin/web/';  
echo ' 
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;  ; padding:1px; '; if($harga6=='close') echo 'display:none'; echo '"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage6"><img src="'.$image06.'apps/uploadwithcrop/upload_pic/'.$image6.'" width="100%" height="100%"/></div></a>
<div style="height:15%; border: 0px solid; background-color: #f4f0ed; '; if($harga6=='close') echo 'display:none'; echo '"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga6.'</div><input type="text" id="inputharga'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga6.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>


</div>
 
</div>



<div id="kanan">
<div class="kanan-top">
<?php
if($image07 == 1) $image07 = 'http://' .$hostimage. '/web/'; else if($image07 == 0) $image07= 'admin/web/';  
echo ' 
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;  ; padding:1px; '; if($harga7=='close') echo 'display:none'; echo '"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage7"><img src="'.$image07.'apps/uploadwithcrop/upload_pic/'.$image7.'" width="100%" height="100%"/></div></a>
 <div style="height:15%; border: 0px solid; background-color: #f4f0ed; '; if($harga7=='close') echo 'display:none'; echo '"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga7.'</div><input type="text" id="inputharga'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga7.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>


</div>
<div class="kanan-mid">
<?php
if($image08 == 1) $image08 = 'http://' .$hostimage. '/web/'; else if($image08 == 0) $image08= 'admin/web/';  
echo ' 
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;  ; padding:1px; '; if($harga8=='close') echo 'display:none'; echo '"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage8"><img src="'.$image08.'apps/uploadwithcrop/upload_pic/'.$image8.'" width="100%" height="100%"/></div></a>
 <div style="height:15%; border: 0px solid; background-color: #f4f0ed; '; if($harga8=='close') echo 'display:none'; echo '"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga8.'</div><input type="text" id="inputharga'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga8.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>

</div>
<div class="kanan-bottom">
<?php
if($image09 == 1) $image09 = 'http://' .$hostimage. '/web/'; else if($image09 == 0) $image09= 'admin/web/';  
echo ' 
<div id="preview'.$s.'" style="height:84%; border: 1px solid white;  ; padding:1px; '; if($harga9=='close') echo 'display:none'; echo '"  onMouseover="Appear'.$s.'()" onMouseout="Hide'.$s.'()">
<a href="page.php?page=textPage9"><img src="'.$image09.'apps/uploadwithcrop/upload_pic/'.$image9.'" width="100%" height="100%"/></div></a>
 <div style="height:15%; border: 0px solid; background-color: #f4f0ed; '; if($harga9=='close') echo 'display:none'; echo '"  onclick="HideHarga'.$s.'()">
<div style="padding:5px;" id="harga'.$s.'">'.$harga9.'</div><input type="text" id="inputharga'.$s.'" onblur="showHint'.$s.'(this.value,this.id)" value="'.$harga9.'" style="text-align:center; margin-right:auto; margin-left:auto; padding-top:10px; width:50%;display:none"/>
</div>
';
$s++;
?>

</div>
</div>
 
</div>

<div id="kanan2" style="margin-top:15px">
  
 
  <?php include "sidebar.php" ; ?> 
  

 
  
</div>

</div>


  <?php include "bottom.php" ; ?> 
  

		  

		 
</center>	
</body>

	
 
	 
	 
	 
		 
		  
</html>
