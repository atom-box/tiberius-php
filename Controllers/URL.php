<?php
namespace tiberius\tests;

// constant JACK = 33;

class URL
{
    public function sluggify($string, $separator = '-', $maxLength = 96)
    {
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

// $slugger = new URL();
// $dirty = 'Pizza, cheesy pizza, from the tip of YOUR-HAT (wait for it) 2 the top of your !@#$%^&*() toes!';
// $clean = $slugger->sluggify($dirty);

// echo "\n".'madam? '."\n";
// echo "And now the title before/after: \n";
// echo $dirty."\n";
// echo $clean."\n";