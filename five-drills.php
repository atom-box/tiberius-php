<?php

// Given a string and a non-negative int n, we'll say that the front of the string is the first 3 chars, or whatever is there if the string is less than length 3. Return n copies of the front;

function frontTimes($inString, $n){
    $outString = '';
    while($n){
        $outString .= substr($inString, 0, 3);
        $n -= 1;
    }
    $outString .= "\n";
    return $outString;
}

echo(frontTimes("Chocolate", 2)); // "ChoCho"
echo(frontTimes("Chocolate", 3)); // "ChoChoCho"
echo(frontTimes("Abc", 3)); // "AbcAbcAbc"