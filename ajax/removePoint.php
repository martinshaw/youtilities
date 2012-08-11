
<span>
	<label for="ftype">Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="ftype" id="ftype">
      	

      	<?php include("includeTypes.n"); ?>


    </select> 
	<hr/>
	<label for="fname">Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="fname" id="fname" size="20"/>
	<br/><br/><br/><br/><br/>

	<div id="wrgergwe4rg4" style="vertical-align:bottom;"><button id="ssss" onclick="submitData()">Remove</button>&nbsp;&nbsp;<button>Cancel</button></div>
	<script>
		$("#ssss").click(function(){
			parent.window.location.href="http://youtiliti.es/projects/YouTilitilies/ajax/processPoint.php?remove=true&ftype="+$("#ftype").val()+"&fname="+$("#fname").val()+"&floc="+$("#floc").val()+"&description="+$("#desc").val();
		});
	</script>

	<input type="hidden" name="formUsed" value="true"/>
</span>


<!-- get name type and desc, etc... then when modal is closed, pan to added location -->




