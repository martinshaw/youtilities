<?php

if(isset($_GET["name"]) && isset($_GET["type"]) && isset($_GET["rating_score"])){

	$con = mysql_connect("localhost","root","mondriot");
	if (!$con)
	  {
	  echo 'Could not connect: ' . mysql_error();
	  } 
	if($con)
	  {

		  mysql_select_db("map_points", $con);

		  $type=$_GET["type"];
		  $name=$_GET["name"];

		  $new_rating_score=(int)$_GET["rating_score"];
		  $ndd_rating_score=(int)mysql_query("SELECT rating_score FROM $type WHERE name='$name'");
		  $new_rating_score=$new_rating_score+$ndd_rating_score;


		  mysql_query("UPDATE $type
			SET rating_score=$new_rating_score, 
			WHERE name='$name');
		  
		}


}}
?>