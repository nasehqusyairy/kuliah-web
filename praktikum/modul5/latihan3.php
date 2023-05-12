<?php
function get_max(...$number)
{
  $max = max($number);
  echo "Output: " . $max . "<br>";
}
echo get_max(10, 20);

echo get_max(10, 20, 30);

echo get_max(10, 20, 30, 40);
