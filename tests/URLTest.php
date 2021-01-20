<?php
namespace tiberius\tests;

// Refactor repetitive testing into DataProvider pattern.

use PHPUnit\Framework\TestCase;
// require '../Controllers/constants.php';
require 'Controllers/constants.php';
require 'Controllers/URL.php';
class URLtest extends TestCase
{
    public function testStringEndsAreNotDashed(){
        $urlTools = new URL();
        
        // $originalString = '1. this string will be sluggified!! !'; 
        $originalString = '-1 bad mf-'; 
        $expectedResult = '1-bad-mf';
        $output = $urlTools->sluggify($originalString);
        $this->assertSame($expectedResult, $output);
    }

    public function testSixteenNastySymbolsAreIgnored(){
        $urlTools = new URL();
        
        $originalString = 'dog(~!@#$%^&*()_+)?wing?'; 
        $expectedResult = 'dog-wing';
        $output = $urlTools->sluggify($originalString);
        $this->assertSame($expectedResult, $output);
    }


    public function testTurkishLetters(){
        $urlTools = new URL();
        
        $originalString = 'Türkçe, bir köprünün altında?'; 
        $expectedResult = 'Türkçe-bir-köprünün-altında';
        $output = $urlTools->sluggify($originalString);
        $this->assertSame($expectedResult, $output);
    }

    public function testFetchFrenchDoctor(){
        $urlTools = new URL();
        $originalString = '1 médecin français, vite!';
        $expectedResult = '1-médecin-français-vite';
        $output = $urlTools->sluggify($originalString);
        $this->assertSame($expectedResult, $output);
    }   

    public function testPhoneNumber(){
        $urlTools = new URL();
        
        $originalString = '465-3958'; 
        $expectedResult = '465-3958';
        $output = $urlTools->sluggify($originalString);
        $this->assertSame($expectedResult, $output);
    }

    public function testInputIsEmptyString(){
        $urlTools = new URL();
        $originalString = '';
        $expectedResult = '';
        $output = $urlTools->sluggify($originalString);
        $this->assertSame($expectedResult, $output);
    }

    public function testInputIsNull(){
        $urlTools = new URL();
        $originalString = null;
        $expectedResult = '';
        $output = $urlTools->sluggify($originalString);
        $this->assertSame($expectedResult, $output);
        // TODO CHANGE TEST TO does not explode instead
    }


 /**
  * @param string $originalString
  * @param string $expectedString
  * 
  * @dataProvider provideSlugging
  */

  public function testSluggifyReturnsSluggifiedString( $originalString, $expectedString){
      //
  }

  public function provideSlugging(){
      return array(
        array('-1 bad mf-', '1-bad-mf'),
        array('dog(~!@#$%^&*()_+)?wing?', 'dog-wing'),
        array('Türkçe, bir köprünün altında?', 'Türkçe-bir-köprünün-altında'),
      );
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

