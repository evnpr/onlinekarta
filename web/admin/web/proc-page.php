<?php
$dbimageThumb = $_GET['image'];
$itemnumber = $_GET['itemnumber'];
$pagenumber = $_GET['page'];

include "db.php";
include "dbtake.php";
  			
$queItem2 = "SELECT url FROM pages where domain='$domain' and page='$pagenumber'  and ItemPhoto='$itemnumber' " ;
$resItem2 = mysql_query($queItem2);
$num_rows = mysql_num_rows($resItem2);
if($num_rows!=0) {
$query = "UPDATE pages SET url='$dbimageThumb' WHERE domain='$domain' and page='$pagenumber' and ItemPhoto='$itemnumber' "; 
} else {
$query = "INSERT INTO pages(url,domain,page,ItemPhoto,ItemNumber) values('$dbimageThumb', '$domain', '$pagenumber', '$itemnumber', '1')  "; 
}

$result = mysql_query($query);

if (!$result) {
    die('Query failed: ' . mysql_error());
}


header("Location: page.php?page=$pagenumber");
?>
