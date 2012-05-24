<meta http-equiv="expires" content="mon, 27 sep 2012 14:30:00 GMT">


<? require"../searchheader.php";?>
  
<head>
<style type="text/css">
div.pagination {
        padding: 3px;
        margin: 3px;
}

div.pagination a {
        padding: 2px 5px 2px 5px;
        margin: 2px;
        border: 1px solid #AAAADD;

        text-decoration: none; /* no underline */
        color: #000099;
}
div.pagination a:hover, div.pagination a:active {
        border: 1px solid #000099;

        color: #000;
}
div.pagination span.current {
        padding: 2px 5px 2px 5px;
        margin: 2px;
                border: 1px solid #000099;

                font-weight: bold;
                background-color: #000099;
                color: #FFF;
        }
        div.pagination span.disabled {
                padding: 2px 5px 2px 5px;
                margin: 2px;
                border: 1px solid #EEE;

                color: #DDD;
        }

 
</style>
  
<body style="font-size:14px; width:98%;">








<div class="header-atas" style="     height:50px;"> 

<div style="float:left"><a href="./index.php"><img src="images/onlinekartakecil.gif"/></a></div>

<div  style="text-align:right; float:right; margin-top:10px; margin-left:5px;"> <a href="../help.php">Help</a>       &nbsp</div>
<div  style="text-align:right; float:right; margin-top:10px; margin-left:5px;"> <a href="../aboutus.php">About Us</a>       |</div>
<div  style="text-align:right; float:right; margin-top:10px; margin-left:5px;"> <a href="../index.php">Home</a>       |</div>


</div>


<!-- ##################################################################################################################### -->



<div class="header-bawah" style="     height:50px; margin-top:10px; margin-bottom:10px; background-color:#BEBEBE;">

<form style="padding-top:7px; padding-left:5px;" name="" action="../data.php" method="post">
Silakan Pilih Daerah & Kategori : 
<select size="1" style="width:160px; height:30px; " name="models">
<? include("../searchcenterdaerah.php"); ?>
</select>
<select name="kategori" style="width:160px; height:30px;">
  	<option value="all">--Semua Kategori--</option>
	 <? include("../searchcentercenter.php"); ?>
</select>
<input type="submit" style="width:130px; height:30px; background-color:;" value="cari sekarang" />
</form>

</div>




<!-- ##################################################################################################################### -->

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

<div class="gambar-kanan-lokasi" style="    padding-top:1px; margin-top:5px; height:52px; background-color:#000000;">
<p style="font-size:16px; margin-left:20px; color:#ffffff;">  <?php echo $kat; ?><?php echo $kategori; ?> <? if($kat=='' && $kategori==''){echo "all"; }?>&nbsp @ <?php echo $prop; ?><?php if($dae!='Semua' && $dae!='') echo "-$dae"; else if($prop=='' || $dae=='') echo "-Semua daerah"; else if($prop!='' && $dae=='Semua' && $prop!='Semua') echo ""; else echo " daerah"; ?></p></div> 

</div>

<div class="listmenu"  style="  padding-top:5px;   float:left; width:15%; height:300px; " >

<? require"menu.html";?>


</div>

<!-- ##################################################################################################################### -->



<div class="isi-utama" style=" border-left-style:solid; border-color:grey; border-width:1px; padding-left:20px; float:left; margin-top:7px; width:800px; float:left; "> <br> DAFTAR SELLER : <br><br><br> <?php include("list/pagination.php");?> </div>



<!-- ##################################################################################################################### -->


<div class="samping-kanan" style="     margin-top:7px; margin-left:20px; float:left;"> <br><br><br><br><br><br><br><br><br><br><br> </div>

</div>


<!-- ##################################################################################################################### -->





<div class="bawah1"style="height:70px; width:99%; margin-top:30px;      float:left; background-color:#bebebe;">
<br><br><br>
</div>



<!-- ##################################################################################################################### -->





<div class="bawah2" style="height:40px; width:99%;      border-color:#ffffff; float:left">
<div style="float:left;"> Copyright @Onlinekarta 2011 </div><div style="text-align:right; width:85%; float:left;">evanp's production</div>
</div>

</body>

<script type="text/javascript">
  resetForm(document.autoSelectForm);
</script>
