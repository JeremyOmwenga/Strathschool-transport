<!doctype html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>STRATHMORE SCHOOL - TRANSPORT INFO</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<form name="dataprocessor" action="parse.php" method="POST">

		<div id="son-names">
		<label for="sonnameone"><h3>Name of son</h3></label>
        <input type="text" placeholder="Enter name" name="name1" id="sonnameone" required>
        <label for="sonnametwo"><h3>Name of son</h3></label>
        <input type="text" placeholder="Leave blank if not applicable" name="name2" id="sonnametwo" required>
        <label for="sonnamethree"><h3>Name of son</h3></label>
        <input type="text" placeholder="Leave blank if not applicable" name="name3" id="sonnamethree" required>
        <label for="sonnamefour"><h3>Name of son</h3></label>
        <input type="text" placeholder="Leave blank if not applicable" name="name4" id="sonnamefour" required>
        <label for="sonnamefive"><h3>Name of son</h3></label>
        <input type="text" placeholder="Leave blank if not applicable" name="name5" id="sonnamefive" required>
    	</div>

    	<div id="son-grades">
    		<h3>Class of your son(s) in 2023</h3>

    		<div id="class1-4">
    	<input type="checkbox" id="G1" name="grade[]" value="Grade 1">
        <label for="G1">Grade 1</label><br>
        <input type="checkbox" id="G2" name="grade[]" value="Grade 2">
        <label for="G2">Grade 2</label><br>
        <input type="checkbox" id="G3" name="grade[]" value="Grade 3">
        <label for="G3">Grade 3</label><br>
        <input type="checkbox" id="G4" name="grade[]" value="Grade 4">
        <label for="G4">Grade 4</label><br>
    		</div>
    		<div id="class5-8">
    	<input type="checkbox" id="G5" name="grade[]" value="Grade 5">
        <label for="G5">Grade 5</label><br>
        <input type="checkbox" id="G6" name="grade[]" value="Grade 6">
        <label for="G6">Grade 6</label><br>
        <input type="checkbox" id="G7" name="grade[]" value="Grade 7">
        <label for="G7">Grade 7</label><br>
        <input type="checkbox" id="S8" name="grade[]" value="Standard 8">
        <label for="S8">Standard 8</label><br>
    		</div>
    		<div id="form1a-2al">
    	<input type="checkbox" id="F1A" name="grade[]" value="Form 1A">
        <label for="F1A">Form 1A</label><br>
        <input type="checkbox" id="F1&" name="grade[]" value="Form 1&">
        <label for="F1&">Form 1&</label><br>
        <input type="checkbox" id="F2A" name="grade[]" value="Form 2A">
        <label for="F2A">Form 2A</label><br>
        <input type="checkbox" id="F2&" name="grade[]" value="Form 2&">
        <label for="F2&">Form 2&</label><br>
    		</div>
    		<div id="form3a-4al">
    	<input type="checkbox" id="F3A" name="grade[]" value="Form 3A">
        <label for="F3A">Form 3A</label><br>
        <input type="checkbox" id="F3&" name="grade[]" value="Form 3&">
        <label for="F3&">Form 3&</label><br>
        <input type="checkbox" id="F4A" name="grade[]" value="Form 4A">
        <label for="F4A">Form 4A</label><br>
        <input type="checkbox" id="F4&" name="grade[]" value="Form 4&">
        <label for="F4&">Form 4&</label><br>
    		</div>
    	</div>

    	<div id="transport-mode-22">
    		<h3>What is your current mode of transport?</h3>

				<h4>Morning</h4>
				<div id="morning">
				<p><input type="radio" id="parentscar" name="trans22m" value="Parents car">
		        <label for="parentscar">Parents' car</label></p>
		        <p><input type="radio" id="privatevan" name="trans22m" value="Private van">
		        <label for="privatevan">Private van</label></p>
		        <p><input type="radio" id="skul-bus" name="trans22m" value="School bus">
		        <label for="skul-bus">School bus</label></p>
		        <p><input type="radio" id="uber" name="trans22m" value="Uber">
		        <label for="uber">Uber</label></p>
		        <p><input type="radio" id="others" name="trans22m" value="Others">
		        <label for="others">Others</label></p>
		        </div>
		        <h4>Evening</h4>
		        <div id="evening">
				<p><input type="radio" id="parentscar" name="trans22e" value="Parents car">
		        <label for="parentscar">Parents' car</label></p>
		        <p><input type="radio" id="privatevan" name="trans22e" value="Private van">
		        <label for="privatevan">Private van</label></p>
		        <p><input type="radio" id="skul-bus" name="trans22e" value="School bus">
		        <label for="skul-bus">School bus</label></p>
		        <p><input type="radio" id="uber" name="trans22e" value="Uber">
		        <label for="uber">Uber</label></p>
		        <p><input type="radio" id="others" name="trans22e" value="Others">
		        <label for="others">Others</label></p>
		        </div>
		</div>

		<div id="transport-mode-23">
			<h3>What will your transport arrangement be in 2023?</h3>
			<p><input type="radio" id="skul-bus" name="trans23" value="School bus">
        	<label for="skul-bus">School bus</label></p>
        	<p><input type="radio" id="other" name="trans23" value="Other">
        	<label for="other">Other</label></p>
        </div>

        <div class="skul-transport">
        	<h3>When will your son be using the school bus?</h3>
        	<p><input type="radio" id="mornin" name="schooltrans23" value="Morning">
        	<label for="mornin">Morning</label></p>
        	<p><input type="radio" id="evenin" name="schooltrans23" value="Evening">
        	<label for="evening">Evening</label></p>
        	<p><input type="radio" id="morneven" name="schooltrans23" value="Morning and evening">
        	<label for="morneven">Morning and evening</label></p>
        </div>

        	<h3>Home location</h3>
			<p><label for="">Address: <input id="map-search" class="controls" type="text" placeholder="Search Box" size="104" name="address"></label><br></p>
			<p><label for="">Lat: <input type="text" class="latitude" name="lat"></label></p>
			<p><label for="">Long: <input type="text" class="longitude" name="long"></label></p>
			<p><label for="">City <input type="text" class="reg-input-city" placeholder="Nairobi" name="city"></label></p>
        	<button type="submit" class="submitbtn">Submit responses</button>


        </form>

			<div id="map-canvas"></div>
			<script src="javascript.js"></script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUreq_OkxQf4414wJaolon_xlqfxacUCo&libraries=places&callback=initialize"></script>

</body>
</html>