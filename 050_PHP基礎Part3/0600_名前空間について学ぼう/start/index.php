<?php

require_once 'lib.php';
use function lib\with_tax;
use const \lib\TAX_RATE;

$price = with_tax(1000, 0.08);
// $price = \lib\with_tax(1000, 0.08);
echo $price;
echo "<br/>";
echo TAX_RATE;
// echo \lib\TAX_RATE;

function my_echo() {
  echo "hello";
}

class GlobalCls {

}