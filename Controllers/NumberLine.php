<?php

interface checks {
    public function gapSame(): string;
    public function notAlone(): string; 
}

class NumberLine implements checks {
    function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function gapSame(): string{
        if (count($this->numbers) !== 3){
            die('ERROR: gapSame function requires the array must have three numbers.');
        }

        $sorted = $this->numbers;
        sort($sorted);
        $small = $sorted[0];
        $medium = $sorted[1];
        $large = $sorted[2];
        if ($small - $medium === $medium - $large){
            return 'toot your lanyard';
        }
        
        return 'it\'s nahhht Scottish';
    }
    
        protected function isAlone($i): bool{
            return true;
        } 
        protected function getHighestNeighbor($i): int{
            return 33;
        }

    public function notAlone(): string{
        // some code here
        // var_dump($a);
        $fixed = [];
        $last = count($this->numbers) - 1;
        foreach($this->numbers as $i => $member){
            if($i === 0 || $i === $last){
                $fixed[] = $member;
                continue;
            }
            if($this->isAlone($member)){
                $fixed[] = $this->getHighestNeighbor($i);
            }
        }
        $joined = implode(' ', $fixed);
        return $joined;
    }

}

$tool = new Numberline([2, 4, 6]);
echo "\n".$tool->gapSame(); // true
$tool = new Numberline([4, 6, 2]);
echo "\n".$tool->gapSame(); // true
$tool = new Numberline([4, 6, 3]);
echo "\n".$tool->gapSame(); // false
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