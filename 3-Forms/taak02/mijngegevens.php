<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		echo "Voornaam is: " . $_POST["voornaam"] . "<br>";
		echo "Achternaam is: " . $_POST["achternaam"] . "<br>";
		echo "Klas is: " . $_POST["klas"] . "<br>";
		echo "Leeftijd is: " . $_POST["leeftijd"] . "<br>";
		echo "Adres is: " . $_POST["adres"] . "<br>";
		echo "Plaatsnaam is: " . $_POST["plaatsnaam"] . "<br>";
		echo "Favoriete muziekband is: " . $_POST["favoriete_muziekband"] . "<br>";
		echo "Geslacht is: " . $_POST["geslacht"] . "<br>";
		echo "Lievelingskleur is: " . $_POST["color"] . "<br>";

		$kleur = $_POST["color"];
		echo "<body style='background-color:$kleur'>";

	?>

</body>
</html>