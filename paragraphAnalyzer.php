<?php

// Return the number of times that the string "coney" appears anywhere in 
// the given string, except we'll accept any vowels 
// so "caney" and "cinoy" count.


interface EditorTools {
    public function oldbreakingfunction(string $wordString) : array;
    public function worditize(string $wordString) : array;
    public function munch(string $dirtyWord) : string;
    public function standardize(string $chaosWord) : string;
    public function parToGoodWords(string $paragraph) : array;
}

interface HistogramTools {
    public function shrinkList(array $longMessy) : array;
    // Next: make an associative array , make a counter, ...visualize not in this interface
}

final class User
{

    public $first_name;
    public $last_name;

    public function getFullName(): string
    {
        return $this->first_name . " " . $this->last_name;
    }

}


class StringUtility implements EditorTools, HistogramTools {
    
    // deprecated exploder
    public function oldbreakingfunction(string $wordString) : array {
        // todo        resplit on slash, underscore
        return explode(' ', $wordString);
    }
    
    // string to words, splits on spaces but also symbols inside
    public function worditize(string $wordString) : array {
        $words = [];
        $tok = strtok($wordString, " /\-@%");
        while($tok !== false){
            $words[] = $tok;
            $tok = strtok(" /\-@%");
        }
        return $words;
        // Idea: 1. sub dashes to spaces 2. explode
    }
    
    
    // strip boundary whites/non-alphas except internal ['-] 
    public function munch(string $dirtyWord) : string {
        $trimmedWord = trim($dirtyWord, ' !@#$%^&*()\'"<>\.,');
        return $trimmedWord;
    }
    
    // uppers to lower case
    public function standardize(string $chaosWord) : string {
        return strtolower($chaosWord);
    }
    
    // meta.    paragraph->nice wordlist
    public function parToGoodWords(string $paragraph) : array{
        $dirtyList = $this->worditize($paragraph);
        $cleanList = [];
        foreach($dirtyList as $dirtyWord){
            $cleanWord = $this->munch($dirtyWord);
            $lowerWord  = $this->standardize($cleanWord);
            $cleanList[] = $lowerWord;
        }
        return $cleanList;
    }
    
    public function notInUniquesYet(mixed $needle, array $haystack) : boolean {

    } 


    // manual version of array_unique!
    public function bespoke_unique(array $redundants) : array {
        // $uniques = [];
        // $uniques = array_filter($redundants, in_array( $x,  $uniques ));
        // $uniques = array_filter($redundants, "easyCallback");
        $uniques = array_filter($redundants, "odd");

        echo "Original array size: ". count($redundants)." New array size: ". count($goose). "\n\n";
        return $uniques;
    }

    // longlist -> unredundant, ordered (hence shorter)
    public function shrinkList(array $longMessy) : array {
        sort($longMessy);
        $sorteds = $longMessy;
        $uniques = $sorteds;
        // $uniques = $this->bespoke_unique($sorteds);
        return $uniques;
    }
    
}



// _                        
// | |                       
// _ __   _____  _| |_   _ __ __ ___      __
// | '_ \ / _ \ \/ / __| | '__/ _` \ \ /\ / /
// | | | |  __/>  <| |_  | | | (_| |\ V  V / 
// |_| |_|\___/_/\_\\__| |_|  \__,_| \_/\_/  
                         
//  https://algs4.cs.princeton.edu/53substring/Brute.java.html


// Is there a better place for this data? TODO
// TEST DATA
$SOLNIT_QUOTE = '“The. Art. Is. Not. One. Of "forgetting" but lettin\' go. And when everything else is gone, you can be rich in loss.”.'; 
$SYMBOLED_QUOTE = 'Why say "willow" when you cat-fans of @dude can say-like "w-in\'do" ';
$SYMBOLED_WORD = '^ <my!';
$PHAROAH_ARRAY = ['cedar', 'trees',  'and', 'exotic', 'items', 'His', 'expedition', 'to', 'the', 'land', 'of', 'Punt', 'brought', 'back', 'large', 'quantities', 'of', 'myrrh', 'malachite', 'and', 'electrum' ];
$editor = new StringUtility();

print_r($editor->parToGoodWords($SOLNIT_QUOTE)); 
// todo 1) constructor 2) allow for $solnit = new Wordmass


echo($editor->munch($SYMBOLED_WORD));

echo "\n::::::Sahure sorted:::::::\n";
print_r($editor->shrinkList($PHAROAH_ARRAY));
// extract words to array, trim, standardize case, find redundants, sort, histogram
// EditorTools
//  to array
//   trimarray
//   standardize casearray
  
//   ArrayTools 
//   find redundantsarray
//   sortarray
//   histogram


function test_odd($var)
{
return($var & 1);
}
