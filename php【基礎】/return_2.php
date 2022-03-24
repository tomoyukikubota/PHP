<?php

// function sum($a, $b, $c)
// {
//   return $a + $b + $c;
// }

$sum = function ($a, $b, $c) { //無名関数
  return $a + $b + $c;
};

echo $sum(100, 400, 600) . PHP_EOL;

//条件演算子

function num($d, $e, $f)
{
  $total = $d + $e + $f;
  return $total < 0 ? 0 : $total; //true : false
}

echo num(100, 300, 500) . PHP_EOL;
echo num(-1000, 300, 500) . PHP_EOL;