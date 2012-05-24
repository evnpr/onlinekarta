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

<title>OnlineKarta</title>
<link rel="shortcut icon" href="http://www.onlinekarta.com/favicon.ico" type="image/x-icon">

<style type="text/css">
a { font-size:100%;}
div a{font-size:100%;}

</style>




</head>
<body style="background-color:#874c00; font-size:100%; width:100%; margin-left:-20px; padding-left:20px;">
<div style="float:left; padding-left:10px"><a href="../index.php"><font size="1"color="white">HOME</font></a></div>
<div style="float:right; padding-right:10px"><a href="../admin/index.php"><font size="1"color="white">Log In Seller</font></a></div>
<center>

<div style="width: 100%; font-size:100%;">




<div style="background-color:#874c00; width:100%; font-size:100%;"><font size="2" color="#ffffff" font-size="100%;"><b>Handphone di Jogja</b> </font><font size="1">Powered by Onlinekarta</font></div>

<div style="background-color:#000000; width:100%;  text-align:left; font-size:70%;"><div style="margin-left:20px; color:#ffffff;">  <?php echo $kat; ?><?php echo $kategori; ?> <? if($kat=='' && $kategori==''){echo "all"; }?>&nbsp @ <?php echo $prop; ?><?php if($dae!='Semua' && $dae!='') echo "-$dae"; else if($prop=='' || $dae=='') echo "-Semua daerah"; else if($prop!='' && $dae=='Semua' && $prop!='Semua') echo ""; else echo " daerah"; ?></div></div>
<div style="background-color:#bebebe;  width:100%; text-align:left; font-size:100%; padding-left:20px; "><font size="1"color="">anda sedang mencari :</font></div>
  <div style="border-bottom-style:dotted; border-width:1px; background-color:#fff; text-align:left; font-size:100%; padding-left:3px; margin-bottom:15px; width:100%">
<?  

  include("list/1.php");

  include("listdata.php");

?>

</div>
 

 




<center>
<div>
<?php
$username="root";
$password="abc123";
$database="onlinekartatokohape";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");


$mmakes=$_GET['makes'];
if($_GET['makes']!='') {
$query="SELECT * FROM $mmakes";
$result=mysql_query($query);

$num=mysql_num_rows($result);
}


?>

<?php if($_GET['makes']=='') echo '
<form action="../index.php" method="get">
<select size="1" name="makes"> 
<option value="NOKIA">NOKIA</option>
<option value="SAMSUNG">SAMSUNG</option>
<option value="BLACKBERRY">BLACKBERRY</option>
<option value="APPLE">APPLE</option>
<option value="SONY_ERICSSON">SONY_ERICSSON</option>'; 
else { echo '
<form action="../data.php" method="post">
'.$mmakes.'<select size="1" name="models"> '; 
$i=0;
while ($i < $num) {
$f1=mysql_result($result,$i,"type");
echo '<option value="'.$f1.'">'.$f1.'</option>'; 
$i++; }}
?>

</select>
<input type="hidden" name="mak" value="<?php echo $_GET['makes']; ?>" ></input> 
	 
<input type="submit" value="<?php if($_GET['makes']=='') echo 'pilih type'; else echo 'cari sekarang'; ?>"  /> <br><br>
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
