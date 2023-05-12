<?php
function concat($string1, $string2)
{
  return $string1 . $string2;
}
$str1 = 'FILKOM';
$str2 = ' UB';
$str3 = concat($str1, $str2);
echo concat($str2, $str3);
