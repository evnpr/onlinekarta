<html>
<head>
<?php
include "db.php";
include "dbtake.php";
include "style.php";

?>

</head>
	 
	 
 
 
 
<body>

<center>
 
<?php 
include "header.php";
?>

<div id="konten">


<?php include "menu.php" ; ?> 

 

<div id="isi" style="float:left; width: 690px; margin-top:15px; margin-left:10px; border: 0px solid;">

<input type="submit" value="refresh" id="photoimgabout" style=" display:none; position:absolute; width:100px; height:40px; color: brown" onMouseover="Appearabout()" onMouseout="Hideabout()" onclick="showAbout('<? echo $_GET['page'];?>')"/>
 
 
 
 
 
 
 
 
 

<?php 
$limItem=1;
for($item=0;$item<$limItem;$item++)  {
?>
<div >  
 
 
<iframe src="admin/web/apps/type2/index.php?page=<? echo $_GET['page'];?>" width="695" height="500" frameborder="0"></iframe>

</div>

<?php  }; ?>
 
 
 
 
 
 
 
 
 

</div>
 
<div id="kanan2" style="margin-top:15px">
 
  <?php include "sidebar.php" ; ?> 
 
 
  
</div>

</div>

	
  <?php include "bottom.php" ; ?> 
  
		 

		  

		 
</center>	
</body>

	
 
	 
	 
	 
		 
		  
</html>
