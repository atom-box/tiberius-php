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


///////////////////////////////////////////////////
echo("//////////////////////////////\n");

// Given a string, return true if the first instance of "x" in the string is immediately followed by another "x".

function doubleX($s){
    $WANTED = 'x';
    $firstFound = strpos($s, $WANTED);
    $successOne = is_int($firstFound);
    if ($successOne){
        // echo('found first x');
        $successTwo = $WANTED === substr($s, $firstFound + 1, 1);
        $overallSuccess = $successOne && $successTwo;
        
        return $overallSuccess ? "yay\n": "boo\n" ;
    }
    return "false\n";
}

echo(doubleX("xx")); // true
echo(doubleX("axxbb")); // true
echo(doubleX("xxxxx")); // true
echo(doubleX("axaxax")); // false
echo(doubleX("Louis Capella")); // false
echo(doubleX("3 Mr. DiMartino's children")); // false
echo(doubleX("x")); // false
echo(doubleX("XX")); // ???

echo("////////////////////////////////////////\n");

/*
Given a string, return a new string made of 
every other char starting with the first, so "Hello" yields "Hlo".
*/

interface WarmupTools {
    public function stringBits(string $s) : string;
}

class SolutionTools implements WarmupTools {

    public function stringBits(string $s) : string {
        $allChars = [];
        $oddifiedString = '';
        $allChars = str_split($s, 1);
         for($i = 0; $i < count($allChars); $i++){
            if(   !($i % 2)){
                $oddifiedString .= $allChars[$i];
            }
        }
        return "$oddifiedString\n";
    }
}

$solver3 = new SolutionTools();

echo("Oddified ". $solver3->stringBits("Hello")); // "Hlo"
echo("Oddified ". $solver3->stringBits("Hi")); // "H"
echo("Oddified ". $solver3->stringBits("Heeololeo")); // "Hello"