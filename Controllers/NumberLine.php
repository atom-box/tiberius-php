<?php

require_once 'ev-test-data.php';  // full path unneccessary: file in same folder

interface checks
{
    public function gapSame(): string;
    public function notAlone(): string;
    // public function timelapse(): int;
    public function roundThenSum(): int;
}

class NumberLine implements checks
{

    function __construct(array $numbers, ?int $needle = null)
    {
        $this->numbers = $numbers;
        $this->needle = $needle;
    }

    // Checks if numbers are evenly spaced
    public function gapSame(): string
    {
        if (count($this->numbers) !== 3) {
            die('ERROR: gapSame function requires the array must have three numbers.');
        }

        $sorted = $this->numbers;
        sort($sorted);
        $small = $sorted[0];
        $medium = $sorted[1];
        $large = $sorted[2];
        if ($small - $medium === $medium - $large) {
            return 'toot your lanyard';
        }

        return 'it\'s nahhht Scottish';
    }

    // Checks (1) no matching neighbor (2) replace w/ large neighbor
    protected function dominatedByWhichNeighbor($i): int
    {
        $a = $this->numbers[$i - 1];
        $b = $this->numbers[$i];
        $c = $this->numbers[$i + 1];
        if ($a === $b || $b === $c) {
            return null;
        }
        if ($a >=  $c) {
            return $a;
        }
        if ($a <  $c) {
            return $c;
        }
        // something actually went wrong; fail gracefully
        return null;
    }

    public function notAlone(): string
    {
        $fixed = [];
        $indexLast = count($this->numbers) - 1;
        foreach ($this->numbers as $i => $member) {
            if ($i === 0 || $i === $indexLast) {
                $fixed[] = $member;
                continue;
            }
            if ($this->needle) {
                $theDominatingNeighbor = $this->dominatedByWhichNeighbor($i);
                if ($theDominatingNeighbor) {
                    $fixed[] = $theDominatingNeighbor;
                }
                continue;
            }
            $fixed[] = $member;
        }
        $joined = implode(' ', $fixed);
        return $joined;
    }

    public function roundThenSum(): int
    {
        $sum = 0;

        echo "\nFor this number line: " . implode('-', $this->numbers) . "\n";
        foreach ($this->numbers as $number) {
            if ($this->intWantsUp($number)) {
                $sum += $this->roundUp($number);
                continue;
            }
            $sum += $this->roundDown($number);
        }
        return $sum;
    }

    // given an array of INTS that are unixtime
    // returns gap between each member and its neighbor, in years
    public function unixtimelapse(array $numbers): string
    {
        if (count($numbers) < 2) {
            return '';
        }
        $oneTime = array_shift($numbers);
        $diff = abs($oneTime - $numbers[0]);
        $yearlong = $diff / 31536000000;
        $diff = (string)$diff;

        return $yearlong . ' years, ' . $this->unixtimelapse($numbers);
    }

    public function dayslapse(array $yearsasintegers): string
    {
        // uncomment to see as dates
        echo "The behavior of these functions is affected by settings in php.ini:\n";
        // https://www.w3schools.com/php/php_ref_date.asp
        foreach ($yearsasintegers as $year) {
            $date = date_create($year . "-00-00");
            echo date_format($date, "Y/m/d") . "\n";
        }
        return "slug";
    }


    private function roundUp(int $n): int
    {
        $tens = $n / 10;
        $tens = ceil($tens);
        return 10 * $tens;
    }

    private function roundDown(int $n): int
    {
        $tens = $n / 10;
        $tens = floor($tens);
        return 10 * $tens;
    }

    private function intWantsUp(int $n): bool
    {
        if ($n % 10 > 4) {
            return true;
        }
        return false;
    }

    // public function pairStar(int $rawNum): string
    // {
    //     if ($rawNum < 10) {
    //         settype($rawNum, "string");
    //         $stringifieddigittoadd = $rawNum;
    //         return $stringifieddigittoadd;
    //     }
    //     $undealtwithdigits = $rawNum / 10;
    //     $rightDigit = $rawNum % 10;
    //     settype($rightDigit, 'string');
    //     $stringifieddigittoadd = $rightDigit;
    //     return $this->pairStar($undealtwithdigits) . '*' . $stringifieddigittoadd;
    // }
    public function pairStar(int $rawNum): string
    {
        echo "Before:        " . $rawNum . "\n";
        $stringedNumber = (string) $rawNum;
        $allChars = str_split($stringedNumber);
        $answer = $this->cushion($allChars);
        return $answer;
    }

    private function cushion(array $allChars): string
    {
        if (count($allChars) === 0) {
            return '';
        }
        if (count($allChars) === 1) {
            return $allChars[0];
        }
        $leftChar = array_shift($allChars);
        $answer = $leftChar === $allChars[0] ? $leftChar . '*' : $leftChar;
        // echo "----we just looked at [$leftChar] and [$allChars[0]]\n";
        return $answer . $this->cushion($allChars);
    }

    // int to string
    // explode the string
    // recuRsive subfunction give recentchar and nowchar
    //     IF RECENTCHAR === NOWCHAR, RETURN STAR.NOWCHAR ELSE RETURN NOWCHAR
    // append that result 
    // return all 
}

$tool = new Numberline([2, 4, 6]);
echo "\nGap same: " . $tool->gapSame(); // true
$tool = new Numberline([4, 6, 2]);
echo "\nGap same: " . $tool->gapSame(); // true
$tool = new Numberline([4, 6, 3]);
echo "\nGap same: " . $tool->gapSame(); // false
echo "\n\n";

$tool = new Numberline([1, 2, 3], 2);
echo "Alone: " . $tool->notAlone() . "\n"; // [1, 3, 3]
$tool = new Numberline([1, 2, 3, 2, 5, 2], 2);
echo "Alone: " . $tool->notAlone() . "\n"; // [1, 3, 3, 5, 5, 2]
$tool = new Numberline([3, 4], 3);
echo "Alone: " . $tool->notAlone() . "\n"; // [3, 4]
echo "\n";

$hopper = new Numberline([16]);

echo "Roundthensum: " . $hopper->roundThenSum() . "\n"; // 60
$hopper = new Numberline([12, 13, 14]);
echo "Roundthensum: " . $hopper->roundThenSum() . "\n"; // 30
$hopper = new Numberline([6, 4, 4]);
echo "Roundthensum: " . $hopper->roundThenSum() . "\n"; // 10

$date1 = date_create('2021-02-09');
$date2 = date_create('2021-01-06');
$date3 = time();
$date4 = mktime(3, 4, 5, 6, 7, 2020);
$calendar = new Numberline([$date1, $date2]);
// // echo "Timelapse: ".$calendar->timelapse()."\n"; 
$trythis = [$date1, $date2, $date3, $date4];
// UNCOMMENT THIS TO SEE THE DATE OBJECTS
// var_dump($trythis);
echo "\n";

$times = new NumberLine([]); // not safe to call php with less than args
echo "Unixtimelapse: " . $times->unixtimelapse([1813321467, 1613321467, 1003321467, 613321467, 613321000]) . "\n";

echo "Dayslapse: " . $times->dayslapse(EVERAS) . "\n";

echo "PAIRSTAR\n";
$sanitizer = new NumberLine([]);  // not safe to call with no array. the above worked b/c empty array
echo "Starred pairs: " . $sanitizer->pairStar(31036899688) . "\n";
echo "Starred pairs: " . $sanitizer->pairStar(29261392944) . "\n";
echo "Starred pairs: " . $sanitizer->pairStar(20000456111456) . "\n";


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

/*
UNIXTIMELAPSE FUNCTION
given an array of INTS that are unixtime
returns gap between each member and its neighbor, in years
*/

  /*
  PAIRSTAR FUNCTION
Given a longish int, compute recursively and return a string where identical digits that are 
adjacent in the original integer are separated from each other by a "*"
  */

/*


                            
                            
   _____   _____ _ __ _   _ 
  / _ \ \ / / _ \ '__| | | |
 |  __/\ V /  __/ |  | |_| |
  \__/\ \_/ \___|_|   \__, |
    /  \   _ __ _ __   __/ |
   / /\ \ | '__| '__|_|___/ 
  / ____ \| |  | ||  ____|  
 /_/  _ \_\_|  |_|| |__     
 | | | | '_ \ / __|  __|    
 | |_| | | | | (__| |       
  \__,_|_| |_|\___|_|       
                    

                            


*/