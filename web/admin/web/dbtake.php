

<?php
session_start();

//###################### DOMAIN ##################################


$domain = $_SERVER['SERVER_NAME'];
$domain = 'guzelael.com';

//##################### HOSTING IMAGE ##########################

$hostimage = 'evanpurnama.info';


//################### GAMBAR BACKGROUND ######################

$que0 = "SELECT pictBackground FROM webs where domain='$domain' ";
$res0 = mysql_query($que0);
$image0 = mysql_result($res0, 0);

//#################### LOGO ###########################
$quelogo = "SELECT pictLogo FROM webs where domain='$domain' ";
$reslogo = mysql_query($quelogo);
$imagelogo = mysql_result($reslogo, 0);

//################# GAMBAR BANNER ############################

$que10 = "SELECT pictBanner FROM webs where domain='$domain' ";
$res10 = mysql_query($que10);
$image10 = mysql_result($res10, 0);

$que10_2 = "SELECT pictBanner2 FROM webs where domain='$domain' ";
$res10_2 = mysql_query($que10_2);
$image10_2 = mysql_result($res10_2, 0);

$que10_3 = "SELECT pictBanner3 FROM webs where domain='$domain' ";
$res10_3 = mysql_query($que10_3);
$image10_3 = mysql_result($res10_3, 0);

$que10_4 = "SELECT pictBanner4 FROM webs where domain='$domain' ";
$res10_4 = mysql_query($que10_4);
$image10_4 = mysql_result($res10_4, 0);

//################## BANNER CAPTION #########################

$que10_caption = "SELECT bannerCaption FROM webs where domain='$domain' ";
$res10_caption = mysql_query($que10_caption);
$image10_caption = mysql_result($res10_caption, 0);

$que10_caption2 = "SELECT bannerCaption2 FROM webs where domain='$domain' ";
$res10_caption2 = mysql_query($que10_caption2);
$image10_caption2 = mysql_result($res10_caption2, 0);


//###################### CLOCK UPLOAD #########################

$que0logo = "SELECT Nomer FROM clockupload where id='logo' ";
$res0logo = mysql_query($que0logo);
$image0logo = mysql_result($res0logo, 0);

$que100 = "SELECT Nomer FROM clockupload where id='gambarutama' ";
$res100 = mysql_query($que100);
$image100 = mysql_result($res100, 0);


$que01 = "SELECT Nomer FROM clockupload where id='kiri1' ";
$res01 = mysql_query($que01);
$image01 = mysql_result($res01, 0);

$que02 = "SELECT Nomer FROM clockupload where id='kiri2' ";
$res02 = mysql_query($que02);
$image02 = mysql_result($res02, 0);

  $que03 = "SELECT Nomer FROM clockupload where id='kiri3' ";
$res03 = mysql_query($que03);
$image03 = mysql_result($res03, 0);

  $que04 = "SELECT Nomer FROM clockupload where id='kiri4' ";
$res04 = mysql_query($que04);
$image04 = mysql_result($res04, 0);

  $que05 = "SELECT Nomer FROM clockupload where id='kiri5' ";
$res05 = mysql_query($que05);
$image05 = mysql_result($res05, 0);

  $que06 = "SELECT Nomer FROM clockupload where id='kiri6' ";
$res06 = mysql_query($que06);
$image06 = mysql_result($res06, 0);

  $que07 = "SELECT Nomer FROM clockupload where id='kiri7' ";
$res07 = mysql_query($que07);
$image07 = mysql_result($res07, 0);

  $que08 = "SELECT Nomer FROM clockupload where id='kiri8' ";
$res08 = mysql_query($que08);
$image08 = mysql_result($res08, 0);

  $que09 = "SELECT Nomer FROM clockupload where id='kiri9' ";
$res09 = mysql_query($que09);
$image09 = mysql_result($res09, 0);

  
//##################### GAMBAR PRODUCT DI HOME PAGE ################

$que = "SELECT pict1 FROM webs where domain='$domain' ";
$res = mysql_query($que);
$image = mysql_result($res, 0);

$que2 = "SELECT pict2 FROM webs where domain='$domain' ";
$res2 = mysql_query($que2);
$image2 = mysql_result($res2, 0);

$que3 = "SELECT pict3 FROM webs where domain='$domain' ";
$res3 = mysql_query($que3);
$image3 = mysql_result($res3, 0);

$que4 = "SELECT pict4 FROM webs where domain='$domain' ";
$res4 = mysql_query($que4);
$image4 = mysql_result($res4, 0);

$que5 = "SELECT pict5 FROM webs where domain='$domain' ";
$res5 = mysql_query($que5);
$image5 = mysql_result($res5, 0);

$que6 = "SELECT pict6 FROM webs where domain='$domain' ";
$res6 = mysql_query($que6);
$image6 = mysql_result($res6, 0);

$que7 = "SELECT pict7 FROM webs where domain='$domain' ";
$res7 = mysql_query($que7);
$image7 = mysql_result($res7, 0);

$que8 = "SELECT pict8 FROM webs where domain='$domain' ";
$res8 = mysql_query($que8);
$image8 = mysql_result($res8, 0);

$que9 = "SELECT pict9 FROM webs where domain='$domain' ";
$res9 = mysql_query($que9);
$image9 = mysql_result($res9, 0);

 
//###################### KETERANGAN PRODUCT DI HOME PAGE #########

$query3 = "SELECT price1 FROM webs where domain='$domain'";
$result3 = mysql_query($query3);
$harga = mysql_result($result3, 0);

$query4 = "SELECT price2 FROM webs where domain='$domain'";
$result4 = mysql_query($query4);
$harga2 = mysql_result($result4, 0);

$query5 = "SELECT price3 FROM webs where domain='$domain'";
$result5 = mysql_query($query5);
$harga3 = mysql_result($result5, 0);

$query6 = "SELECT price4 FROM webs where domain='$domain'";
$result6 = mysql_query($query6);
$harga4 = mysql_result($result6, 0);

$query7 = "SELECT price5 FROM webs where domain='$domain'";
$result7 = mysql_query($query7);
$harga5 = mysql_result($result7, 0);

$query8 = "SELECT price6 FROM webs where domain='$domain'";
$result8 = mysql_query($query8);
$harga6 = mysql_result($result8, 0);

$query9 = "SELECT price7 FROM webs where domain='$domain'";
$result9 = mysql_query($query9);
$harga7 = mysql_result($result9, 0);

$query10 = "SELECT price8 FROM webs where domain='$domain'";
$result10 = mysql_query($query10);
$harga8 = mysql_result($result10, 0);

$query11 = "SELECT price9 FROM webs where domain='$domain'";
$result11 = mysql_query($query11);
$harga9 = mysql_result($result11, 0);
 
//################## COLOR #################################


$querycolor1 = "SELECT colorHeader FROM webs where domain='$domain'";
$resultcolor1 = mysql_query($querycolor1);
$c1 = mysql_result($resultcolor1, 0);
 

if (!$res) {
    die('Query failed: ' . mysql_error());
}

//#################### SIDEBAR TEXT ##########################

$query0="SELECT textSidebar FROM webs where domain='$domain' ";
$result0=mysql_query($query0);
$coba = mysql_result($result0, 0);

if(isset($_GET['page'])) {
$page=$_GET['page'];
$querytextpage="SELECT $page FROM webs where domain='$domain' ";
$resulttextpage=mysql_query($querytextpage);
$textpage = mysql_result($resulttextpage, 0);
}


$querytextabout="SELECT textAbout FROM webs where domain='$domain' ";
$resulttextabout=mysql_query($querytextabout);
$textabout = mysql_result($resulttextabout, 0);


//############ IMAGE ITEM - PAGE #############

if(isset($_GET['page'])) {
$pagenumber=$_GET['page'];

$queItem1 = "SELECT url FROM pages where domain='$domain' and page='$pagenumber'  and ItemPhoto='1' ";
$resItem1 = mysql_query($queItem1);
$num_rows = mysql_num_rows($resItem1);
if($num_rows!=0) {
$imageItem1 = mysql_result($resItem1, 0);
}

$queItem2 = "SELECT url FROM pages where domain='$domain' and page='$pagenumber'  and ItemPhoto='2' " ;
$resItem2 = mysql_query($queItem2);
$num_rows = mysql_num_rows($resItem2);
if($num_rows!=0) {
$imageItem2 = mysql_result($resItem2, 0);
}

$queItem3 = "SELECT url FROM pages where domain='$domain' and page='$pagenumber' and ItemPhoto='3' ";
$resItem3 = mysql_query($queItem3);
$num_rows = mysql_num_rows($resItem3);
if($num_rows!=0) {
$imageItem3 = mysql_result($resItem3, 0);
}

};

?>
  
