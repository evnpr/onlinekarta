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
        border: 1px solid #f4f0ed;

        text-decoration: none; /* no underline */
        color: #874c00;
}
div.pagination a:hover, div.pagination a:active {
        border: 1px solid #000099;

        color: #000;
}
div.pagination span.current {
        padding: 2px 5px 2px 5px;
        margin: 2px;
                border: 1px solid #f4f0ed;

                font-weight: bold;
                background-color: #874c00;
                color: #FFF;
        }
        div.pagination span.disabled {
                padding: 2px 5px 2px 5px;
                margin: 2px;
                border: 1px solid #EEE;

                color: #DDD;
        }

body {
	font-size:14px; width:98%;
}

.header-atas {
     height:35px;  
}
.header-atas-fixed {
 margin-left:-20px;  paddin-left:20px;  height:40px; background-color:#874c00; top:-0px; position:fixed; width:110%; z-index:1000;  
}

.header-atas-fixed a:link {
 color:#fff;
}

.header-atas-fixed a:visited {
 color:#fff;
}

.header-bawah {
height:50px; margin-top:10px; margin-bottom:10px; background-color:#BEBEBE;
}
.listmenu {
 margin-right:5px; width:180px; height:300px; 
}
#square {
     border-color:grey; float:left;  margin-right:14px; border-width:1px;  
}
.gambar-kanan {
border-style:soli; float:left; width:21%; height:300px;
}

.gambar-kanan-atas {
    height:233px;      margin-bottom:10px;
}
.gambar-kanan-lokasi {
   padding-top:1px; margin-top:5px; height:52px; background-color:#000000; position:relative;
}
.isi-utama {
border-left-style:solid; border-width:1px; border-color:grey; padding-left:20px; width:800px; float:left; margin-bottom:-100px; padding-bottom:100px;
}
.samping-kanan {
    margin-top:7px;  margin-left:20px; float:left;
}
.bawah1 {
 height:40px; width:84%; margin-top:30px;      float:left; background-color:#874c00;
}
.bawah2 {
height:40px; width:99%;      border-color:#ffffff; float:left
}

</style>

</head>
<body style="width:1200px;">








<div class="header-atas" > 
<div class="header-atas-fixed" > 

<div style="float:left; margin-left:20px; margin-top:5px;"><a href="./index.php"><img src="../onlinekartakecil.png" /></a></div>
<!--
<div  style="text-align:right; float:right; margin-top:10px; margin-left:5px;"><font color="white"> <a href="../help.php">Help</a>       &nbsp</div>
<div  style="text-align:right; float:right; margin-top:10px; margin-left:5px;"> <a href="../aboutus.php">About Us</a>       |</div>
<div  style="text-align:right; float:right; margin-top:10px; margin-left:5px;"> <a href="../index.php">Home</a>       | </font></div> -->

</div>

</div>
<br><br><br>

<!-- ##################################################################################################################### -->

 


<!-- ##################################################################################################################### -->






<div class="" style="float:left; ">

<div style=" border-right-style:solid; border-width:0px; padding-right:-25px;">
<img src="olkrt.png" width="180px"/>
</div> 
 <br> 
<form style="padding-top:7px; padding-left:5px;" name="" action="../data.php" method="post">
 
<select size="1" style="width:150px; height:20px; background-color:#f4f0ed;" name="models">
	<? include("../searchcenterdaerah.php"); ?>
</select><br><br>
<select name="kategori" style="width:150px; height:20px; background-color:#f4f0ed;">
  	<option value="all">--Semua Kategori--</option>
	 <? include("../searchcentercenter.php"); ?>
</select><br><br>
<input type="submit" style="width:110px; height:20px; background-color:#f4f0ed;;" value="cari sekarang" />
</form>
 <br><br><br>

<div class="listmenu"     >

<? require"menu.html";?>


</div>

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




<div style="width:84%; height:25px; background-color:#4b4646; float:left;  padding-bottom:20px; padding-top:0px; font-family:lucida grande, tahoma, verdana, arial, sans-serif;">
<div style=" border-left-style:solid; border-width:1px; margin-top:-100px; padding-top:100px"></div>
<p style="font-size:14px; margin-left:20px; color:#ffffff; "> Pencarian dilakukan : <?php echo $kat; ?><?php echo $kategori; ?> <? if($kat=='' && $kategori==''){echo "all"; }?>&nbsp @ <?php echo $prop; ?><?php if($dae!='Semua' && $dae!='') echo "-$dae"; else if($prop=='' || $dae=='') echo "-Semua daerah"; else if($prop!='' && $dae=='Semua' && $prop!='Semua') echo ""; else echo " daerah"; ?></p></div>

<link rel="Stylesheet" href="style.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="easing.js"></script>
<script type="text/javascript" src="main.js"></script> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<div id="square" >  

<!-- <div id="ball2" onclick="if(square.id == 'square') square.id='ball'"></div> -->

<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="map/map.php"></iframe><br /> 

<!-- <font size="2" color="red">peta di atas menunjukkan daerah pencarian yg anda lakukan, anda bisa menggeser dan memperbesar peta di atas</font>-->

</div>

<div id="ball" onclick="toggle(); " style="font-family:lucida grande, tahoma, verdana, arial, sans-serif; font-color:white;"><font color="white">click here to see the map</font></div>
<div id="toggleText" style="display: none"></div>


<script> $('#ball').click(function() {
	$('#square').slideToggle('fast');
	return false;
}); </script> 

<!-- ##################################################################################################################### -->


<!--
<div class="gambar-kanan"     >

<div class="gambar-kanan-atas"     ></div>
<div class="gambar-kanan-lokasi"     >
<p style="font-size:16px; margin-left:20px; color:#ffffff;">  <?php echo $kat; ?><?php echo $kategori; ?> <? if($kat=='' && $kategori==''){echo "all"; }?>&nbsp @ <?php echo $prop; ?><?php if($dae!='Semua' && $dae!='') echo "-$dae"; else if($prop=='' || $dae=='') echo "-Semua daerah"; else if($prop!='' && $dae=='Semua' && $prop!='Semua') echo ""; else echo " daerah"; ?></p></div> 

</div>

--> 

<!-- ##################################################################################################################### -->



<div class="isi-utama"     > <br> DAFTAR SELLER : <br><br><br> <?php include("list/pagination.php");?> 

 
</div>



<!-- ##################################################################################################################### -->


<div class="samping-kanan"     > <br><br><br><br><br><br><br><br><br><br><br> </div>
<div class="bawah1"  style="margin-left: 15.5%;"  >
<br><br><br>
<div class="bawah2"     >
<div style="float:left; font-family:lucida grande, tahoma, verdana, arial, sans-serif; color:grey;">&nbsp&nbspCopyright @onlinekarta.com </div><div style="text-align:right; width:80%; float:left; ">
<a href="../index.php">Home</a>       &nbsp |
 <a href="../aboutus.php">About Us</a>       | 
 <a href="../aboutus.php">Team</a>       | </font> 
</div>
 
</div>

</div>


<!-- ##################################################################################################################### -->








<!-- ##################################################################################################################### -->








</body>

<script type="text/javascript">
  resetForm(document.autoSelectForm);
</script>


