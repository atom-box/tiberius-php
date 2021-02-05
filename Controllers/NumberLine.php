<?php

interface checks {
    public function gapSame(int $a, int $b, int $c): string;
    public function notAlone(array $a, int $n): string; 
}

class NumberLine implements checks {
    public function gapSame(int $a, int $b, int $c): string{
        $sorted = [$a, $b, $c];
        sort($sorted);
        $small = $sorted[0];
        $medium = $sorted[1];
        $large = $sorted[2];
        if ($small - $medium === $medium - $large){
            return 'toot your lanyard';
        }
        
        return 'it\'s nahhht Scottish';
    }

    public function notAlone(array $a, int $n): string{
        // some code here
        // var_dump($a);

        $joined = implode(' ', $a);
        return $joined;
    }
}

$tool = new Numberline();

echo "\n".$tool->gapSame(2, 4, 6); // true
echo "\n".$tool->gapSame(4, 6, 2); // true
echo "\n".$tool->gapSame(4, 6, 3); // false
echo "\n\n";


echo "\n".$tool->notAlone([1, 2, 3], 2)."\n"; // [1, 3, 3]
echo "\n".$tool->notAlone([1, 2, 3, 2, 5, 2], 2)."\n"; // [1, 3, 3, 5, 5, 2]
echo "\n".$tool->notAlone([3, 4], 3)."\n"; // [3, 4]

/*
GAPSAME FUNCTION
Given three ints, a b c, one of them is small, one is medium and one is large. 
Return true if the three values are evenly spaced, so the difference between 
small and medium is the same as the difference between medium and large.
*/

/**
 NOTALONE FUNCTION
 *We'll say that an element in an array is "alone" if there are values
  before and after it, and those values are different from it. Return 
  a version of the given array where every instance of the given value 
  which is alone is replaced by whichever value to its left or right \
  is larger.


 */