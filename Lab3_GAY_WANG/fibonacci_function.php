<?php

/*
 * Please declare/define and use a Fibonacci function that has one optional parameter to determine
 * the number of numbers to be included in the Fibonacci sequence.
 */

function fibo($n = 0) {
    $result = 1;
    if ($n == 0)
        return 0;
    else if ($n == 1 || $n == 2)
        return 1;
    else {
        $i = 2;
        $previous = 1;
        for (; $i < $n; ++$i) {
            $temp = $result;
            $result += $previous;
            $previous = $temp;
        }
    }
    return $result;
}

echo fibo(10);