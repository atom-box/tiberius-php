<?php

interface checks {
    public function gapSame(int $a, int $b, int $c): string;
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
}

$tool = new Numberline();

echo "\n".$tool->gapSame(2, 4, 6); // true
echo "\n".$tool->gapSame(4, 6, 2); // true
echo "\n".$tool->gapSame(4, 6, 3); // false
echo "\n\n";

/*
Given three ints, a b c, one of them is small, one is medium and one is large. 
Return true if the three values are evenly spaced, so the difference between 
small and medium is the same as the difference between medium and large.
*/