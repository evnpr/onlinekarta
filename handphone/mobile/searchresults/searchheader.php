<script type="text/javascript">
var makes = new Array("yogyakarta", "jakarta", "bandung", "online");
var models = new Array("");
models["yogyakarta"] = new Array("jogja","sleman","bantul");
models["jakarta"] = new Array("");
models["bandung"] = new Array("");

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
