<? $hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost', so you're NOT necessary to 	change this even this script has already online on the internet.
	$dbname   = 'onlinekartatoko'; // Your database name.
	$username = 'root';             // Your database username.
	$password = 'abc123';                 // Your database password. If your database has no password, leave it empty.

// Let's connect to host
mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');
// Select the database
mysql_select_db($dbname) or DIE('Database name is not available!');	// include your code to connect to DB.

// ###########################################JOGJA################################################ //


$query="SELECT daerah FROM datatokohape where propinsi='Nokia' ";
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

$query2="SELECT daerah FROM datatokohape where propinsi='Blackberry' ";
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

$query3="SELECT daerah FROM datatokohape where propinsi='Samsung' ";
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

$query4="SELECT daerah FROM datatokohape where propinsi='Apple' ";
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




?>

  
<?php
echo '<script type="text/javascript">';
echo 'var makes = new Array("Nokia", "Blackberry", "Samsung", "Apple");';
echo 'var models = new Array("");';
echo 'models["Nokia"] = new Array("',join($rows, '", "'), '");';
echo 'models["Blackberry"] = new Array("',join($rows2, '", "'), '");';
echo 'models["Samsung"] = new Array("',join($rows3, '", "'), '");';
echo 'models["Apple"] = new Array("',join($rows3, '", "'), '");';

echo '</script>'
 
?>

<script>
 

function resetForm(theForm) {
  /* reset makes */
  theForm.makes.options[0] = new Option("Semua Merk >>", "Semua");
  for (var i=0; i<makes.length; i++) {
    theForm.makes.options[i+1] = new Option(makes[i], makes[i]);
  }
  theForm.makes.options[0].selected = true;
  /* reset models */
  theForm.models.options[0] = new Option("Semua Type >>", "Semua");
  theForm.models.options[0].selected = true;
}

function updateModels(theForm) {
  var make = theForm.makes.options[theForm.makes.options.selectedIndex].value;
  var newModels = models[make];
  theForm.models.options.length = 0;
  theForm.models.options[0] = new Option("Semua Type >>", "Semua");
  for (var i=0; i<newModels.length; i++) {
    theForm.models.options[i+1] = new Option(newModels[i], newModels[i]);
  }
  theForm.models.options[0].selected = true;
}

</script>

 
 


