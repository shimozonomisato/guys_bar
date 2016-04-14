<table border="1" >
<?php
for($a = 1; $a <=9; $a++){
	echo "<tr>";
	for ($i = 1; $i <= 9; $i++){
		$ans = $a * $i;
		if($ans % 2 == 1){
			echo "<td width=150 height=30 align=center>".$a.'×'. $i.'='.$ans."</td>";
		}else{
			echo "<td width=150 height=30>".$nbsp."</td>";
		}
	}
	echo "</tr>";	
}
?>
</table>