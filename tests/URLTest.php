<?php
namespace tiberius\tests;

// Refactor repetitive testing into DataProvider pattern.

use PHPUnit\Framework\TestCase;
// require '../Controllers/constants.php';
require 'Controllers/ev-test-data.php';
require 'Controllers/URL.php';
class URLtest extends TestCase
{

 /**
  * @param string $originalString
  * @param string $expectedString
  * 
  * @dataProvider provideSlugging
  */

  public function testSluggifyReturnsSluggifiedString( $originalString, $expectedString){
      $urlTools = new URL();
      $output = $urlTools->sluggify($originalString);
      $this->assertSame($expectedString, $output);
  }

  public function provideSlugging(){
      return array(
        array('-1 bad mf-', '1-bad-mf'),
        array('dog(~!@#$%^&*()_+)?wing?', 'dog-wing'),
        array('Türkçe, bir köprünün altında?', 'Türkçe-bir-köprünün-altında'),
        array('', ''),
        array(null, ''),
        array('(313) 465-3958', '313-465-3958'),
        array('1 médecin français, vite!', '1-médecin-français-vite'),
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
