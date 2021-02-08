<?php

interface checks {
    public function gapSame(): string;
    public function notAlone(): string; 
}

class NumberLine implements checks {
    function __construct(array $numbers, ?int $needle = null)
    {
        $this->numbers = $numbers;
        $this->needle = $needle;
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
    
    protected function dominatedByWhichNeighbor($i): int{
        $a = $this->numbers[$i - 1];
        $b = $this->numbers[$i];
        $c = $this->numbers[$i + 1];
        if ($a === $b || $b === $c){
            return null;
        }
        if ($a >=  $c){
            return $a;
        }
        if ($a <  $c){
            return $c;
        }
        // something actually went wrong; fail gracefully
        return null; 
    } 

    public function notAlone(): string{
        $fixed = [];
        $indexLast = count($this->numbers) - 1;
        foreach($this->numbers as $i => $member){
            if($i === 0 || $i === $indexLast){
                $fixed[] = $member;
                continue;
            }
            if($this->needle){
                $theDominatingNeighbor = $this->dominatedByWhichNeighbor($i);
                if($theDominatingNeighbor){
                    $fixed[] = $theDominatingNeighbor;
                }    
                continue;
            }
            $fixed[] = $member;
        }
        $joined = implode(' ', $fixed);
        return $joined;
    }

}

$tool = new Numberline([2, 4, 6]);
echo "\nGap same: ".$tool->gapSame(); // true
$tool = new Numberline([4, 6, 2]);
echo "\nGap same: ".$tool->gapSame(); // true
$tool = new Numberline([4, 6, 3]);
echo "\nGap same: ".$tool->gapSame(); // false
echo "\n\n";

$tool = new Numberline([1, 2, 3], 2);
echo "\nAlone: ".$tool->notAlone()."\n"; // [1, 3, 3]
$tool = new Numberline([1, 2, 3, 2, 5, 2], 2);
echo "\nAlone: ".$tool->notAlone()."\n"; // [1, 3, 3, 5, 5, 2]
$tool = new Numberline([3, 4], 3);
echo "\nAlone: ".$tool->notAlone()."\n"; // [3, 4]

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