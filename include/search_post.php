  <?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		include("dbconnect.php");
		include("../functions/functions.php");
        $jsonst = json_decode( file_get_contents('php://input'));
		$text = 'text';
		$search = clearstring($jsonst->$text);

		$result = mysql_query("SELECT * FROM table_of_products WHERE title LIKE '%$search%' AND visible = '1'",$link);
        $json = array();
		if(mysql_num_rows($result) > 0)
		{
			$result = mysql_query("SELECT * FROM table_of_products WHERE title LIKE '%$search%' AND visible = '1' LIMIT 30",$link);
			$row = mysql_fetch_array($result);
			do{
			    $bus = array(
                    'name' => $row["title"],
                );
                array_push($json, $bus);
			}
			while($row = mysql_fetch_array($result));
		}
        $jsonstring = json_encode($json);
        echo $jsonstring;
	}
?> 