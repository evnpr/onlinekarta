<?php

// Inialize session
session_start();

// Include database connection settings
include('config.php');

// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT * FROM webs WHERE (userkarta = '" . mysql_real_escape_string($_POST['username']) . "') and (pwdkarta = '" . mysql_real_escape_string(md5($_POST['password'])) . "')");

// Check username and password match
if (mysql_num_rows($login) == 1) {
// Set username session variable
$_SESSION['username'] = $_POST['username'];
// Jump to secured page
header('Location: web/index.php');
}
else {
// Jump to login page
header('Location: index.php');
}

?>
