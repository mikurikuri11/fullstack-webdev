<?php

$price = 1000;

function with_tax($price, $tax_rate = 0.1) {
  $sum_price = $price + ($price * $tax_rate);
  $sum_price = round($sum_price);
  return $sum_price;
};

$result = with_tax($price);
echo $result;

