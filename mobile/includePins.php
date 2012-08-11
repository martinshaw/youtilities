<?php


	$con = mysql_connect("localhost","root","mondriot");
	if (!$con)
	  {
	  echo 'Could not connect: ' . mysql_error();
	  } 
	if($con)
	  {


	  	echo "var imaged = new google.maps.MarkerImage('../icons/Red/7_1.png', new google.maps.Size(20, 22), new google.maps.Point(0,0), new google.maps.Point(0, 32));";
	 	echo "var image = new google.maps.MarkerImage('../icons/Orange/7_1.png', new google.maps.Size(20, 22), new google.maps.Point(0,0), new google.maps.Point(0, 32));";
	  	echo "var imagede = new google.maps.MarkerImage('../icons/Blue/7_1.png', new google.maps.Size(20, 22), new google.maps.Point(0,0), new google.maps.Point(0, 32));";
	  	echo "var imageden = new google.maps.MarkerImage('../icons/Lime/7_1.png', new google.maps.Size(20, 22), new google.maps.Point(0,0), new google.maps.Point(0, 32));";
	 




//cycle parks

	  mysql_select_db("map_points", $con);		
	  
	  $sql_stmnt = "SELECT location, latitude, longitude, description FROM cycle_parks";
	  $results = mysql_query($sql_stmnt);
	  while($row = mysql_fetch_row($results)){
		list($loc, $lat, $long, $desc) = $row;
		if($desc=="NULL"){$desc="";}

		print "map.addMarker({ lat: $lat, lng: $long, title: '$loc', icon: image, infoWindow: { content: \"<p id='bubbleTitle'>$loc Cycle Lockers</p><p id='bubbleArticle'><sub>$desc</sub></p>\"} });";
	  }	


	
	  
	  $sql_stmnt = "SELECT location, latitude, longitude, description FROM variable_signs";
	  $results = mysql_query($sql_stmnt);
	  while($row = mysql_fetch_row($results)){
		list($loc, $lat, $long, $desc) = str_replace("Yes", 53.55, $row); //quick fix!!!!
		if($desc=="NULL"){$desc="";}

		print "map.addMarker({ lat: $lat, lng: $long, title: '$loc', icon: imaged, infoWindow: { content: \"<p id='bubbleTitle'>$loc Matrix Signs</p><p id='bubbleArticle'><sub>This matrix sign will be displaying the most recent roadworks, accident and diversion information,<br/>For more info, goto: <i><a href='http://highways.gov.uk'>Highways Agency</a></i></sub></p>\"} });";
	  }	
	
	  
	  $sql_stmnt = "SELECT location, latitude, longitude, description FROM toilets";
	  $results = mysql_query($sql_stmnt);
	  while($row = mysql_fetch_row($results)){
		list($loc, $lat, $long, $desc) = $row;
		if($desc=="NULL"){$desc="";}

		print "map.addMarker({ lat: $lat, lng: $long, title: '$loc', icon: imagede, infoWindow: { content: \"<p id='bubbleTitle'>$loc Public Toilets</p><p id='bubbleArticle'><sub>Monday opening time: 9am - 7pm<br/>Tuesday opening time: 9am - 7pm<br/>Wednesday opening time: 9am - 7pm<br/>Thursday opening time: 9am - 7pm<br/>Friday opening time: 9am - 7pm<br/>Saturday opening time: 9am - 7pm<br/>Sunday opening time: 9am - 7pm<br/><br/>Disabled Access: Yes!<br/><br/>Baby Changing: No, unfortunatly</sub></p>\"} });";
	  }	
	
	  
	  $sql_stmnt = "SELECT location, latitude, longitude, description FROM elec_charging_point";
	  $results = mysql_query($sql_stmnt);
	  while($row = mysql_fetch_row($results)){
		list($loc, $lat, $long, $desc) = $row;
		if($desc=="NULL"){$desc="";}

		print "map.addMarker({ lat: $lat, lng: $long, title: '$loc', icon: imageden, infoWindow: { content: \"<p id='bubbleTitle'>$loc Electric Car Charging Point</p><p id='bubbleArticle'><sub>$desc</sub></p>\"} });";
	  }	

	  /* $sql_stmnt = "SELECT location, postcode FROM elec_charging_point_init";
	  $results = mysql_query($sql_stmnt);
	  while($row = mysql_fetch_row($results)){
		list($loc, $pstcd) = $row;


		print "Maps.geocode({";
		print "  address: $pstcd,";
		print "  callback: function(results, status) {";
	    print "  if (status == 'OK') {";
		print "      var latlng = results[0].geometry.location;";
		print "      map.setCenter(latlng.lat(), latlng.lng());";
		print "      map.addMarker({";
		print "        lat: latlng.lat(),";
		print "        lng: latlng.lng(),";
		print "        icon: imageden,";
		print "        infoWindow: { content: \"<p id='bubbleTitle'>$loc Electric Car Charging Point</p><p id='bubbleArticle'><sub>s</sub></p>\"}";
		print "      });";
		print "    }";
		print "  }";
		print "});";

		}
		*/



	  	




	  }




?>