<?php 

?>
<form method="GET" action="addPoint.php">
	<label for="ftype">Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="ftype" id="ftype">
      	

      	<?php include("includeTypes.n"); ?>


    </select> 
	<hr/>
	<label for="fname">Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="fname" id="fname" size="20"/>
	<br/>
	<label for="floc">Location: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="floc" id="floc" size="20"/>
	&nbsp;

	<script>
		$("#pointGeoLoc").click(function(){
			if(navigator.geolocation){
				   function show_map(position) {
					var lat = position.coords.latitude;
					var lng = position.coords.longitude;
					$("#floc").attr("value",lat.toString()+", "+lng.toString());
  				   }
				   navigator.geolocation.getCurrentPosition(show_map);
			}else{
				alert("Your browser does not support Location Services!\n\nDownload Google Chrome or Firefox to use Location Services");
			}
		});
	</script>

	<input type="button" id="pointGeoLoc" class="locBtn" textBoxId="from" value="Current position"/>
	<br/>
	<label for="desc" style="vertical-align:top;">Description: &nbsp;</label>
	<textarea id="desc" name="description" cols="30" rows="10"></textarea>
	<br/><br/><br/><br/><br/>

	<div id="wrgergwe4rg4" style="vertical-align:bottom;"><button><b>Add</b></button>&nbsp;&nbsp;<button>Cancel</button></div>


	<input type="hidden" name="formUsed" value="true"/>
</form>


<!-- get name type and desc, etc... then when modal is closed, pan to added location -->




