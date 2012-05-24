<?php
 
$myFile = "coba.html";
unlink($myFile);
$filename = 'coba.html';
$handle = fopen($filename,"x+");
 
$handless =  fopen("http://localhost/iseng/InPlaceRichEditor_1.3.3/test/functional/test.php", "rb");
$somecontent = stream_get_contents($handless);
fwrite($handle,$somecontent);
echo "Success";
fclose($handle);
fclose($handless);
?> 