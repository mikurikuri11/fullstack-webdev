<?php

$arry = [
  'name' => 'Bob',
  'age' => 12,
  'sports' => ['baseball', 'swimming']
];

$arry['age'] += 24;

echo $arry['name'];
echo $arry['age'];
echo $arry['sports'][1];
