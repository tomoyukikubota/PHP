<?php

//配列
$a = array(100, 200, 300);

array_push($a, 10, 20); //array関数(追加)

 print_r ($a); //print_r関数(配列の中身を表示)

$b = array(4 => 400, 5 => 500, 6 => 600);

 print_r ($b);
 
 $c[] = 700;
 $c[] = 800;
 $c[] = 900;
  print_r ($c);

//連想配列
$d = array("one" => 1, "two" => 2, "three" => 3);
 print_r ($d);


$e = array(100, 200, "ONE" => 1, "PHP" => "勉強中");
 print_r ($e);

unset($e["ONE"]); //unset関数(削除)
 print_r ($e);

?>
