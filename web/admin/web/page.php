<html>
<head>
<script type="text/javascript">documentgetElementById("harga8").innerHTML="hebat"</script>
<?php
include "db.php";
include "dbtake.php";
include "style.php";

?> 

</head>
<?php include "header.php"; ?>
<div id="konten">
<?php 
$pagenumber = $_GET['page'];

?>
 
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
xmlhttp.open("GET","save/savepage1.php?page="+str,true);
xmlhttp.send();
}
</script>

<div id="isi" style="float:left; width: 690px; margin-top:15px; margin-left:10px; border: 0px solid;">

<div id="about" style="width:100%;  padding:10px; font-size:12px; text-align:left">
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <?php 
 $itemNumber = 1;
 for($ee=0;$ee<$itemNumber;$ee++) {?>
<div  onMouseover="Appearabout()" onMouseout="Hideabout()">  

<div style="float:left;  width:690px; height:500px;">
<div id="uploadbutton" style="float:left;position:absolute; display:none">
<a href="http://<?=$hostimage?>/web/apps/uploadwithcroppage/index.php?id=1&&item=1&&page=<?=$pagenumber?>"><button>Upload Photo 1 </button></a> <br>
<a href="http://<?=$hostimage?>/web/apps/uploadwithcroppage/index.php?id=2&&item=1&&page=<?=$pagenumber?>"><button>Upload Photo 2 </button></a> <br>
<a href="http://<?=$hostimage?>/web/apps/uploadwithcroppage/index.php?id=3&&item=1&&page=<?=$pagenumber?>"><button>Upload Photo 3 </button></a>
</div>

<input type="submit" value="refresh"  id="photoimgabout" style=" display:none; position:absolute;  margin-left:270px; width:80px; height:20px; color: brown" onMouseover="Appearabout()" onMouseout="Hideabout()" onClick="history.go(0)"/>

<input type="submit" value="edit here" id="refreshabout" style=" display:none; position:absolute; margin-top:25px; margin-left:270px; width:80px; height:20px; color: brown" onClick="window.open('apps/texteditor/test/functional/test.php?id=<? echo $_GET["page"]; ?>','mywindow','width=750,height=700,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,copyhistory=no,resizable=yes,left=600,top=50,screenX=600,screenY=50'); return false" onMouseover="Appearabout()" onMouseout="Hideabout()"/>


<iframe src="apps/type2/index.php?page=<? echo $_GET["page"]; ?>" width="690" height="500" frameborder="0"></iframe>
</div>
</div> 
 <?php };?>
 
 
 
 
 
 
 
 
 
 
 
 
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
