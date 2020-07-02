<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<script src=""></script>
	<title></title>
</head>
<body>

	<?php 
    
        $gegevens = array(
            "naam" => "Stijn Heemskerk",
            "leeftijd" => "20",
            "muzieksmaak" => "J-pop",
            "woonplaats" => "Amstelveen"
        );
        
        $tableWidth = $_POST["tabelranddikte"] . "px";
        $celPadding = $_POST["cel-padding"] . "px";
        $backCol = $_POST["achtergrondkleur"];
        $textCol = $_POST["tekstkleur"];

        echo "<table style='width: $tableWidth; padding: $celPadding; background-color: $backCol; color: $textCol;'>";
        foreach($gegevens as $key => $value){
           maakRij($key, $value);
                // echo "<tr><td style='border: 1px solid black;'>$key</td><td style='border: 1px solid black;'>$value</td></tr><BR>";
        }
        echo "</table>";

        function maakRij($var1, $var2){
            
            echo "<tr><td style='border: 1px solid black;'>$var1</td>";
            echo "<td style='border: 1px solid black;'>$var2</td></tr><BR>";

        }

	?>

</body>
</html>