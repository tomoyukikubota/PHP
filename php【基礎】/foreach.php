<?php

//foreach ($array as $value) {処理}
//foreach ($array as $key => $value) {処理}

$subject = array(
  "Japanese" => "国語",
  "math" => "数学",
  "science" => "理科",
  "music" => "音楽");

foreach ($subject as $key => $name) {
  print $key."は".$name."です";
}

// $num = 1;

// $subject = array("国語","数学","理科","音楽");
// while ($num <= 6) {
//   foreach ($subject as $name) {
    
//     print $num."時間目は".$name."です";
//   }
//   $num++;
// }


?>