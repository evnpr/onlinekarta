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

<script type="text/javascript">
function showAbout(str)
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
    document.getElementById("about").innerHTML=xmlhttp.responseText;
    
    }
  }
xmlhttp.open("GET","save/saveabout.php?about="+str,true);
xmlhttp.send();
}
</script>

<div id="isi" style="float:left; width: 690px; margin-top:15px; margin-left:10px; border: 0px solid;">

<input type="submit" value="refresh" id="photoimgabout" style=" display:none; position:absolute; width:100px; height:40px; color: brown" onMouseover="Appearabout()" onMouseout="Hideabout()" onclick="showAbout(this.value)"/>
 
<form>
<input type="submit" value="edit here" id="refreshabout" style="display:none; position:absolute; margin-top:45px; margin-left: 0px; width:100px; height:40px; color: brown" onClick="window.open('apps/texteditor/test/functional/test.php?id=textAbout','mywindow','width=750,height=700,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,copyhistory=no,resizable=yes,left=600,top=50,screenX=600,screenY=50'); return false" onMouseover="Appearabout()" onMouseout="Hideabout()"/>
</form>

<div id="about" style="width:100%;  padding:10px; font-size:12px; text-align:left" onMouseover="Appearabout()" onMouseout="Hideabout()">
 <?php echo $textabout; ?>
 
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
