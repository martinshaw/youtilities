<?php

echo $_GET["ftype"];
	
	$ddd=explode(",", $_get["floc"])[0];
	$dded=explode(",", $_get["floc"])[1];
	$ddde=$_GET["ftype"];
	$dede=$_GET["fname"];
	$description=$_GET["description"];


/*	$con = mysql_connect("localhost","root","mondriot");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("map_points", $con);

mysql_query("INSERT INTO $ddde (location, latitude, longitude,description)
VALUES ('$dede', '$ddd','$dded','$description')");

mysql_close($con);*/
?>





