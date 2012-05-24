
 
<?php	
	/*
		Place code to connect to your DB here.
	*/
	$hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost', so you're NOT necessary to 	change this even this script has already online on the internet.
	$dbname   = 'onlinekartatoko'; // Your database name.
	$username = 'root';             // Your database username.
	$password = 'abc123';                 // Your database password. If your database has no password, leave it empty.

// Let's connect to host
mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');
// Select the database
mysql_select_db($dbname) or DIE('Database name is not available!');	// include your code to connect to DB.

	$tbl_name='datatoko';		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	$prop = 'yogyakarta';
	
	$dae = $_GET["dae"];
	$kat = $_GET["kat"];
	
	$kat1 = $_GET["kat1"];
	$kat2 = $_GET["kat2"];
	$kat3 = $_GET["kat3"];
	$kat4 = $_GET["kat4"];
	$kat5 = $_GET["kat5"];
	$kategori = $_GET["kategori"];
	 
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	
	if($prop=='yogyakarta' && $kat=='all' && $dae=='Semua'){$query = "SELECT COUNT(*) as num FROM $tbl_name where propinsi='$prop'";}else
	if($kategori!=''){$query = "SELECT COUNT(*) as num FROM $tbl_name where (kategori='$kat1' or kategori='$kat1' or kategori2='$kat1' or kategori3='$kat1' or kategori='$kat2' or kategori2='$kat2' or kategori3='$kat2' or kategori='$kat3' or kategori2='$kat3' or kategori3='$kat3' or kategori='$kat4' or kategori2='$kat4' or kategori3='$kat4' or kategori='$kat5' or kategori2='$kat5' or kategori3='$kat5')";}else
	if(($prop=='yogyakarta' && $kat=='') || ($prop=='yogyakarta' && $kat=='' && $dae=='')){$query = "SELECT COUNT(*) as num FROM $tbl_name where propinsi='$prop'";} 		    else
	if($prop=='yogyakarta' && $dae==''){$query = "SELECT COUNT(*) as num FROM $tbl_name where (kategori='$kat' or kategori2='$kat' or kategori3='$kat') and propinsi='$prop'  ";}else
	if($prop!='Semua' && $kat=='all' && $dae=='Semua'){$query = "SELECT COUNT(*) as num FROM $tbl_name where 		 	    propinsi='$prop'";}else
	if($prop!='Semua' && $kat=='all' && $dae!='Semua'){$query = "SELECT COUNT(*) as num FROM $tbl_name where 		       	propinsi='$prop' and daerah='$dae'";}else
	if($prop==''){$query = "SELECT COUNT(*) as num FROM $tbl_name where (kategori='$kat' or kategori2='$kat' or kategori3='$kat') and propinsi='$prop' ";}else
	if($prop!='Semua' && $dae=='Semua'){$query = "SELECT COUNT(*) as num FROM $tbl_name where (kategori='$kat' or kategori2='$kat' or kategori3='$kat'  ) and 		   propinsi='$prop'";}else
	
	$query = "SELECT COUNT(*) as num FROM $tbl_name where (kategori='$kat' or kategori2='$kat' or kategori3='$kat' ) and propinsi='$prop' and daerah='$dae'";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "index.php?kat=$kat&kategori=$kategori&kat1=$kat1&kat2=$kat2&kat3=$kat3&prop=$prop&dae=$dae"; 	//your file name  (the name of this file)
	$limit = 10; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	
	if($prop=='yogyakarta' && $kat=='all' && $dae=='Semua'){$sql = "SELECT * FROM $tbl_name where propinsi='$prop' LIMIT  $start, $limit";}else
	if($kategori!=''){$sql = "SELECT * FROM $tbl_name where kategori='$kat1' or kategori='$kat1' or kategori2='$kat1' or kategori3='$kat1' or kategori='$kat2' or kategori2='$kat2' or kategori3='$kat2' or kategori='$kat3' or kategori2='$kat3' or kategori3='$kat3' or kategori='$kat4' or kategori2='$kat4' or kategori3='$kat4' or kategori='$kat5' or kategori2='$kat5' or kategori3='$kat5' LIMIT  $start, $limit";}else
	if($prop=='yogyakarta' && $kat==''){$sql = "SELECT * FROM $tbl_name where propinsi='$prop' LIMIT  $start, $limit";}else	
	if($prop=='yogyakarta' && $dae==''){$sql = "SELECT * FROM $tbl_name where (kategori='$kat' or kategori2='$kat' or kategori3='$kat') and propinsi='$prop'  LIMIT $start, $limit";}else
	if($prop!='Semua' && $kat=='all' && $dae=='Semua'){$sql = "SELECT * FROM $tbl_name where propinsi='$prop' LIMIT $start, $limit";}else
	if($prop!='Semua' && $kat=='all' && $dae!='Semua'){$sql = "SELECT * FROM $tbl_name where propinsi='$prop' and 		   daerah='$dae' LIMIT $start, $limit"; }else
	if($prop==''){$sql = "SELECT * FROM $tbl_name where (kategori='$kat' or kategori2='$kat' or kategori3='$kat') and propinsi='$prop'  LIMIT $start, $limit";}else
	if($prop!='Semua' && $dae=='Semua'  ){$sql = "SELECT * FROM $tbl_name where (kategori='$kat' or kategori2='$kat' or kategori3='$kat')  and propinsi='$prop' LIMIT $start, $limit";}else
	{$sql = "SELECT * FROM $tbl_name where (kategori='$kat' or kategori2='$kat' or kategori3='$kat')  and propinsi='$prop' and daerah='$dae' LIMIT $start, $limit";}
	$result = mysql_query($sql);
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage&page=$prev\">previous</a>";
		else
			$pagination.= "<span class=\"disabled\">previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage&page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage&page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage&page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage&page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage&page=$next\">next</a>";
		else
			$pagination.= "<span class=\"disabled\">next</span>";
		$pagination.= "</div>\n";		
	}
?>




		<?php
		while($row = mysql_fetch_array($result))
		{

		include ("2.php");
	
		}
	?>

<?=$pagination?>
	
