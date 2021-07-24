<?php

function duble($a){
    $a = $a * 2;
    return $a;
}

echo duble(2);

echo "\n";

function add($a, $b){
 //処理したい内容
    $result = $a + $b;
    return $result;
 }
 
 echo add(2, 3);
 
 echo "\n";
 
 function kakeru($arr){
    $result = 1;
    foreach($arr as $ar){
        $result *= $ar;
    }
    return $result;
 }
 
 echo kakeru(array(1, 3, 5 ,7, 9));
 
 echo "\n";

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if($max_number < $a){
        $max_number = $a;
    }elseif($max_number > $a){
        $max_number;
    }
 }

 return $max_number;
 }
 
echo max_array([5,2,3,9,10]);
