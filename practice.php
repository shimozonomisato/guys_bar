<?php
//rand()を使い、配列に10個のランダムな数字をいれて一覧を表示

for($a=1; $a<=10; $a++){
	$hoge[$a] = rand(1,100);
	
}
foreach($hoge as $val){
		print $val."<br>";
}

print_r($hoge);