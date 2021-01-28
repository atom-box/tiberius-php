<?php
echo("///////////// 1  1  1  1 ///////////////////\n");
echo("///////////// Find things ///////////////////\n");


interface ReggieTools {
    public function findCommons(string $dataString): array;
}

class StringTools implements ReggieTools {
    public function findCommons(string $dataString): array {
        return [];
    }
    // do a this somewhere in here
}

$solver1 = new StringTools(); 

$data = "It is more important to know where you are going than to get there quickly. Do not mistake activity for achievement."; // Isocrates;
$findings = [];


 /*

$solver3 = new SolutionTools();

echo("Oddified ". $solver3->stringBits("Hello")); // "Hlo"
echo("Oddified ". $solver3->stringBits("Hi")); // "H"
echo("Oddified ". $solver3->stringBits("Heeololeo")); // "Hello"
*/