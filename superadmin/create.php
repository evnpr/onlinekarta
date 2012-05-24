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



<p>Selamat datang, 
<br><br>SILAKAN REGISTER DI SINI</p>
 
<form action="submit.php" method="post">
Nama Toko: <br><input type="text"   name="ojudul" onKeyPress="return disableEnterKey(event)"/> <br>
Password: <br><input type="password"   name="opassword" onKeyPress="return disableEnterKey(event)"/> <br>
Konfirmasi Password: <br><input type="password"   name="opassword" onKeyPress="return disableEnterKey(event)"/> <br>
Email:<br> <input type="text"   name="opasswo" onKeyPress="return disableEnterKey(event)"/> <br>
No HP: <br><input type="text"   name="o" onKeyPress="return disableEnterKey(event)"/> <br>
<br>

 

Alamat: <br> <textarea name="oeditannya" cols="35" rows="2"></textarea>  <br><br>

<br><br>


<input style="margin:auto; height:30px; width:70px;" type="submit" />
</form>

 <br><br>  
 

 
<p><a href="logout.php">Logout</a></p>

<? require""; ?>
</body>

</html>


