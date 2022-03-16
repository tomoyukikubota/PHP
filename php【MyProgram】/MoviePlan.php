<?php

//映画料金プログラム

define ("TAX" , 1.08);

//職業
$customer = $argv[1];

//日付
$date = $argv[2];

//性別
$sex = $argv[3];

//上映時間
$time = $argv[4];

//3D
$threeD = $argv[5];


//基本料金

if($customer == "一般人"){
  $moviePrice = 1800;

}elseif($customer == "大学生"){
  $moviePrice = 1500;

}elseif($customer == "高校生"){
  $moviePrice = 1200;

}elseif($customer == "小中学生"){
  $moviePrice = 1000;

}elseif($customer == "小学生未満"){
  $moviePrice = 500;

}

//特別料金プラン

//1日の場合
if($date == "1日" && $moviePrice > 1000){
  $moviePrice = 1000;
}
//レイトショー
if($time >= "21時" && $moviePrice > 1500){
  $moviePrice = 1500;
}
//女性の場合
if($sex == "女" && $moviePrice > 1200){
  $moviePrice = 1200;
}
//3dショ-
if($threeD == 1){
  $moviePrice += 400;
}
  echo "映画料金は".$moviePrice*TAX."円です";
