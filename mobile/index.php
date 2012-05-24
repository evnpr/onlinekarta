<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">


<head>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- \/ Enter page title, meta description & meta keywords \/ -->
<meta name="description" content="Onlinekarta.com adalah semacam search engine badan usaha di Indonesia. :D" />

<title>Onlinekarta</title>


<? require"searchheader.php"; ?>

</head>

 


<body style="border-style:solid; border-width:1px; border-color:#fff; background-color:#fff;">
<div  style="text-align:right; float:right; margin-top:1px; margin-left:5px;"> <a href="help.php" style=""><font size="1">Help</a>       &nbsp</font></div>
<div  style="text-align:right; float:right; margin-top:1px; margin-left:5px;"> <a href="aboutus.php" style=""><font size="1">About Us</a>       |</font></div>
<div  style="text-align:right; float:right; margin-top:1px; margin-left:5px;"> <a href="index.php"  style=""><font size="1">Home</a>       |</font></div>



<center>

<div style="margin-top: 10%; width: 100%;">

<div>




<div><img src="onlinekartakecil.gif">

</div>


</div>

<center>
<div>
<form name="" action="data.php" method="post">
 
<select size="1" name="models">
<? include("../searchcenterdaerah.php"); ?></select>
 
	 
	<select name="kategori">
 	 <option value="all">--Semua Kategori--</option>
	<? include("searchcentercenter.php"); ?>
</select>
 
	<div><br></div>
<input type="submit" value="cari sekarang" />
</form>

</div>
</center>


</div> 

</center>

<script type="text/javascript">
  resetForm(document.autoSelectForm);
</script>


</body>
</html>
