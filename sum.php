<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function sum($max) {
    $result = 0;
    for ($i= 1; $i<= $max; $i++){
        $result += $i;
    }
    return $result*2;
}
echo sum(50)."\n";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
$a = 3;
$b = 7;
    function add($a,$b){
    return $a + $b;
 }
  echo add($a,$b)."\n";
  
//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください 
  $arr = array (1,3,5,7,9);
  echo "product(arr)=" .array_product($arr)."\n";

//4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
     $max_number = $arr[0];
     foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a;
      }
     }
     return $max_number;
    }
echo max_array([5, 2, 3, 9, 7])."\n";

//5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

//strip_tags
//array_push
//array_merge
//time, mktime
//date

//strip_tags
$contents = "<b>sample</b>";
$contents = strip_tags($contents);
echo $contents."\n";

//array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "peach");
print_r($stack)."\n";

//array_merge
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array =array_merge($array1,$array2,$array3);
print_r($array)."\n";


//time, mktime
echo 'now'.time();

$timestamp=mktime(0,0,0,1,8,2020);
echo $timestamp."\n";

//date
date_default_timezone_set('UTC');
echo date("l");

?>
