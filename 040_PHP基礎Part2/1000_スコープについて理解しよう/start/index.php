<?php

$_SERVER;
$a = 0;
// echo $a;
function fn1() {
  $b = 1;
};

function fn2() {
  global $a;
  var_dump($_SERVER);
  $b = 2;
  echo $a;
};

fn2();
