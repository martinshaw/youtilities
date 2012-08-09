<span>
	<script>
				$("#topLocBtn").click(function(){
				if(navigator.geolocation){
					   navigator.geolocation.getCurrentPosition(show_map);
					   function show_map(position) {
						var lat = position.coords.latitude;
						var lng = position.coords.longitude;
						$("#to").attr("value",lat.toString()+", "+lng.toString());
	  				   }
				}
				});

				$("#fromLocBtn").click(function(){
				if(navigator.geolocation){
					   navigator.geolocation.getCurrentPosition(show_map);
					   function show_map(position) {
						var lat = position.coords.latitude;
						var lng = position.coords.longitude;
						$("#from").attr("value",lat.toString()+", "+lng.toString());
	  				   }
				}
				});
	</script>

	<label for="from">From: &nbsp; </label><input type="search" id="from" size="30" x-webkit-speech/>&nbsp;<input type="button" id="fromLocBtn" class="locBtn" textBoxId="from" value="Current position"/>
	<br/>
	<label for="to">To: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input type="search" id="to" size="30" x-webkit-speech/>&nbsp;<input type="button" id="topLocBtn" class="locBtn" textBoxId="to" value="Current position"/>
</span>
