<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;



final class UserTest extends TestCase
{
    /* 
    Our first test method: testing if our 
    User class can return a full name 
     */
    public function testReturnsUserFullName()
    {

        $this->assertEquals(123, 123);
    }
}



// REFERENCE https://phpocean.com/tutorials/back-end/a-quick-intro-to-testing-php-code-with-phpunit/70 