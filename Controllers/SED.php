<?php
namespace tiberius\tests;

interface arbitraryname {
    public function firstfix(string $dirty): string;
    public function justAllCaps(string $untested): string;
}

class SED
{
    public function firstfix($dirty)
    {
        $beforestring = argv[1] ?? $dirty; 
        $cleaned = $beforestring;
        return $cleaned;
    }
    
    public function justAllCaps(string $untested): string{
        if(true){
            $approved = $untested;
            return $approved;
        }
        return ' burp '; // returning null or false would be nice
    }
}
echo $argc." number of args.\n";
echo $argv[1]." <--second arg is that. \n";

echo 89475908234759827345;