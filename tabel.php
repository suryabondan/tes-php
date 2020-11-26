<?php
echo "<table style='border-collapse: collapse;'>";
for ($i=0; $i < 8; $i++) { 
	echo "<tr>";
	for ($j=0; $j < 8; $j++) { 
		$nm = ($i*8)+($j+1);
		if($j==3 || $j==7 || $nm%3 == 0){
			$st = "background:white;color:black;";
		}else{
			$st = "background:black;color:white;";
		}
		
		echo "<td style='border: 1px solid black; width: 40px; height: 40px;".$st."'>".$nm."</td>";
	}

	echo "</tr>";
}
echo "</table>";
?>