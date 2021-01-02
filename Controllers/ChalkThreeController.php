<?php 

class ChalkThreeController {

    public function describeChallenge(): string {
        return "Given an array of ints, return true if the value 3 appears in the array exactly 3 times, and no 3's are next to each other.";
    }    

    public function haveThree(array $ints): string {
        $seeking = 3;
        $ints = $ints ?? ['grandpa'];
        $histogram = array_count_values($ints);
        var_dump($histogram);
        $foundAdjacents = array_reduce(
            $ints, 
            '$this->hasAdjacentThrees'
        );
        echo 'string for $FOUNDADJACENTS ['.$foundAdjacents.'] ';
        if ($foundAdjacents){
            return " found a couple of threes in there ";
        }
        if (3 === $histogram[3]){
            return 'no adjacents, counted 3 3\'s too';}
        return 'floss';
    }
    
    public function hasAdjacentThrees($i, $j){
        if (3 === $i && $i === $j){
            return 'adjacent-found';
        } 
        return ' todo ';
    }
}
