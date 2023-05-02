<?php

/*
 * Complete the 'fizzBuzz' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function fizzBuzz($n) {
    // Write your code here
    for ($c=1; $c<=15; $c++){
        $msg = strval($n);
        if ($n %3 == 0){
            $msg = "Fizz";
        } else {
            $msg = $n;
            echo "$msg";
        }
        if ($n %5 == 0){
            $msg = "Buzz";
        } else {
            $msg = $n;
            echo "$msg";
        }
        if ($n %3 == 0 && $n % 5 == 0){
            $msg = "FizzBuzz";
        } else {
            $msg = $n;
            echo "$msg";
        }
    
    }
    
}

$n = intval(trim(fgets(STDIN)));

fizzBuzz($n);