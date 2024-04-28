<?php
$arry = ['taro', 'hanako', 'jiro'];
$arry[] = 'saburo';

// print_r($arry);

// $arry[1] = 'sachiko';

// echo $arry[1];

// var_dump($arry);

// for ($i = 0 ; $i < count($arry); $i++) {
//   echo '<div>', $arry[$i], '</div>';
// };

foreach ($arry as $i => $v) {
  echo '<div>', $i, $v, '</div>';
};

