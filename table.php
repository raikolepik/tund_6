﻿<?php  
    require_once("functions.php");
    
    // kõik autod objektide kujul massiivis
    $car_array = getAllData();
?>

<h1>Tabel</h1>
<table border = 1>
<tr>
	<th>ID</th>
	<th>Kasutaja ID</th>
	<th>Auto numbrimärk</th>
	<th>Värv</th>
	<th>Kustuta</th>
	
</tr>
<?php 
    
    // autod 	ükshaaval läbi käia
	
		for($i = 0; $i < count($car_array); $i++){
			echo "<tr>";
			echo "<td>".$car_array[$i]->id."</td>";
			echo "<td>".$car_array[$i]->user_id."</td>";
			echo "<td>".$car_array[$i]->number_plate."</td>";
			echo "<td>".$car_array[$i]->color."</td>";
			echo "<td><a href= '?delete=".$car_array[$i]->id."'>X</a></td>";
			echo "</tr>";
    }
    
?>
</table>