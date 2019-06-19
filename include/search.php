  <?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		include("dbconnect.php");
		include("../functions/functions.php");
		$search = clearstring($_POST['text']);
		$result = mysql_query("SELECT * FROM table_of_products WHERE title LIKE '%$search%' AND visible = '1'",$link);
		if(mysql_num_rows($result) > 0)
		{
			$result = mysql_query("SELECT * FROM table_of_products WHERE title LIKE '%$search%' AND visible = '1' LIMIT 30",$link);
			$row = mysql_fetch_array($result);
			do{
				echo'
					 <li><a href="search.php?q='.$row["title"].'">'.$row["title"].'</a></li>
				';
			}
			while($row = mysql_fetch_array($result));
		}
	}
?> 