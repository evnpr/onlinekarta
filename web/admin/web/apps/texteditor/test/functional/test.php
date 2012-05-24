<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<?php

include ('../../../../db.php');
include ('../../../../dbtake.php');

$id = $_GET['id']; 
$query="SELECT $id FROM webs where domain='$domain' ";
$result=mysql_query($query);


$coba = mysql_result($result, 0);

?>

  <head>
    <title>InPlaceRichEditor Functional Tests</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="language" content="en" />
	<?php
    

	// Check, if username session is NOT set then this page will jump to login page
	if (!isset($_SESSION['username'])) echo ''; else echo '
	<script src="../../lib/prototype.js" type="text/javascript"></script>
    <script src="../../lib/effects.js" type="text/javascript"></script>
    <script src="../../lib/controls.js" type="text/javascript"></script>
    <script src="../../lib/patch_inplaceeditor_1-8-2.js" type="text/javascript"></script>
    <script src="../../lib/patch_inplaceeditor_editonblank_1-8-2.js" type="text/javascript"></script>
    <script src="../../lib/tiny_mce/tiny_mce.js" type="text/javascript"></script>
    <script src="../../lib/tiny_mce_init.js" type="text/javascript"></script>
    
	';
	if($id=='textSidebar') echo '<script src="../../src/inplacericheditor.js" type="text/javascript"></script>'; else echo '<script src="../../src/inplacericheditorabout.js" type="text/javascript"></script>';
	?>
    <style type="text/css" media="screen">
      .inplacericheditor-saving { background: url(wait.gif) bottom right no-repeat; }
	  
	  body, div, p, h1, h2, h3, ul, ol, span, a, table, td, form, img, li {
  font-family: arial;
  font-size: 14px;
  
  font-weight: normal;
} 

body {
  font-size:14px;
  width:<?php if($id=='textAbout') echo '650px'; else if($id=='textSidebar') echo '200px'; ?>;
  height: 300px;
}

.navigation {
  background: #9DC569;
  color: #fff;
}

.navigation h1 {
  font-size: 20px;
}

.navigation h2 {
  font-size: 16px;
  font-weight: normal;
  margin: 0;
  border: 1px solid #e8a400;
  border-bottom: 0;
  background: #ffc;
  color: #E8A400;
  padding: 8px;
  padding-bottom: 0;
}

.navigation ul {
  margin-top: 0;
  border: 1px solid #E8A400;
  border-top: none;
  background: #ffc;
  padding: 8px;
  margin-left: 0;
}

.navigation ul li {
  font-size: 12px;
  list-style-type: none;
  margin-top: 1px;
  margin-bottom: 1px;
  color: #555;
}

.navigation a {
  color: #ffc;
}

.navigation ul li a {
  color: #000;
}

#log {
  padding-bottom: 1em;
  border-bottom: 2px solid #000;
  margin-bottom: 2em;
}

#logsummary {
  margin-bottom: 1em;
  padding: 1ex;
  border: 1px solid #000;
  font-weight: bold;
}

#logtable {
  width:100%;
  border-collapse: collapse;
  border: 1px dotted #666;
}

#logtable td, #logtable th {
  text-align: left;
  padding: 3px 8px;
  border: 1px dotted #666;
}

#logtable .passed {
  background-color: #cfc;
}

#logtable .failed, #logtable .error {
  background-color: #fcc;
}

#logtable .nameCell {
  cursor: pointer;
}
      </style>
  </head>
  <body>
     
    <h1 id="tobeeditedadvanced"><?php echo $coba; ?></h1>
    <script>
    // <![CDATA[
      new Ajax.InPlaceRichEditor($('tobeeditedadvanced'), 'upload.php?id=<?php echo $_GET['id'];?>', {
        ajaxOptions: {method: "post"}}, //override so we can use a static for the result
        tinymce_advanced_options
      );
    // ]]>
    </script>
     
	 
	<?php if (!isset($_SESSION['username'])) echo ''; else { echo '<br><center><font size="1">klik tulisan di atas untuk mengedit'; 
echo '<br><br> <center><input type="button" value="close" onclick="self.close()"></center>';
}?>
  </body>
</html>
