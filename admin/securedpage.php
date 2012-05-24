<style media="screen" type="text/css">
body{
background-color:#BEBEBE;
}
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
     else';} ?>
           return false;

}
</script>
</head>
<? require"../searchheader.php"; ?>
<body>


<a href="handphone/index.php">hp</a><br>
<p>Selamat datang, <b><?php echo $_SESSION['username']; ?></b>
<br><br>Anda bisa memasukkan data Onlinekarta ke form berikut ini, harap pengisian hati-hati karena
<strong>TIDAK BISA</strong> dihapus oleh Anda, melainkan harus meng-kontak Admin.</p>
 
<form name="autoSelectForm" action="submit.php" method="post">
Nama   :  <br><input type="text"   name="ojudul"/> <br><br>
Lokasi : <br><textarea name="olokasi" cols="40" rows="3" onKeyPress="return disableEnterKey(event)"></textarea>  <br><br>
Propinsi :  <br><select style="width:160px; height:30px;" name="opropinsi">
  	
	<option value="yogyakarta">yogyakarta</option>	
	<option value="jakarta">jakarta</option> 
	<option value="bandung">bandung</option>	
	<option value="online">online</option> 
	</select> <br><br>
Daerah :  <br><input type="text"  name="odaerah" onKeyPress="return disableEnterKey(event)"/> untuk mengecek sudah ada atau belum tapi tetap tulis di kolom tersebut>>

<select size="1" style="width:160px; height:30px;" name="makes" onchange="updateModels(this.form)">
</select>
<select size="1" style="width:160px; height:30px;" name="models">
</select><br><br>

Kategori 1  :  <br><select style="width:160px; height:30px;" name="okategori">
  	
	<option value="123"></option>	
	 <? include("../searchcentercenter.php"); ?>
</select> <br><br>

Kategori 2  :  <br><select style="width:160px; height:30px;" name="okategori2">
  	
	<option value="123"></option>	
	 <? include("../searchcentercenter.php"); ?>
</select> <br><br>

Kategori 3  :  <br><select style="width:160px; height:30px;" name="okategori3">
  	<option value="123"></option>	
	 <? include("../searchcentercenter.php"); ?>
</select> <br><br>

Produk : <br><textarea name="oproduk" cols="40" rows="3"></textarea> <br><br>
Harga  : <br><textarea name="oharga" cols="40" rows="3"></textarea> <br><br>
Buka   : <br><textarea name="obuka" cols="40" rows="3"></textarea> <br><br>
Kontak : <br><textarea name="okontak" cols="40" rows="3"></textarea> <br><br>
Deskripsi:<br> <textarea name="odeskripsi" cols="80" rows="5"></textarea> <br><br>
Link ke Toko :  <br><textarea name="olink" cols="40" rows="2"></textarea> <br><br>

Link ke Logo (UPLOAD Dropbox, ukuran harus 100x100) : <br><textarea name="ologo" cols="40" rows="2"></textarea> 

<br><br>


<input style="margin:auto; height:50px; width:150px;" type="submit" />
</form>

<p><a href="logout.php">Logout</a></p>

<? require"listdata.php"; ?>

 
<? require"../searchfooter.php"; ?>

