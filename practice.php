<table border="1">
<?php
for($a = 1; $a <=9; $a++){
	if($a % 2 == 0){
	echo "<tr>";
	for ($i = 1; $i <= 9; $i++){
		$ans = $a * $i;
		echo "<td>".$a.'×'. $i.'='.$ans."</td>";
	}
	}else{
		echo "";
	}
	echo "</tr>";
}
?>
</table>