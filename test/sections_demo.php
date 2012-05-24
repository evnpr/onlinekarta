<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sections Demo</title>
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".country").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "ajax_city.php",
data: dataString,
cache: false,
success: function(html)
{
$(".city").html(html);
} 
});

});
});
</script>
<style>
label
{
font-weight:bold;
padding:10px;
}
</style>
</head>

<body>
<div style="margin:80px">
<form id="example-4" action="dataa.php" method="post">
<label>Country :</label> <select name="country" class="country">
<option selected="selected">--Select Country--</option>

<?php
include('db.php');
$sql=mysql_query("select id,data from data where weight='1'");
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$data=$row['data'];
echo '<option value="'.$id.'">'.$data.'</option>';
 } ?>

 
 </select> 
<label>City :</label> <select name="city" class="city">
<option selected="selected">--Select City--</option>

</select>
<input type="submit" value="cari sekarang" />

</form>


</div>
</body>
</html>
