<?php

$moreScores = [
  55,
  72,
  'pe',
  [90, 42, 88],
  ];
$scores = [
  90,
  40,
  ...$moreScores, //配列の中に配列を入れるときは前に「...」
  100,
];

// print_r ($scores) . PHP_EOL;

echo $scores[5][2] . PHP_EOL;
