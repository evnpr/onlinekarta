<style media="screen" type="text/css">
body{
background-color:#BEBEBE;
}
</style>
<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username-admin'])) {
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
     if(key == 13)
          return false;
     else
          return true;
}
</script>
</head>

<body>



<p>Selamat datang, <b><?php echo $_SESSION['username-admin']; ?></b>
<br><br> ANDA BISA UPDATE DAN DELETE DARI SINI</p>
 
<form action="submit.php" method="post">
Nama Toko yg diedit: <input type="text"   name="ojudul" onKeyPress="return disableEnterKey(event)"/> <br><br>

Yang diedit: <select style="width:160px; height:30px;" name="oedit">
  	<option value="judul">judul</option>
	<option value="buka">buka</option>	
	<option value="logo">logo</option>
	<option value="deskripsi">deskripsi</option>

	<option value="lokasi">lokasi</option>
	<option value="harga">harga</option>
	<option value="produk">produk</option>
	<option value="link">link</option>
	<option value="propinsi">propinsi</option>
	<option value="daerah">daerah</option>
	<option value="kategori">kategori</option>
	<option value="kategori2">kategori2</option>
	<option value="kategori3">kategori3</option>
	
</select> <br><br>

editannya: <br> <textarea name="oeditannya" cols="80" rows="5"></textarea>  <br><br>

<br><br>


<input style="margin:auto; height:50px; width:150px;" type="submit" />
</form>

 <br><br><br><br><br>
DELETE HERE <br><br>

<form action="delete.php" method="post">
Nama  Toko yg didelete : <input type="text"   name="ojudul" onKeyPress="return disableEnterKey(event)"/> <br><br>


<br><br>


<input style="margin:auto; height:50px; width:150px;" type="submit" />
</form>
<p><a href="logout.php">Logout</a></p>

<? require"listdata.php"; ?>
</body>

</html>


