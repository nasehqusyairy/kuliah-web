<?php
function operasiaritmatika($a, $b, $c, $d, $e)
{
  echo "a =  $a <br>";
  echo "b =  $b <br>";
  echo "c =  $c <br>";
  echo "d =  $d <br>";
  echo "e =  $e <br>";

  echo "<br>";

  $total = (($a + $b) / ($c * $d)) - $e;
  echo "((a + b) / (c * d)) - e = $total";
}
operasiaritmatika(2, 6, 4, 4, 2);
