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



   
<form name="autoSelectForm" action="submit2.php" method="post">
MERK   :  <br><select name="omerk""> 
<option value="NOKIA">NOKIA</option>
<option value="BLACKBERRY">BLACKBERRY</option>
<option value="SAMSUNG">SAMSUNG</option>
<option value="APPLE">APPLE</option>
<option value="SONY_ERICSSON">SONY_ERICSSON</option>
<option value="HTC">HTC</option>


 </select><br><br>

Type   :  <br><input type="text"   name="otype" onKeyPress="return disableEnterKey(event)"/> <br><br>

<input style="margin:auto; height:50px; width:150px;" type="submit" />
</form>

<p><a href="logout.php">Logout</a></p>
 
 
