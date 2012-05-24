

<? if ($row['logo']=='') {
$logo='stan.jpg';
} else $logo=$row['logo'];?>

<div style=" height:200px;" > 



<div style="float:left; ">
<a href="<?php echo $row['link']; ?>"  target="_blank"><img src="<? echo $logo; ?>"
 height="75px" width="75px" border=" px"> </a>
</div>




<div style="float:left; border-right-style:solid; border-width:0px; width: 50%; height:180px; margin-left:15px; font-family:lucida grande, tahoma, verdana, arial, sans-serif " >

<a href="<?php echo $row['link']; ?>"  target="_blank"><b style="font-size:14px; line-height:170%;"><?php echo $row['judul']; ?></b></a>
 
 <br>  <b><font  color="grey" style="font-size:14px">Lokasi :</font></b> <font  style="font-size:14px" color="grey"> <?php echo $row['lokasi']; ?></font> <br>       
</font></b> <font size="2" color="#b78320"><?php echo $row['deskripsi']; ?></font>

<br>
<br>

<!-- <div id="fb-root"></div> <script src="http://connect.facebook.net/en_US/all.js#appId=153524208054846&amp;xfbml=1"></script><fb:like href="<?php echo $row['link']; ?>" send="true" width="150" show_faces="false" font="arial"></fb:like>
<br> -->

</div>



<div style="float:left; width:34%; margin-left:10px; margin-bottom:20px;  font-family:lucida grande, tahoma, verdana, arial, sans-serif ">


<b><font size="2"color="grey"><? if($row['buka']!='') echo '<br>Buka  &nbsp&nbsp&nbsp: ';?></font> </b>  <font size="2" color="grey">  <?php echo $row['buka']; ?></font>
<b><font size="2"color="grey"><? if($row['produk']!='') echo '<br>Produk :';?></font></b>  <font size="2" color="grey"> <?php echo $row['produk']; ?></font>
<b><font size="2"color="grey"><? if($row['harga']!='') echo '<br>Harga &nbsp&nbsp:';?></font></b>  <font size="2" color="grey"> <?php echo $row['harga']; ?></font>
<font size="2"color="grey"><b><? if($row['kontak']!='') echo '<br>Kontak :';?></font></b>  <font size="2" color="grey">  <?php echo $row['kontak']; ?></font><br>



</div>
 

<!--
<div> <img
 src="garis.gif"> 
</div>
-->
<br><br>




</div>



