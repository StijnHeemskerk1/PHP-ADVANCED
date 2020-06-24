<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<script src=""></script>
	<title></title>
</head>
<body>

	<?php 
		$Piet = array(
			"voornaam" => "Piet",
			"achternaam" => "Dijk",
			"leeftijd" => "23",
			"klas" => "9T"
		);
		$Mohammed = array(
			"voornaam"=>"Mohammed",
			"achternaam"=>"Ali",
			"leeftijd"=>"17",
			"klas"=>"9G"
		);
		$Els = array(
			"voornaam" => "Els",
			"achternaam" => "Boom",
			"leeftijd" => "19",
			"klas" => "9G"
		);

		echo "Gegevens Mohammed:<br>Voornaam: "	. $Mohammed["voornaam"] . "<br>Achternaam: " . $Mohammed["achternaam"] . "<br>Leeftijd: " . $Mohammed["leeftijd"] . "<br>Klas: " . $Mohammed["klas"];


	?>

</body>
</html>