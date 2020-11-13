<?php
$name = "福田晃生" ;
if ($name != "福田晃生") {
    echo "福田晃生ではありません";
} else  {
    echo "私は福田晃生です";
}
$total = 0;
for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
$fruits = array("apple", "cherry","pineapple","pear","peach");
foreach($fruits as $fruit){
    echo $fruit.PHP_EOL;
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}