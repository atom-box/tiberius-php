<?php 

class ChalkThreeController {

    public function describeChallenge(): string {
        return "Given an array of ints, return true if the value 3 appears in the array exactly 3 times, and no 3's are next to each other.";
    }    

    public function haveThree(array $ints): bool {
        return true;
    }
    
}
