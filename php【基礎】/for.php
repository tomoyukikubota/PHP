<?php

//for文

for ($i = 0; $i <= 3; $i++) {
  print "値は$i";
}

//2重ループ

for ($a = 0; $a <= 3; $a++) {
  print '$aの値は' . $a . 'です';

  for ($i = 0; $i <= 3; $i++) {
    print '$iの値は' . $i . 'です';
  }

}

?>