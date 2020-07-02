<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<script src=""></script>
	<title></title>
</head>
<body>


<form name="invoerformulier" action="advanced-2.php" method="post">
    <?php 
        $kleuren = array("red", "blue", "green", "black", "brown");
        
        echo "tabelranddikte (px): <input type='number' name='tabelranddikte'><BR>";

        echo "cel-padding (px): <input type='number' name='cel-padding'><BR>";

        echo "achtergrondkleur: <select name='achtergrondkleur'>";
        foreach($kleuren as $value){
           echo "<option>$value</option>";
        }
        echo "</select><BR>";

        echo "tekstkleur: <select name='tekstkleur'>";
        foreach($kleuren as $value){
           echo "<option>$value</option>";
        }
        echo "</select><BR>";


        echo "<input type='submit' name='submit' value='verstuur'><br>";

	?>
</form>

</body>
</html>