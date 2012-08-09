<!-- NOTEs:
	Routes / Other Type of item / 
-->
<?php
	if(isset($_get["console"])){
		$console=$_get["console"];
	}

	if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "android") || strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "ipad") || strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "iphone") || strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "ipod") || strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "phone")|| strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile")|| strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "blackberry")){
		if(isset($_GET["forceDesktop"])){}else{
			
		}
	}
?>





<!DOCTYPE html>
<html manifest="cache.manifest">
	<head>
		<title>youtilities</title>
		<meta name="description" content="An extremely useful map, allowing you access to the location of your most urgently required facilities">
		<meta name="revisit-after" content="1 days">
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<meta name="distribution" content="web">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="jqueryui/js/jquery-ui-1.8.22.custom.min.js"></script>
		<link rel="stylesheet" type="text/css"  href="jqueryui/css/custom-theme/jquery-ui-1.8.22.custom.css"/>
		<script src="http://modernizr.com/downloads/modernizr.js"></script>
		<link rel="stylesheet" type="text/css"  href="style.css"/>
		<script src="sizeCompute.js"></script>
		<meta name="viewport" content="user-scalable=yes, initial-scale=1.0, maximum-scale=2.0, width=device-width" />
		<script src="jquery.cookies.2.2.0.min.js"></script>
		<?php include("inc.php"); ?>

		  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		  <script type="text/javascript" src="https://raw.github.com/HPNeo/gmaps/master/gmaps.js"></script>

		    <script type="text/javascript">
			var map;
			    $(document).ready(function(){
		

			           map = new GMaps({
				      div: '#map',
				      lat: 53.479598999023438,
				      lng: -2.2488100528717041,  //VIEW OF LONDON
					zoom: 6
			      	   });


				if(navigator.geolocation){
			           navigator.geolocation.getCurrentPosition(show_map);
				   function show_map(position) {map.setCenter(position.coords.latitude, position.coords.longitude);map.setZoom(18);
var imagedcurloc = new google.maps.MarkerImage('icons/iconic/blue/fullscreen_exit_alt_24x24.png', new google.maps.Size(24, 24), new google.maps.Point(0,0), new google.maps.Point(0, 32));
					map.addMarker({
					lat: position.coords.latitude,
					lng: position.coords.longitude,
					icon: imagedcurloc,
					title: "Your Location",
					infoWindow: {
					  content: '<p id="bubbleTitle">This is your current physical location </p>'
					}
				      });
					}
				}

			                           

                   
<?php include("includePins.php"); ?>



				$("#searchBox").keyup(function(event){
				    if(event.keyCode == 13){
				        $("#searchActionBtn").click();
				    }
				});

			    $("#searchActionBtn").click(function(){
					
					if($("#searchBox").val().toLowerCase()=="noplace"){
						var zAddr="Area 51, NV";
					}else{
						var zAddr=$('#searchBox').val();
					}


				GMaps.geocode({
				  address: zAddr,
				  callback: function(results, status) {
				    if (status == 'OK') {
				      var latlng = results[0].geometry.location;
				      map.setCenter(latlng.lat(), latlng.lng());
					map.setZoom(14);
				      map.addMarker({
					lat: latlng.lat(),
					lng: latlng.lng(),
					title: "Search Location",
					infoWindow: {
					  content: '<p id="bubbleTitle">You searched for '+$('#searchBox').val()+', and here it is!</p>'
					}
				      });
				    }
				  }
				});	


			    });


			 });


		    </script>
	
	</head>
	<body oncontextmenu="return false;">

		<table id="outerContainer" cellpadding="0" cellspacing="0">
			<tr id="topBar">
				<td>
					
					<table>
						<tr>
							<td id="leftTopBar" onclick="document.location='index.php';">youtilities</td>
							<td id="rightTopBar">
								
								
								
								

								
								<button id="addPinBtn">Add new pin</button>
								<div id="addPin"><?php include("ajax/addPoint.php"); ?></div>
								<script>
									$( "#addPin" ).dialog({
					height: 400,
					width: 390,
					modal: true,
					autoOpen: false,
					title: "Add new pin"
									});

									$("#addPinBtn").click(function(){
										$( "#addPin" ).dialog("open");
									});
								</script>


								
								<div id="directionDiv"><?php include("ajax/direction.php"); ?></div>
								<script>
									$( "#directionDiv" ).dialog({
					height: 400,
					modal: true,
					width: 380,
					autoOpen: false,
					title: "Get directions"
									});


									$(".dirBtnDirect").click(function(){
										$("#to").attr("value",$(this).attr("lat")+", "+$(this).attr("long"));
										$( "#directionDiv" ).dialog("open");
									});

								
								</script>


								&nbsp;&nbsp;<img src="sep2.png"/>&nbsp;&nbsp;

								<input type="search" id="searchBox" size="40" x-webkit-speech/>
								<button id="searchActionBtn"><img src="icons/iconic/black/magnifying_glass_16x16.png"/></button>							


							</td>
						</tr>
					</table>
					
				</td>
			</tr>
			<tr id="mapArea">
				<td>
					<div id="map" style="width:100%; height:100%"></div>
				</td>
			</tr>
		</table>	
	</body>
</html>



<!-- offer test, functionality, how to promote, how to expand, how was inspired, votes -->
