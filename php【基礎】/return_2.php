<?php

// function sum($a, $b, $c)
// {
//   return $a + $b + $c;
// }

$sum = function ($a, $b, $c) { //無名関数
  return $a + $b + $c;
};

echo $sum(100, 400, 600) . PHP_EOL;