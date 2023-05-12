<?php
function fibo($n)
{
    if ($n == 0 || $n == 1) {
        return $n;
    } else {
        return (fibo($n - 1) + fibo($n - 2));
    }
}
echo fibo(0) . '<br>';
echo fibo(1) . '<br>';
echo fibo(2) . '<br>';
echo fibo(3) . '<br>';
echo fibo(4) . '<br>';
echo fibo(5) . '<br>';
echo fibo(6) . '<br>';
echo fibo(7) . '<br>';
echo fibo(8) . '<br>';
