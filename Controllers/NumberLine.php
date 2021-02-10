<?php

interface checks {
    public function gapSame(): string;
    public function notAlone(): string; 
    public function timelapse(): int;
    public function roundThenSum(): int;
}

class NumberLine implements checks {
    function __construct(array $numbers, ?int $needle = null)
    {
        $this->numbers = $numbers;
        $this->needle = $needle;
    }
    
    // Checks if numbers are evenly spaced
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
    
    // Checks (1) no matching neighbor (2) replace w/ large neighbor
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

    public function roundThenSum(): int{
        return 999;
    }

    // find diff between first and second date in an array
    public function timelapse(): int{
        return 333;
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
echo "Alone: ".$tool->notAlone()."\n"; // [1, 3, 3]
$tool = new Numberline([1, 2, 3, 2, 5, 2], 2);
echo "Alone: ".$tool->notAlone()."\n"; // [1, 3, 3, 5, 5, 2]
$tool = new Numberline([3, 4], 3);
echo "Alone: ".$tool->notAlone()."\n"; // [3, 4]
echo "\n";

$date1 = date_create('2021-02-09');
$date2 = date_create('2021-01-06');
$date3 = time();
$date4 = mktime(3, 4, 5, 6, 7, 2020);
$calendar = new Numberline([$date1, $date2]);
echo "Timelapse: ".$calendar->timelapse()."\n"; 
$trythis = [$date1, $date2, $date3, $date4 ];
var_dump($trythis);
echo "\n";

$hopper = new Numberline([16, 17, 18]);
echo "Roundthensum: ".$hopper->roundThenSum()."\n"; // 60
$hopper = new Numberline([12, 13, 14]);
echo "Roundthensum: ".$hopper->roundThenSum()."\n"; // 30
$hopper = new Numberline([6, 4, 4]);
echo "Roundthensum: ".$hopper->roundThenSum()."\n"; // 10

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

 /**
 ROUNDTHENSUM FUNCTION
* round an int value up to the next multiple of 10 if its rightmost digit is 5 or more, 
so 15 rounds up to 20. Alternately, round down to the previous multiple of 10 if 
its rightmost digit is less than 5, so 12 rounds down to 10. Given an array of ints 
return the sum of their rounded values.
  */