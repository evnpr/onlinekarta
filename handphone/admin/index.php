<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username'])) {
header('Location: securedpage.php');
}

?>
<html>

<head>
<title>Seller - HapeJogja</title>
</head>

<body style="background-color: pink;">
<div>
<center>
<h2>ADMIN Login @HapeJogja.info</h2>
<h3>Go Online atau bangkrut</h3> 

<table border="0">
<form method="POST" action="loginproc.php">
<tr><td>Username</td><td>:</td><td><input type="text" name="username" size="20"></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="password" size="20"></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Login"></td></tr>
</form>
</table>
</center>

</div>
</body>

</html>
