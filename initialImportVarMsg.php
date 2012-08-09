<?php
	
	
	$con = mysql_connect("localhost","root","mondriot");
	
	
	mysql_select_db("map_points", $con);
	
	 mysql_query("CREATE TABLE elec_charging_point_init
		(
		location varchar(255),
		postcode varchar(255)
		)",$con);
	 
	 
	$lines = file("evcp.csv");
	foreach ($lines as $line)
	{
		$info = explode(",",$line);
		$location = str_replace("|", ",", $info[0]);
		echo $location;
		$postcode= str_replace("|", ",", $info[1]);
		echo $postcode;
		mysql_query("INSERT INTO elec_charging_point_init VALUES ('$location', '$postcode');
	}


?>