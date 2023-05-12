<?php

$value1 = isset($_POST['value1']) ? $_POST['value1'] : 0;
$value2 = isset($_POST['value2']) ? $_POST['value2'] : 0;
$operator = isset($_POST['operator']) ? $_POST['operator'] : '';

$hasil = '';

switch ($operator) {
  case '+':
    $hasil = $value1 + $value2;
    break;
  case '-':
    $hasil = $value1 - $value2;
    break;
  case '*':
    $hasil = $value1 * $value2;
    break;
  case '/':
    $hasil = $value1 / $value2;
    break;
  case '%':
    $hasil = $value1 % $value2;
    break;
  default:
    $hasil = '';
}

echo $hasil !== '' ? "Hasil $value1 $operator $value2 adalah $hasil" : '';
