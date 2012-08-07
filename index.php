<!DOCTYPE html>
<html>
	<head>
		<title>youtilities</title>
		<meta name="description" content="An extremely useful map, allowing you access to the location of your most urgently required facilities">
		<meta name="revisit-after" content="1 days">
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"
		<meta name="distribution" content="web">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="http://modernizr.com/downloads/modernizr.js"></script>
		<link rel="stylesheet" type="text/css"  href="style.css"/>
		<script src="script.js"></script>
		<?php include("inc.php"); ?>

		  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyANLAMiue0-lXVD_ccW1ptZHpaYVDu0Ta4&sensor=true">
		    </script>
		    <script type="text/javascript">
		      function initialize() {
		        var mapOptions = {
		          center: new google.maps.LatLng(-34.397, 150.644),
		          zoom: 8,
		          mapTypeId: google.maps.MapTypeId.ROADMAP
		        };
		        var map = new google.maps.Map(document.getElementById("mapsss"),
		            mapOptions);
		      }
		    </script>

		
		
		
	</head>
	<body onload="initialize()">

		<table id="outerContainer" cellpadding="0" cellspacing="0">
			<tr id="topBar">
				<td>
					
					<table>
						<tr>
							<td id="leftTopBar">youtilities</td>
							<td id="rightTopBar">
								
								<button id="getPos" onclick="callLocationServices();">Current Position</button>
								
							</td>
						</tr>
					</table>
					
				</td>
			</tr>
			<tr id="mapArea">
				<td>
					<div id="mapsss" style="width:100%; height:100%"></div>
				</td>
			</tr>
		</table>	
	</body>
</html>