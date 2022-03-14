<?php

//while文

$a = 0;

while ($a < 5) {
  print '$aの値は'.$a.'です';
  $a++;
}

$a = 1;

// この条件式は無限ループ
while (true) {

  // $aが10より大きい時に、処理を抜ける。
  if ($a > 10) {
      break;
  }

  // $aを2で割って余りがない時に表示
  if ($a % 2 == 0) {
      print '値は'.$a.'です';
  }

  $a++;
}

//do~while文で条件が合わなくとも1度は実行する

$a = 1;
  do {
      print "実行".$a."回目";
      $a++;
  } while ($a > 10);
?>