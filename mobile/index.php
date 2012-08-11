<!-- NOTEs:
	Routes / Other Type of item / 
-->


<!DOCTYPE html>
<html>
	<head>
		<title>youtilities</title>
		<meta name="description" content="An extremely useful map, allowing you access to the location of your most urgently required facilities">
		
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>



		  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		  <script type="text/javascript" src="https://raw.github.com/HPNeo/gmaps/master/gmaps.js"></script>

		    <script type="text/javascript">
			var map;
			    $(document).ready(function(){
		

			           map = new GMaps({
				      div: '#map',
				      lat: 53.479598999023438,
				      lng: -2.2488100528717041,  //VIEW OF LONDON
					zoom: 6,
			      	   });


				if(navigator.geolocation){
			           navigator.geolocation.getCurrentPosition(show_map);
				   function show_map(position) {map.setCenter(position.coords.latitude, position.coords.longitude);map.setZoom(18);
var imagedcurloc = new google.maps.MarkerImage('..\\icons/iconic/blue/fullscreen_exit_alt_24x24.png', new google.maps.Size(24, 24), new google.maps.Point(0,0), new google.maps.Point(0, 32));
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



			    $("#searchActionBtn").click(function(){
				
				GMaps.geocode({
				  address: $('#searchBox').val(),
				  callback: function(results, status) {
				    if (status == 'OK') {
				      var latlng = results[0].geometry.location;
				      map.setCenter(latlng.lat(), latlng.lng());
					map.setZoom(13);
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



			    	$(document).ready(function(){
			    			$("#map").css("height",(window.innerHeight-46)+"px");
			    		
			    	});




			 });


		    </script>
	
	</head>
	<body oncontextmenu="">

			<div data-role="page">

				<div data-role="header">
					<h1>youtilities</h1>
				</div><!-- /header -->

				<div data-role="content" style="margin:0;padding:0;">	
					<div id="map" style="width:100%;margin:0;padding:0;">&nbsp;</div>		
				</div><!-- /content -->

			</div><!-- /page -->

		
	</body>
</html>
