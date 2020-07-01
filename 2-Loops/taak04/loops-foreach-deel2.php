<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<script src=""></script>
	<title></title>
</head>
<body>
	
	<?php 
		$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
		echo "<form><button>verzend</button></form>";



		echo "<select>";
		foreach($klassen as $value){
			echo "<option>$value</option><br>";
		}
		echo "</select>";

		
		echo "<ul>";
		foreach($klassen as $value1){
			echo "<li>$value1</li><br>";
		}
		echo "</ul>";
	?>

</body>
</html>