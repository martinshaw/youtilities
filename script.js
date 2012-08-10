$(document).ready(function(){
	
	$("#getPos").hide();
	
	//CONTAINER WIDTH/HEIGHT
	$("#outerContainer").css("height",window.innerHeight.toString()+"px");
	$("#outerContainer").css("width",window.innerWidth.toString()+"px");
	$("#innerContainer").css("height",window.innerHeight.toString()+"px");
	$("#innerContainer").css("width",window.innerWidth.toString()+"px");
	$("#topBar").css("height","40px");
	$("#topBar").css("width",window.innerWidth.toString()+"px");
	$("#topBar td").css("height","40px");
	$("#topBar td").css("width",window.innerWidth.toString()+"px");

	
	if (navigator.geolocation) {
		$("#getPos").show();
	}
});



/*
 * 
 * 
	        //GEO LOCATION SECTION
	        function checkPosCompat(){
				navigator.geolocation.getCurrentPosition(show_map);
			}
			function show_map(position) {
				  var latitude = position.coords.latitude;
			  var longitude = position.coords.longitude;
			  
			 var marker = new google.maps.Marker({
			    position: map.getCenter(),
			    map: map,
			    title: 'Click to zoom'
			  });
			 }
			 alert(map);
	     	//END GEO SECTION
 * 
 */