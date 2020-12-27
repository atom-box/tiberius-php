<?php

/**
* Accepts a leve where 0 is best, 1 is next best, ...
* Returns an integer code for the appropriate emoji "badge" 
*/

class BadgeController {
    public function showBadge(int $numericHonorific): int {
        echo "[$numericHonorific]";
        switch ($numericHonorific) {
            case 1: 
                $decimalEmojiCode = 129351;
                break;
            case 2: 
                $decimalEmojiCode = 129352;
                break;
            case 3: 
                $decimalEmojiCode = 129353;
                break;
            default:
                $decimalEmojiCode = 129338;
        }
        // return 128519;
        return $decimalEmojiCode;
    }
}