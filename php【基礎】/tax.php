<?php

define("TAX",1.08); //定数を定義することができるのは、define関数 のみ("TAX"定数に1.08(値)を代入)

$price = 300;

$pretax_price = $price*TAX;

$unit = "円";

  print "税込みは" . $pretax_price . $unit . "です";


?>
