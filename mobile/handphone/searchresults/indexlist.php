<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<style type="text/css">
div.pagination {
        padding: 1px;
        margin: 3px;
}

div.pagination a {
        padding: 1px 1px 1px 1px;
        margin: px;
        border: 1px solid #AAAADD;

        text-decoration: none; /* no underline */
        color: #000099;
}
div.pagination a:link {
      
        color: #ffffff;
}

a:link{
color:#7409b8;
}

div.pagination a:hover, div.pagination a:active {
        border: 1px solid #000099;

        color: #000;
}
div.pagination span.current {
        padding: 1px 1px 1px 1px;
        margin: 1px;
                border: 1px solid #000099;

                font-weight: bold;
                background-color: #000099;
                color: #FFF;
        }
        div.pagination span.disabled {
                padding: 1px 1px 1px 1px;
                margin: 1px;
                border: 1px solid #EEE;

                color: #DDD;
        }

 
</style>
  
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<title></title>
<?php	
	
	
	$prop = 'yogyakarta';
	$dae = $_GET["dae"];
	$kat = $_GET["kat"];
	$kategori = $_GET["kategori"];
	$daer=$dae;
if($dae=='Semua')
$daer==''; 
else $daer = $dae;

?>
<? require"../searchheader.php"; ?>
<title>OnlineKarta</title>
<link rel="shortcut icon" href="http://www.onlinekarta.com/favicon.ico" type="image/x-icon">

<style type="text/css">
a { font-size:100%;}
div a{font-size:100%;}

</style>




</head>
<body style="background-color:#7b0909; font-size:100%; width:100%; margin-left:-20px; padding-left:20px;">
<a href="../index.php"><font size="1"color="white">HOME</font></a><center>

<div style="width: 100%; font-size:100%;">




<div style="background-color:#7b0909; font-size:100%;"><font size="2" color="#ffffff" font-size="100%;"><b>OnlineKarta</b> (mobile version)</font></div>

<div style="background-color:#000000; text-align:left; font-size:100%;"><div style="margin-left:20px; color:#ffffff;">  <?php echo $kat; ?><?php echo $kategori; ?> <? if($kat=='' && $kategori==''){echo "all"; }?>&nbsp @ <?php echo $prop; ?><?php if($dae!='Semua' && $dae!='') echo "-$dae"; else if($prop=='' || $dae=='') echo "-Semua daerah"; else if($prop!='' && $dae=='Semua' && $prop!='Semua') echo ""; else echo " daerah"; ?></div></div>
<div style="background-color:#bebebe; text-align:left; font-size:100%; padding-left:20px; "><font size="2"color="">daftar seller:</font></div>
 

 <?php include("list/pagination.php");?>


 

<br>




<center>
<div>
<form name="autoSelectForm" action="../data.php" method="post">
<select size="1" name="makes" onchange="updateModels(this.form)">
</select>
<select size="1" name="models">
</select>
<div><br></div>
	<div>
	 
	</div>
	 
<input type="submit" value="cari sekarang" />
</form>

</div>
</center>


</div> 

</center>

<script type="text/javascript">
  resetForm(document.autoSelectForm);
</script>






</div>
</center>







</body></html>
