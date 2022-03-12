<?php

//switch文

$a = 100;

switch ($a) {
  case 100:
    print "値は100です";
    break; //breakに到達すると、switchブロックを抜ける

  case 200:
    print "値は200です";
    break;

  case 300:
    print "値は300です";
    break;

  default:
    print "値は100・200・300以外です";
    break;
}

$b = 5;

switch ($b) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:
    print "値は1~5です";
    break;

  case 6:
  case 7:
  case 8:
  case 9:
  case 10:
    print "値は6~10です";
    break;

  default:
    print "値は1~10以外です";
    break;
}

?>