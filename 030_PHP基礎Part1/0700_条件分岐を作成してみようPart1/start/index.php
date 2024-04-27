<?php

$score = 70;
$absence_count = 4;

if ($absence_count >= 5 || $score < 50) {
    echo '不合格';
} elseif ($score < 70) {
  echo '合格';
} else {
  echo '秀';
}
