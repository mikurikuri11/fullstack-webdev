<?php


$numbers = [1, 2, 3, 4];
$numbers2 = [1, 2, 3, ];

function sum_numbers($numbers) {
  $sum = 0;
  foreach($numbers as $number) {
    $sum += $number;
  };
  return $sum;
};

$result = sum_numbers($numbers);
echo $result;
