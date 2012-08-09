<?php
	
	
	$con = mysql_connect("localhost","root","mondriot");
if (!$con)
  {
  echo 'Could not connect: ' . mysql_error();
  } 
  if($con){
  	
	
	
	mysql_query("CREATE DATABASE map_points",$con);
	
	mysql_select_db("map_points", $con);
	
	//BUS POINTS
	mysql_query("CREATE TABLE cycle_parks
		(
		id MEDIUMINT NOT NULL AUTO_INCREMENT,
		location varchar(255),
		latitude varchar(255),
		longitude varchar(255),
		PRIMARY KEY (id)
		)",$con);
	 
	 
	 
	$lines = file($_GET["in"]);
	foreach ($lines as $line)
	{
		$info = explode(",",$line);
		$location = str_replace("\"", "", $info[0]);
		$longitude = str_replace("\"", "", $info[6]);
		$latitude = str_replace("\"", "", $info[7]);
		if($location!=="Location"){
			mysql_query("INSERT INTO cycle_parks (location, latitude, longitude) VALUES ('".$location."', '".$latitude."','".$longitude."')");
		}
	}

  }  
?>





