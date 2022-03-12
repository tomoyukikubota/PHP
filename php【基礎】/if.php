<?php

//ifのみ

$a = 10;

if ($a == 10) {
  print '$aの値は10です';
}
//if~else

$b = 5;

if ($b == 10) {
  
  print '$bの値は10です';

} else {

  print '$bは5以外です';
}

//if~elseif~else

$c = 20;

if ($c == 10) {

  print '$cは10です';

} elseif ($c == 20) {

  print '$cは20です';

} else {

  print '$cの値は10と20以外です';

}

//入れ子if

$d = 10;

if ($d > 5) {

  if ($d == 8) {

    print '$dの値は8です';

  } else {

    print '$dは5よりも大きく、8以外です';
  }

} else {

  print '$dは5よりも小さいです';
}

//三項演算子

$e = 1000;

$f = ($e > 500)? "true" : "✖false";

  print $f;
?>
