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
        if ( 2 === $a 
        && 2 === $b 
        && 2 === $c
        ){ return 1;}

        // SECOND PLACE
        if ( $b === $a 
        && $b === $c
        ){ return 2;}

        // THIRD PLACE
        if ( $b !== $a 
        && $c !== $a 
        ){ return 3;}

        // CONSOLE
        return 999999;
    }
}

