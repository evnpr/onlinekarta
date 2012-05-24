<? $hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost', so you're NOT necessary to 	change this even this script has already online on the internet.
	$dbname   = 'onlinekartatokohape'; // Your database name.
	$username = 'root';             // Your database username.
	$password = 'abc123';                 // Your database password. If your database has no password, leave it empty.

// Let's connect to host
mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');
// Select the database
mysql_select_db($dbname) or DIE('Database name is not available!');	// include your code to connect to DB.

// ###########################################JOGJA################################################ //


$query="SELECT type FROM NOKIA";
$result=mysql_query($query);

$num = mysql_num_rows($result);
$rows = array();

for($i=0; $i<$num; $i++)
{  
$row = mysql_fetch_array($result) ;

$rows[] = $row[0];


for($s=0; $s<$i; $s++)
{
if ($rows[$i] == $rows[$s]) {unset($rows[$i]);};
}
if ($rows[$i] == '') {unset($rows[$i]);};
}


// ###########################################BANDUNG################################################ //

$query2="SELECT type FROM BLACKBERRY";
$result2=mysql_query($query2);

$num2 = mysql_num_rows($result2);
$rows2 = array();

for($i2=0; $i2<$num2; $i2++)
{  
$row2 = mysql_fetch_array($result2) ;

$rows2[] = $row2[0];


for($s2=0; $s2<$i2; $s2++)
{
if ($rows2[$i2] == $rows2[$s2]) {unset($rows2[$i2]);};
}
if ($rows2[$i2] == '') {unset($rows2[$i2]);};
}


// ##########################################JAKARTA################################################# //

$query3="SELECT type FROM SAMSUNG ";
$result3=mysql_query($query3);

$num3 = mysql_num_rows($result3);
$rows3 = array();

for($i3=0; $i3<$num3; $i3++)
{  
$row3 = mysql_fetch_array($result3) ;

$rows3[] = $row3[0];


for($s3=0; $s3<$i3; $s3++)
{
if ($rows3[$i3] == $rows3[$s3]) {unset($rows3[$i3]);};
}
if ($rows3[$i3] == '') {unset($rows3[$i3]);};
}


 

// ##########################################JAKARTA################################################# //

$query4="SELECT type FROM APPLE";
$result4=mysql_query($query4);

$num4 = mysql_num_rows($result4);
$rows4 = array();

for($i4=0; $i4<$num4; $i4++)
{  
$row4 = mysql_fetch_array($result4) ;

$rows4[] = $row4[0];


for($s4=0; $s4<$i4; $s4++)
{
if ($rows4[$i4] == $rows4[$s4]) {unset($rows4[$i4]);};
}
if ($rows4[$i4] == '') {unset($rows4[$i4]);};
}


// #######################################################END############################################# //


$query5="SELECT type FROM SONY_ERICSSON";
$result5=mysql_query($query5);

$num5 = mysql_num_rows($result5);
$rows5 = array();

for($i5=0; $i5<$num5; $i5++)
{  
$row5 = mysql_fetch_array($result5) ;

$rows5[] = $row5[0];


for($s5=0; $s5<$i5; $s5++)
{
if ($rows5[$i5] == $rows5[$s5]) {unset($rows5[$i5]);};
}
if ($rows5[$i5] == '') {unset($rows5[$i5]);};
}


// #######################################################END############################################# //


$query6="SELECT type FROM HTC";
$result6=mysql_query($query6);

$num6 = mysql_num_rows($result6);
$rows6 = array();

for($i6=0; $i6<$num6; $i6++)
{  
$row6 = mysql_fetch_array($result6) ;

$rows6[] = $row6[0];


for($s6=0; $s6<$i6; $s6++)
{
if ($rows6[$i6] == $rows6[$s6]) {unset($rows6[$i6]);};
}
if ($rows6[$i6] == '') {unset($rows6[$i6]);};
}


// #######################################################END############################################# //



?>

  
<?php
echo '<script type="text/javascript">';
echo 'var makes = new Array("Nokia", "Blackberry", "Samsung", "Apple", "Sony_Ericsson");';

for($g=0; $g<26; $g++){
echo 'var models'.$g.' = new Array("");';
}

for($g=0; $g<26; $g++){
echo 'models'.$g.'["Nokia"] = new Array("',join($rows, '", "'), '");';
}

for($g=0; $g<26; $g++){
echo 'models'.$g.'["Blackberry"] = new Array("',join($rows2, '", "'), '");';
}

for($g=0; $g<26; $g++){
echo 'models'.$g.'["Samsung"] = new Array("',join($rows3, '", "'), '");';
}

for($g=0; $g<26; $g++){
echo 'models'.$g.'["Apple"] = new Array("',join($rows4, '", "'), '");';
}

for($g=0; $g<26; $g++){
echo 'models'.$g.'["Sony_Ericsson"] = new Array("',join($rows5, '", "'), '");';
}
 echo '</script>'
 
?>

<script>
 

function resetForm(theForm) {
  /* reset makes */
  theForm.makes.options[0] = new Option(" Merk >>", "Pilih");
  for (var i=0; i<makes.length; i++) {
    theForm.makes.options[i+1] = new Option(makes[i], makes[i]);
  }
  theForm.makes.options[0].selected = true;
 



}

function updateModels(theForm) {
  var make = theForm.makes.options[theForm.makes.options.selectedIndex].value;
  
  var newModels = models0[make];
  theForm.models0.options.length = 0;
  theForm.models0.options[0] = new Option(newModels[0], newModels[0]);
  theForm.models0.options[0].selected = true;

<?php for($g=1; $g<26; $g++){
  echo'var newmodels'.$g.' = models'.$g.'[make];';
  echo'theForm.models'.$g.'.options.length = 0;';
  echo'theForm.models'.$g.'.options[0] = new Option(newModels['.$g.'], newModels['.$g.']);';
  echo'theForm.models'.$g.'.options[0].selected = true;';
  }
?>

}
 

</script>

 
 


