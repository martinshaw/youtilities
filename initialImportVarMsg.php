<?php
	
	
	$con = mysql_connect("localhost","root","mondriot");
if (!$con)
  {
  echo 'Could not connect: ' . mysql_error();
  } 
  if($con){
  	
	
	
	
	mysql_select_db("map_points", $con);
	
	//BUS POINTS
	mysql_query("CREATE TABLE toilets
		(
		id MEDIUMINT NOT NULL AUTO_INCREMENT,
		location varchar(255),
		latitude varchar(255),
		longitude varchar(255),
		PRIMARY KEY (id)
		)",$con);
	 
	 
	 
	$lines = file("publictoiletsv3.csv");
	foreach ($lines as $line)
	{
		$info = explode(",",$line);
		$location = str_replace("\"", "", str_replace("|", ",", $info[0]));
		$longitude= str_replace("\"", "", $info[4]);
		$latitude= str_replace("\"", "", $info[3]);
		if($location!=="Location"){
			mysql_query("INSERT INTO toilets (location, latitude, longitude) VALUES ('".$location."', '".$latitude."', '".$longitude."')");
		}
	}

  }  
?>





