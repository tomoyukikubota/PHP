<?php

//テスト問題条件式

$score = 1;

//スコアが100点の場合のみ出力

if ($score == 100) {

	echo "満点おめでとう！";

//80点以上の場合

} elseif ($score >= 80) {

	echo "高得点よくできました！";

//60点以上の場合

} elseif ($score >= 60) {

	echo "合格しています！";

//全ての条件に一致しない場合

} else {

	echo "赤点、後日再テストです。";

}

?>