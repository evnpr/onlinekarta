<?php
$con = mysql_connect("localhost","root","abc123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db('webs');
if (!$db_selected) {
    die('Could not select database: ' . mysql_error());
}
?> 