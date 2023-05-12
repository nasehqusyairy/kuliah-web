<?php
function pangkat($n, $i)
{
    if ($i == 0) {
        return 1;
    } elseif ($i == 1) {
        return $n;
    } else {
        return $n * pangkat($n, $i - 1);
    }
}
echo pangkat(3, 3);
