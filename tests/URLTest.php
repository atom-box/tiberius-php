<?php
namespace tiberius\tests;

use PHPUnit\Framework\TestCase;
// require '../Controllers/constants.php';
require 'Controllers/constants.php';
require 'Controllers/URL.php';
class URLtest extends TestCase
{
    public function testSluggifyReturnsSluggifiedString(){
        echo "\n______I am ".CHEW."\n"; 
        echo "\n______I am ".CUD."\n"; 
        $urlTools = new URL();

        $originalString = '1. this string will be sluggified!! !'; 
        $expectedResult = '1-this-string-will-be-sluggified';
        $output = $urlTools->sluggify($originalString);
        $this->assertSame($expectedResult, $output);
    }
}

/**
 * Lessons learned:
 * 1) You forgot that phpunit.xml crucially points to locations
 * 2) URL file findable when in same folder.
 * 3) URL file findable if using exact path (CRUDE!)
 * 4) URL file findable by remembering (5)
 * 5) The sibling to your containing folder does not get a double dot.  The folder path naming assumes a starting point of the damn project root. So if you are in root/BROTHER, you call with REQUIRE 'SISTER/url.php'.
 * 
 */