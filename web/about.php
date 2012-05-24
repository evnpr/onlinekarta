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
 
 <?php include "banner.php" ; ?> 
<?php include "menu.php" ; ?> 

<div id="isi" style="float:left; width: 690px; margin-top:15px; margin-left:10px; border: 0px solid;">

 

<div id="about" style="width:100%;  padding:10px; font-size:12px; text-align:left" onMouseover="Appearabout()" onMouseout="Hideabout()">
 <?php echo $textabout; ?>
 
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
