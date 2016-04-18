<table border="1">
<?php
$data = array(1,2,3,4,5,6,7,8,9);
for($a=1; $a <= count($data); $a++){
	echo"<tr><td>".$a."</td></tr><tr>";
	for($i = 1; $i <= count($data); $i++){
		echo "<td>".($i * $a)."</td>";
	}
	echo"</tr>";
	// echo"<br>";
}
?>
</table>