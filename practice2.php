<?php
$name = "ryosuke";
if ($name = ryosuke) {
  echo "私は あなたの名前 です"."\n";
} else {
  echo "私は あなたの名前 ではありません"."\n";
}

$total = 1;
for ($i = 1; $i <=10000; $i++) {
  $total += $i;
}
echo $total."\n";

$fruits = array("apple", "peach", "orange", "peal", "strawberry");
foreach($fruits as $fruits){
  echo "要素は" . $fruits;
  echo "\n";
}

$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){
  // 5で割り切れたら{}内を実行する
    if($i % 5 === 0){
      echo $i."\n";
  }
  else if($i %5 !== 0){
  }
}
?>
