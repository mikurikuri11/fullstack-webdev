<?php

$arry = [
  ['table', 1000],
  ['chair', 100],
  ['bed', 1000],
  ['bed', 1000],
  ['bed', 1000],
];

// $arry[1][1] = 500;
// array_shift($arry);
// array_pop($arry);
array_splice($arry, 2, 2);

foreach($arry as $val) {
  echo "{$val[0]}は{$val[1]}円です。";
  // print_r($val)
;}