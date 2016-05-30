<?php
//rand()を使い、配列に10個のランダムな数字をいれて一覧を表示
//そのあと、それを小さい順に並べ替えて表示する。バブルソートっていうのをやってみる

//↓function,わからない、(&$)参照渡し？
function bubble_sort(&$array){
  $count = count($array);

  for ($n = $count - 1; $n > 0; $n--) {
  	// $n はソートの最大数。回を追うごとに残り回数が減って行く

    for ($i = 0; $i < $n; $i++) {
    // $i は処理中の場所

      if ($array[$i] > $array[$i+1]) {
      // ポインタの数値がポインタ右側より大きければ

      	//入れ替え。例えば$array[$i]の中身5,$array[$i+1]の中身2の時、
      	//2の方が小さいので箱を入れ替えたい時、5を2が移動する間、$tempの箱に入れとく
      	//そのあと取り出して$array[$i+1]に入れる。
      	$temp = $array[$i];
      	//↑5を$array[$i]から取り出して$tempに入れる
        $array[$i]   = $array[$i+1];
        //↑2を$array[$i+1]から出して$array[$i]に入れる
		$array[$i+1] = $temp;
		//↑5を$tempから出して$array[$i+1]に入れる

        //function irekae($array[$i] ,$array[$i+1]);

      }
    }
  }
}

//function send_twitter($message){
	    //twitter();
	    //facebook();
//}


for($a=1; $a<=10; $a++){
	$hoge[$a] = rand(1,100);
	
}
foreach($hoge as $val){
		print $val."<br>";
}

print_r($hoge);
bubble_sort($hoge);

echo("result:");
print_r($hoge);
