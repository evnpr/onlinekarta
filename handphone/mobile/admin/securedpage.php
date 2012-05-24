<style media="screen" type="text/css">
body{
background-color:#BEBEBE;
}
p{ font-size:18;}
</style>
<?php

// Inialize session
session_start(); 

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}

?>
<html>
<?
$username="root";
$password="abc123";
$database="onlinekartatokohape";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$judul=mysql_real_escape_string($_SESSION['username']);
$mmakes=$_GET['merk'];
if($_GET['merk']!='') {

$query="SELECT * FROM $mmakes";
$result=mysql_query($query);


$num=mysql_num_rows($result);
}

?>

<head>
<title>Admin-Onlinekarta</title>

<script language="JavaScript">
function disableEnterKey(e)
{
     var key;
     if(window.event)
          key = window.event.keyCode;     //IE
     else
          key = e.which;     //firefox

<?php for($key=48; $key<58; $key++){ echo ' 
	if(key=='.$key.')
          return true;
     else'
;} 
?>
	if(key==27)
          return true;
	else
           return false;

}
</script>
</head>
 
<body>
 


<p>Selamat datang, <b><?php echo $_SESSION['username']; ?></b>
<br> 
<? if($_GET['edit']=='infotoko') {echo '
<form name="autoSelectForm" action="submitlokasi.php" method="post">
<p>Password yang sedang dipakai (wajib diisi, untuk konfirmasi): <br><input type="password" name="opwdlama" cols="20" rows="1">  <br>

<p>Lokasi : <br><textarea name="olokasi" cols="30" rows="2"></textarea>  <br>
<p>Nomer Hape : <br><textarea name="onohape" cols="20" rows="1"></textarea>  <br>
<p>Email : <br><textarea name="oemail" cols="20" rows="1"></textarea>  <br><br>
<p>PASSWORD:
<p>Password baru (optional, apabila ingin mengganti password): <br><input type="password" name="opwdbaru" cols="20" rows="1">  <br>

';

} else if($_GET['edit']=='') {

echo '
<div style="float:left"><a href="securedpage.php?edit=infotoko">detail toko</a></div>
<div style="text-align:right"><br>
lihat daftar data yang sudah ada dari toko anda : &nbsp&nbsp
<a href="securedpage.php?merk=NOKIA">NOKIA</a>&nbsp&nbsp&nbsp
<a href="securedpage.php?merk=BLACKBERRY">BLACKBERRY</a>&nbsp&nbsp&nbsp
<a href="securedpage.php?merk=SAMSUNG">SAMSUNG</a>&nbsp&nbsp&nbsp
<a href="securedpage.php?merk=APPLE">APPLE</a>&nbsp&nbsp&nbsp
<a href="securedpage.php?merk=SONY_ERICSSON">SONY ERICSSON</a>&nbsp&nbsp&nbsp

 </div><br>

';
if($_GET['merk']!='') {} 
echo '  
<br>

<form name="autoSelectForm" action="submit.php" method="post">

<table border="1" style="width:100%">
<tr>
		<th>'.$mmakes.'</th>

            <th><font size="2"> Harga New </font></th>
	    <th><font size="2"> Stok New</font></th>
	    
            <th><font size="2"> Harga 2nd </font></th>
            <th><font size="2"> Stok 2nd</font></th>
	    
</tr>' ;  for($i=0; $i<$num; $i++) {
$f1=mysql_result($result,$i,"type");

$query2="SELECT * FROM $f1 where judul='".$judul."'";
$result2=mysql_query($query2);

$f2=mysql_result($result2,$dd,"harganew");
$f3=mysql_result($result2,$dd,"stoknew");
$f4=mysql_result($result2,$dd,"harga2nd");
$f5=mysql_result($result2,$dd,"stok2nd");


echo '
 

	<tr style="text-align:center;">

	<td><select size="1" style=" " name="models'.$i.'">
<option value="'.$f1.'">'.$f1.'</option>

	</select></td>
	<td> <textarea name="oharganew'.$i.'" cols="5" rows="1"  onKeyPress="return disableEnterKey(event)" >'.$f2.'</textarea> </td>
	<td><select size="1" style=" " name="ostoknew'.$i.'">
	<option value="">-</option>	
	<option value="0" '; if($f3==0){ echo 'selected';} echo '>0</option>
	<option value="1" '; if($f3==1){ echo 'selected';} echo '>1</option>
	<option value="2" '; if($f3==2){ echo 'selected';} echo '>2</option>
	<option value="3" '; if($f3==3){ echo 'selected';} echo '>3</option>
	<option value="4" '; if($f3==4){ echo 'selected';} echo '>4</option>
	<option value="5" '; if($f3==5){ echo 'selected';} echo '>5</option>
	<option value="6" '; if($f3==6){ echo 'selected';} echo '>6</option>
	<option value="7" '; if($f3==7){ echo 'selected';} echo '>7</option>
	<option value="8" '; if($f3==8){ echo 'selected';} echo '>8</option>
	<option value="9" '; if($f3==9){ echo 'selected';} echo '>9</option>
	<option value="10" '; if($f3==10){ echo 'selected';} echo '>10</option>
	<option value="11" '; if($f3==11){ echo 'selected';} echo '>>10</option>
	</select></td>	
	 
	<td> <textarea name="oharga2nd'.$i.'" cols="5" rows="1"  onKeyPress="return disableEnterKey(event)">'.$f4.'</textarea></td>	
	<td><select size="1" style=" " name="ostok2nd'.$i.'">
	<option value="">-</option>	
	<option value="0" '; if($f5==0){ echo 'selected';} echo '>0</option>
	<option value="1" '; if($f5==1){ echo 'selected';} echo '>1</option>
	<option value="2" '; if($f5==2){ echo 'selected';} echo '>2</option>
	<option value="3" '; if($f5==3){ echo 'selected';} echo '>3</option>
	<option value="4" '; if($f5==4){ echo 'selected';} echo '>4</option>
	<option value="5" '; if($f5==5){ echo 'selected';} echo '>5</option>
	<option value="6" '; if($f5==6){ echo 'selected';} echo '>6</option>
	<option value="7" '; if($f5==7){ echo 'selected';} echo '>7</option>
	<option value="8" '; if($f5==8){ echo 'selected';} echo '>8</option>
	<option value="9" '; if($f5==9){ echo 'selected';} echo '>9</option>
	<option value="10" '; if($f5==10){ echo 'selected';} echo '>10</option>
	<option value="11" '; if($f5==11){ echo 'selected';} echo '>>10</option>
	</select></td>	
	  
</tr>' ;} echo '
 
 
</table> ';

setlocale(LC_ALL, 'nl_NL');
echo date("c\n");


} else echo '
<p>pilih yg mana anda edit :  
<p><a href="securedpage.php?edit=infotoko">detail toko</a>  
<p><a href="securedpage.php?edit=infoproduk">detail produk</a> '; 


?>
  

<br><br>

<?  { echo '
<input style="margin:auto; height:30px; width: 80px;" type="submit" />'; }?>
</form>

<script type="text/javascript">
  resetForm(document.autoSelectForm);
</script>

<p><a href="logout.php">Logout</a></p>



 


