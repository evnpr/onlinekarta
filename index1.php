<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">


<head>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- \/ Enter page title, meta description & meta keywords \/ -->
<meta name="description" content="Onlinekarta.com adalah semacam search engine badan usaha di Indonesia. :D" />

<title>Onlinekarta</title>


<? require"searchheader.php"; ?>

</head>

 


<body style="border-style:solid; border-width:1px; border-color:#fff; background-color:fff; font-family:lucida grande, tahoma, verdana, arial, sans-serif;">
<div  style="text-align:right; font-size:14px; float:right; margin-top:10px; margin-left:5px;"> <a href="help.php" style="color:">Help</a>       &nbsp</div>
<div  style="text-align:right; font-size:14px; float:right; margin-top:10px; margin-left:5px;"> <a href="aboutus.php" style="color:">About Us</a>       |</div>
<div  style="text-align:right; font-size:14px; float:right; margin-top:10px; margin-left:5px;"> <a href="index.php"  style="color:">Home</a>       |</div>



<center>
<div style="">
<div style=" border-style:solid; border-color: #874c00; margin-top: 5%; width:100%; height:70%; background-color:#874c00; margin-left:-5px;">
<div>




<div style="padding-top:8%;"><img src="onlinekarta.jpg">

</div>


</div>

<center>
<div style=""><br>
<form style="padding-top:7px; padding-left:5px;" name="" action="data.php" method="post">

<select size="1" style="width:160px; height:30px; " name="models">
	<? include("searchcenterdaerah.php"); ?>
</select>
<select name="kategori" style="width:160px; height:30px;">
  	<option value="all">--Semua Kategori--</option>
	 <? include("searchcentercenter.php"); ?>
</select>
<input type="submit" style="width:130px; height:30px; background-color:;" value="cari sekarang" />
</form>

</div>
</center>
<br>
<font color="white">because we aim to better and easier life by online ..</font>
<br><br><br><br><br><br>
</div> 

</div>
</center>

<? require"searchfooter.php"; ?>



</body>
</html>
