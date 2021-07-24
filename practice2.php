<?php
$name="tsuruta";

if($name="tsuruta") {
    echo "私は あなたの名前 です";
}else{
    echo "あなたの名前ではありません";
}
echo "\n";

$total = 0; 

for($i = 1; $i <= 10000; $i++) {
    $total = $total + $i;
}

echo $total;

echo "\n";

$fruits=array("apple","orange","banana","lemon","grape");
foreach($fruits as $fruit) {
    echo "". $fruit;
    echo "\n";
}

echo "\n";

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}