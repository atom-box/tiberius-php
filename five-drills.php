<html>
    <head>
        <title>Hello</title>
        <style>
        body {
            color: dodgerblue;
            background-color: darkblue;
            font-family: monospace;
            font-size: 3em;
        }
        </style>
    </head>
    <body>
<h1><i>Challenges</i></h1>
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


echo("//////////2 2 2 2////////////////\n");

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

echo("/////////////3 3 3 3///////////////////\n");

/*
Given a string, return a new string made of 
every other char starting with the first, so "Hello" yields "Hlo".
*/

interface WarmupTools {
    public function stringBits(string $s) : string;
    public function arrayFront9(array $nums): string;
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
    
    public function arrayFront9(array $nums): string{
        for($i = 0; $i < count($nums); $i++ ){
            if (3 >= $i && 9 === $nums[$i]){
                return 'true.';
            }
        }            
        return 'false.';
    }
}


$solver3 = new SolutionTools();

echo("Oddified ". $solver3->stringBits("Hello")); // "Hlo"
echo("Oddified ". $solver3->stringBits("Hi")); // "H"
echo("Oddified ". $solver3->stringBits("Heeololeo")); // "Hello"


echo("/////////////4 4 4 4///////////////////\n");
/*
_           
(_)          
_ __ ___  ___ _   _ _ __ ___ ___   _____ 
| '__/ _ \/ __| | | | '__/ __| \ \ / / _ \
| | |  __/ (__| |_| | |  \__ \ |\ V /  __/
|_|  \___|\___|\__,_|_|  |___/_| \_/ \___|

We have triangle made of blocks. The topmost row has 1 block, 
the next row down has 2 blocks, the next row has 3 blocks, and 
so on. Compute recursively (no loops or multiplication) the total 
number of blocks in such a triangle with the given number of rows.

CAVEAT: I'm not sure how to call recursively when this is moved up into an interface and inside of a class.  Am moving on.
*/

// $solver4 = new SolutionTools();
function triangle(int $n): int{
    if (0 === $n){
        return 0;
    }
    if (1 === $n){
        return 1;
    }
    $thisLevel = $n;
    $n -= 1;
    return $thisLevel + triangle($n);
}

echo(triangle(0)."\n"); // 0  
echo(triangle(1)."\n"); // 1
echo(triangle(2)."\n"); // 3 

echo("/////////////////5 5 5 5//////////////\n");

// Given an array of ints, return true if one of the first 4 elements in 
// the array is a 9. The array length may be less than 4.

$solver5 = new SolutionTools();


echo($solver5->arrayFront9([9])."\n"); // true
echo($solver5->arrayFront9([-9, 9, 9, 3, 4])."\n"); // true
echo($solver5->arrayFront9([1, 2, 9, 3, 4])."\n"); // true
echo($solver5->arrayFront9([1, -9, 3, 4, 9])."\n"); // false
echo($solver5->arrayFront9([1])."\n"); // false
echo($solver5->arrayFront9([])."\n"); // false

?>

</body>
        
</html>
