<?php
echo "test1";
echo "<br>";
echo "<br>";
for ($i = 1; $i <= 9; $i++){
	echo $i;
}


echo "<br>";
echo "<br>";
for ($i = 1; $i <= 9; $i++){
	$ans = 1 * $i;
	echo '1×'. $i.'='.$ans.'/';
}


echo "<br>";
echo "<br>";
for($a = 1; $a <=9; $a++){
	for ($i = 1; $i <= 9; $i++){
		$ans = $a * $i;
		echo $a.'×'. $i.'='.$ans.'/';
	}
}