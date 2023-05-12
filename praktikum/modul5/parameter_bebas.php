<?php
function sum()
{
  if (func_num_args() == 0) {
    return false;
  } else {
    $sum = 0;
    foreach (func_get_args() as $arg) {
      $sum += $arg;
    }
    return $sum;
  }
}
echo sum(1, 2, 3);
echo sum(2, 8);
echo sum(15);
