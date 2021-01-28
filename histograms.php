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
}

class Histograms implements ReggieTools, ParagraphHandler {
    public function findCommons(string $dataString): array {
        $histofied = [
            'apple' => 2,
            'bear' => 1,
            'tree' => 5,
        ]; // todo delete this mock
        
        return $histofied;
    }

    public function mush(array $lines): string{
        $theMush = '';
        foreach($lines as $line){
            $theMush .= $line;
        }
        return $theMush;
    }
    

}

$solver1 = new Histograms(); 

$data1 = "It is more important to know where you";
$data2 = " are going than to get there quickly. Do";
$data3 = " not mistake activity for achievement.";
$data4 = "Isocrates";

echo "\n";
echo $solver1->mush([$data1, $data2, $data3, $data4 ]);
echo "\n";
// Todo WRITE A TEST CLASS FOR THIS ABOVE LINES
