<?php
$num = 0;
counter(2);
counter(4);
counter(6);
counter(12);

function counter($step = 1) {
    global $num;
    $num += $step;
    echo $num;
    echo "<br/>";
    return $num;
}
