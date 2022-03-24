<?php
$rate =1.1; //関数の外全て有効（グローバルスコープ）

function sum($a, $b, $c)
{
  $rate = 1.08; //関数内だけで有効（ローカルスコープ）
  return ($a + $b + $c) * $rate;
}

echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL;