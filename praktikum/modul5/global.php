<?php
$a = 2;
function add()
{
  global $a;
  $a += 3;
}
add();
echo $a;
