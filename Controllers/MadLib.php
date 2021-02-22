<?php
namespace tiberius\tests;

interface arbitraryname {
    public function firstfix(string $dirty): string;
    public function justAllCaps(string $untested): string;
}

class SED
{
    public function __construct($beforestring)
    {
        $this->$beforestring = $beforestring;
    }
    
    public function firstfix(): string
    {
        $cleaned = $this->beforestring;
        return $cleaned;
    }
    
    public function justAllCaps(): string{
        if(true){
            $approved = $untested;
            return $approved;
        }
        return ' burp '; // returning null or false would be nice
    }
}
// echo $argc." number of args.\n";
// echo $argv[1]." <--second arg is that. \n";
$preferredinput = $argv[1] ?? 'grandpa stockings';



$a = new SED($preferredinput);
echo "\n".$a->firstfix()."_____\n";
echo 89475908234759827345;
