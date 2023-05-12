<?php
function add()
{
  static $a = 0;
  $a += 3;
  echo "$a\n";
}
add();
add();
add();
