<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<script src=""></script>
	<title></title>
</head>
<body>

	<?php 

	$klassen = array(
		$student  = array("voornaam"=>"Jan", "achternaam"=>"Janssen", "klas"=>"9A", "Leeftijd"=>17, "Woonplaats"=>"Amstelveen")
	);

	echo "<table style='border: 1px solid black;'>";
	foreach ($student as $key => $value) {
		echo 	"<tr><td style='border: 1px solid black;'>$key</td> 
				 <td style='border: 1px solid black;'>$value</td>
				 </tr><br>";
	}
	echo "</table>";

	?>

</body>
</html>