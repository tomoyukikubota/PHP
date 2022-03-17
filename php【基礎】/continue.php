<?php

//continue文

for ($i = 1; $i <= 10; $i++) {
  if ($i == 4) { //4だけスキップ
    continue; //スキップ
  }
  echo $i . PHP_EOL;
}

for ($i = 1; $i <= 10; $i++) {
  if ($i % 3 == 0) { //3の倍数はスキップ
    continue; //スキップ
  }
  echo $i . PHP_EOL;
}

//break文

for ($i = 1; $i <= 10; $i++) {
  if ($i == 4) {
    break; //ループを抜ける
  }
  echo $i . PHP_EOL;
}