<?php

// function showAd()
// {
//   echo '----------' . PHP_EOL;
// }

// showAd();
// echo 'ようこそ' . PHP_EOL;
// showAd();
// echo '私の名前は智之です' . PHP_EOL;
// showAd();
// echo 'ありがとうございました' . PHP_EOL;

function showAd($message) //仮引数
{
  echo '---' . $message . '---' . PHP_EOL;
}

showAd('Header'); //実引数
echo 'ようこそ' . PHP_EOL;
showAd('Main');
echo '私の名前は智之です' . PHP_EOL;
showAd('Footer');
echo 'ありがとうございました' . PHP_EOL;
