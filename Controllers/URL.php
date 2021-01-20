<?php
namespace tiberius\tests;

class URL
{
    public function sluggify($string, $separator = '-', $maxLength = 96)
    {
        // todo NEITHER if DOES ANYTHING!  ??s
        // if('' === $string){
        //     return '';
        // }

        
        if(null === $string){
            return '';
        }
        // VERY RIGOROUS we are standardizing the char set
        $title = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        // seems to be taking out too much of symbols
        $title = preg_replace("%[^-/+|\w ]%", '', $title);
        // trim and lower case it
        $title = strtolower(trim(substr($title, 0, $maxLength), '-'));
        // sticking in our dash from the method-args above
        $title = preg_replace("/[\/_|+ -]+/", $separator, $title);

        return $title;
    }
}

//  #TIL echo statements down here will run. Outside of class.