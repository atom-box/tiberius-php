<?php

interface ReggieTools {
    // given a mongo-ish string, return the 3 most frequent as an assoc array (string word => integer count)
    public function findCommons(string $dataString): array;

    // todo a second function here 
    // look at front given a string and a string prefix, returns a boolean for presence of prefix
}

interface ParagraphHandler {
    // given an array of strings, return a mongo string
    public function mush(array $lines): string;

    // show an array, incl an associative one
    public function duuump(array $list): void;
    
    // todo A 2nd function: make space consistant.  Helper fn for mush so all words have 1 space and ends have no space.
}

class Histograms implements ReggieTools, ParagraphHandler {
    public function findCommons(string $dataString): array {
        // string to array tokens
        // use function php array_count_values

        $tokens = explode(' ', $dataString);
        $histofied = array_count_values($tokens);
        // $histofied = [
        //     'apple' => 2,
        //     'bear' => 1,
        //     'tree' => 5,
        // ]; // todo delete this mock
        
        return $histofied;
    }

    public function mush(array $lines): string{
        $theMush = '';
        foreach($lines as $line){
            $theMush .= $line;
        }
        return $theMush;
    }

    public function duuump(array $list): void{
        var_dump($list);
    }

    // needs trimming of the punctuation
    // needs sorting
    // eventually a X's sideways histogram
}

$solver1 = new Histograms(); 

$data1 = "It is more important to know where you";
$data2 = " are going than to get there quickly. Do";
$data3 = " and then and then and no but yes and no at the same time, not the opposite but the no.";
$data4 = " -Isocrates";

echo "\n";
$megaLine = $solver1->mush([$data1, $data2, $data3, $data4 ]);
echo $megaLine;
echo "\n";

$histResults = $solver1->findCommons($megaLine);
$solver1->duuump($histResults);
// Todo WRITE A TEST CLASS FOR THIS ABOVE LINES
