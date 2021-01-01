<?php

/**
* Accepts three integers (like from a raffle ticket)
* Returns an evaluation for best to worst: 1, 2, 3, 99
*/

class TicketJudgeController {
    function scoreTheCombo(int $a, int $b, int $c): int {
        $ticket = [$a, $b, $c]; // the three lotto numbers
        $patternBest = [2, 2, 2];
        $patternRunnerUp1 = [1, 1, 1];
        $patternRunnerUp2 = [0, 0, 0];
        // todo, these won't detect bronze yet

        /**
         *  Do a pattern match into flags.  
         *  Return based on that
         */

        // FIRST PLACE
        $matchesArray = array_intersect($patternBest, $ticket);
        $matches = count(array_intersect($patternBest, $ticket));
        if ( 3 === $matches){ return 1;}
        // SECOND PLACE two ways
        $matches = count(array_intersect($patternRunnerUp1 , $ticket));

        if ( 3 === $matches){ return 2;}
        $matches = count(array_intersect($patternRunnerUp2 , $ticket));
        if ( 3 === $matches){ return 2;}

        // chaining seems not possible. 
        // this is turning into  reasonable exercise about how to be concise
        return 345;
    }
}


// DO THE EVALUATING LOGIC
// DO THE EVALUATING LOGIC
// DO THE EVALUATING LOGIC
// DO THE EVALUATING LOGIC