<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: ../index.php');
}

?>

<title>Guzela Elbise - Admin</title>

<!--[if gte IE 6]>
<link rel="stylesheet" type="text/css" href="ie.css" />
<![endif]-->

<![if !IE]>


<style >
body
{
margin-left: auto;
margin-right: auto;		
width:950px;
background-color: #e8c487;
font-family:lucida grande, tahoma, verdana, arial, sans-serif;
background:url('apps/uploadwithcrop/upload_pic/<? echo $image0; ?>');
 background-repeat: repeat;
}

a:link
{
color:#fff;
text-decoration:none;
}
 
a:visited
{
color:#fff;
text-decoration:none;
}
A:hover {text-decoration: underline; }
A:link img, A:visited img {border-color: #874c00;}
A:hover img  {border-color: #874c00;}

#header-atas {
height:60px; 
background-color: #f4f0ed; 
width:970px;

}

#header-atas-fixed {
  height:45px; background-color:#<?php echo $c1; ?>; top:-0px; position:fixed; width:970px; z-index:1000;  
}

#konten
{
margin-left: auto;
margin-right: auto;
width:950px;
padding:10px;
float:left;
background-color: #fff ;
}
 
#navlist li
{
display: inline;
list-style-type: none;
padding-right: 60px;
font-family:lucida grande, tahoma, verdana, arial, sans-serif;

}
 

#kiri
{
width: 230px;
border: 0px solid;
float: left;
background-color: ;
}

#tengah
{
width: 230px;
border: 0px solid;
 
float: left;
background-color: ;
}

#kanan
{
width: 230px;
border: 0px solid;
float: left;
background-color:;
}

#kanan2
{
width: 220px;
border-left: 1px solid #BAB2BD;
float: right;
background-color:;
margin:5px;
}

#kanan2 a:link
{
color:#000;
text-decoration:underline;
}
 
#kanan2 a:visited
{
color:#000;
text-decoration:none;
}

#bawah
{
width: 100%;
width: 970px; 
height: 60px;
margin-bottom:-30px; 
 float:left;
background-color: #f4f0ed;
 
}

.bawah
{
width: 970px;
border: 1px solid white;  ; padding:1px;
height: 10px;
 
 float:left;
background-color:#<?php echo $c1; ?>;

}

.gambarutama
{
border : 0px solid;
height : 350px;
padding : 5px;
margin-left: auto;
margin-right: auto;
margin-bottom: 0px;
 
background-color:;
}

.kiri-top
{

width: 95%;
height: 230px;
border: 0px solid white;
margin-left: auto;
margin-right: auto;		
margin-top:5px;
background-color:;
}

 
 
.kiri-mid
{

width: 95%;
height: 230px;
border: 0px solid;
margin-left: auto;
margin-right: auto;		
margin-top:5px;
background-color:;
}

 
.kiri-bottom
{

width: 95%;
height: 230px;
border: 0px solid;
margin-left: auto;
margin-right: auto;		
margin-top:5px;
background-color:;
 
}

 
.tengah-top
{

width: 98%;
height: 230px;
border: 0px solid;
margin-left: auto;
margin-right: auto;		
margin-top:5px;
background-color:; 
}


.tengah-mid
{

width: 98%;
height: 230px;
border: 0px solid;
margin-left: auto;
margin-right: auto;		
margin-top:5px;
background-color:; 
}

 
.tengah-bottom
{

width: 98%;
height: 230px;
border: 0px solid;
margin-top:5px;
margin-left: auto;
margin-right: auto;		
background-color:; 
}


 
.kanan-top
{
width: 95%;
height: 230px;
border: 0px solid;
margin-top:5px;
margin-left: auto;
margin-right: auto;		
background-color:; 
}

 
.kanan-mid
{
height: 230px;
width: 95%;
border: 0px solid;
margin-top:5px;
margin-left: auto;
margin-right: auto;		
background-color:; 
}

.kanan-bottom
{
height: 230px;
width: 95%;
border: 0px solid;
margin-top:5px;
margin-left: auto;
margin-right: auto;		
background-color:; 
}

 
.kanan2-top
{

width: 95%;
height: 750px;
border: 0px solid;
margin-top:5px;
margin-left: auto;
margin-right: auto;		
background-color:; 
}

 
.kanan2-mid
{
height: 0px;
width: 95%;
border: 0px solid;
margin-top:5px;
margin-left: auto;
margin-right: auto;		
background-color:; 
}

 
#antiie{
display:none; 
}
</style>
<![endif]>


<div id="antiie" style="text-align:center; font-family:lucida grande, tahoma, verdana, arial, sans-serif; "><h2 style="color:#4E88A6"> You still use IE? Why dont you just change to Chrome, Mozilla, Opera, or Safari now?</h2></div>


