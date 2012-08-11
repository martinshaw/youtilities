<?php


if(isset($_GET["remove"])){


	$ddde=$_GET["ftype"];
	$dede=$_GET["fname"];

	$con = mysql_connect("localhost","root","mondriot");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("map_points", $con);

mysql_query("DELETE FROM $ddde
WHERE location=$fname");

mysql_close($con);

header("Location: ../index.php");

}else{


	
	$ddd=explode(",", $_GET["floc"])[0];
	$dded= str_replace("%20", "", explode(",", $_GET["floc"])[1]);
	$ddde=$_GET["ftype"];
	$dede=$_GET["fname"];
	$descri=$_GET["description"];


	$con = mysql_connect("localhost","root","mondriot");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("map_points", $con);

mysql_query("INSERT INTO $ddde (location, latitude, longitude,description)
VALUES ('$dede', '$ddd','$dded','$descri')");

mysql_close($con);

header("Location: ../index.php");

}
?>





