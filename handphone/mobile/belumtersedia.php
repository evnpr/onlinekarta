<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<title></title>

<script type="text/javascript">
var makes = new Array("Yogyakarta", "Jakarta", "Bandung");
var models = new Array();
models["Yogyakarta"] = new Array("Jogja","Sleman","Bantul");
models["Jakarta"] = new Array();
models["Bandung"] = new Array();

function resetForm(theForm) {
  /* reset makes */
  theForm.makes.options[0] = new Option("Semua Tempat >>", "Semua");
  for (var i=0; i<makes.length; i++) {
    theForm.makes.options[i+1] = new Option(makes[i], makes[i]);
  }
  theForm.makes.options[0].selected = true;
  /* reset models */
  theForm.models.options[0] = new Option("Semua Daerah >>", "Semua");
  theForm.models.options[0].selected = true;
}

function updateModels(theForm) {
  var make = theForm.makes.options[theForm.makes.options.selectedIndex].value;
  var newModels = models[make];
  theForm.models.options.length = 0;
  theForm.models.options[0] = new Option("Semua Daerah >>", "Semua");
  for (var i=0; i<newModels.length; i++) {
    theForm.models.options[i+1] = new Option(newModels[i], newModels[i]);
  }
  theForm.models.options[0].selected = true;
}

</script>

</head>

 


<body>
<center>

<div style="margin-top: 100px; width: 562px;">
<div>




<div><img src="onlinekarta.png">

</div>


</div>

<div>Maaf Belum Tersedia<br><br></div> 

<center>
<div>
<form name="autoSelectForm" action="data.php" method="post">
<select size="1" name="makes" onchange="updateModels(this.form)">
</select>
<select size="1" name="models">
</select>
<div><br></div>
	<div>
	<select name="kategori">
  <option value="all">--Semua Kategori--</option>
	<option value="makanan">Makanan</option>
	<option value="pakaian">Pakaian</option>
	<option value="aksesoris">Aksesoris</option>
   
</select>
	</div>
	<div><br></div>
<input type="submit" value="cari sekarang" />
</form>

</div>
</center>


</div> 

</center>

<script type="text/javascript">
  resetForm(document.autoSelectForm);
</script>



</body>
</html>