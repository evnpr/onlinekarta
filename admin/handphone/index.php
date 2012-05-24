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
     if(key == 13)
          return false;
     else
          return true;
}
</script>
</head>
<body>

<a href="hape.php">merk</a><br>

<p>Selamat datang,  silakan masukan data anda di sini untuk registrasi di <b>Handphone Jogja</b>
  
<form name="autoSelectForm" action="submit.php" method="post">
Nama   :  <br><input type="text"   name="ojudul" onKeyPress="return disableEnterKey(event)"/> <br><br>
Password   :  <br><input type="password"   name="opwd" onKeyPress="return disableEnterKey(event)"/> <br><br>
Konfirmasi Password   :  <br><input type="password"   name="okonfpwd" onKeyPress="return disableEnterKey(event)"/> <br><br>
Phone Number   :  <br><input type="text"   name="onohape" onKeyPress="return disableEnterKey(event)"/> <br><br>
Email   :  <br><input type="text"   name="oemail" onKeyPress="return disableEnterKey(event)"/> <br><br>


<input style="margin:auto; height:50px; width:150px;" type="submit" />
</form>

<p><a href="logout.php">Logout</a></p>
 
 
