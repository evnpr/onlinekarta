<?php
mkdir("hape", 0777);
?>

<?php


	
	function wwwcopy($link,$file)
	{
		$fp = fopen($link,"r");
		$cont = '';
		while(!feof($fp))
		{
			$cont.= fread($fp,1024);
		}
		fclose($fp);

		$fp2 = fopen($file,"w");
		fwrite($fp2,$cont);
		fclose($fp2);
	}
	
	wwwcopy("/var/www/onlinekarta/seller/template/index.php", "hape/index.php");
?>
