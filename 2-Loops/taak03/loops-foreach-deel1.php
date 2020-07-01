<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<script src=""></script>
	<title></title>
</head>
<body>

	<?php 
		$dagen = array("maandag", "dinsadg", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");
		echo "<ul>";
		foreach ($dagen as $value){
			echo "<li>$value</li>";
		}
		echo "</ul>";

	?>

</body>
</html>