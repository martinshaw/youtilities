<?php


	$con = mysql_connect("localhost","root","mondriot");
	if (!$con)
	  {
	  echo 'Could not connect: ' . mysql_error();
	  } 
	if($con)
	  {


	  	echo "var imaged = new google.maps.MarkerImage('icons/Red/7_1.png', new google.maps.Size(20, 22), new google.maps.Point(0,0), new google.maps.Point(0, 32));";
	 	echo "var image = new google.maps.MarkerImage('icons/Orange/7_1.png', new google.maps.Size(20, 22), new google.maps.Point(0,0), new google.maps.Point(0, 32));";
	  echo "var imagede = new google.maps.MarkerImage('icons/Blue/7_1.png', new google.maps.Size(20, 22), new google.maps.Point(0,0), new google.maps.Point(0, 32));";
	 




//cycle parks

	  mysql_select_db("map_points", $con);		
	  
	  $sql_stmnt = "SELECT location, latitude, longitude, description FROM cycle_parks";
	  $results = mysql_query($sql_stmnt);
	  while($row = mysql_fetch_row($results)){
		list($loc, $lat, $long, $desc) = $row;
		if($desc=="NULL"){$desc="";}

		print "map.addMarker({ lat: $lat, lng: $long, title: '$loc', icon: image, infoWindow: { content: \"<p id='bubbleTitle'>$loc Cycle Lockers</p><p id='bubbleArticle'>$desc</p>\"} });";
	  }	


	
	  
	  $sql_stmnt = "SELECT location, latitude, longitude, description FROM variable_signs";
	  $results = mysql_query($sql_stmnt);
	  while($row = mysql_fetch_row($results)){
		list($loc, $lat, $long, $desc) = $row;
		if($desc=="NULL"){$desc="";}

		print "map.addMarker({ lat: $lat, lng: $long, title: '$loc', icon: imaged, infoWindow: { content: \"<p id='bubbleTitle'>$loc Cycle Lockers</p><p id='bubbleArticle'>$desc</p>\"} });";
	  }	
	
	  
	  $sql_stmnt = "SELECT location, latitude, longitude, description FROM toilets";
	  $results = mysql_query($sql_stmnt);
	  while($row = mysql_fetch_row($results)){
		list($loc, $lat, $long, $desc) = $row;
		if($desc=="NULL"){$desc="";}

		print "map.addMarker({ lat: $lat, lng: $long, title: '$loc', icon: imagede, infoWindow: { content: \"<p id='bubbleTitle'>$loc Cycle Lockers</p><p id='bubbleArticle'>$desc</p>\"} });";
	  }	


	 echo "test";





	  }




?>