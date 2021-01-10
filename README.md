# Tiberius Folder
## How you add code
If you are maintaining a daily learning routine, like **#100daysOfCode**, you could clone this site and use it as a starting point for your daily messing around. I think the below steps will work if you have php installed and you have cloned this site. Let me know if this site is useful to you. 
## How I add code
In case I come back to this in the future and forget what I'm doing here, my learning routine is:
1. find online any algorithm coding challenge
2. write a **controller** file. solve the challenge's logic in the controller file
3. write a new **view** file in views to display the controller logic
4. connect the view file(s) back to **index.php** somehow
5. styling is currently at the top of index.php
6. to run it locally: `php -S localhost:8000`

## Folder structure
* index.php is at the top level
* other layouts go in the views folder (these are all children of index.php)
* nearly all of the logic goes in the controllers folder
There are also these:
* tests folder
* images are in resources/images
* src folder got sort of forgotten.  these other folders should be under it but they're not
## Testing
Lancecourse has a quickstart list of [how to do a test](https://lancecourse.com/howto/a-quick-intro-to-testing-php-code-with-phpunit).
1. To install phpunit into the project's vendor/bin, inside the directory you are now in: `composer require --dev phpunit/phpunit`
2. Make an .xml file, similar to this, which names the directory which phpunit should search to find the tests:
```
<phpunit bootstrap="vendor/autoload.php" colors="true">
    <testsuites>
        <testsuite name="IntroPHPUnitTest">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```
3. Write some tests
4. To run tests: `./vendor/bin/phpunit`

## Resources
* [Symfonycasts](https://symfonycasts.com/screencast/phpunit): *PHPUnit: Testing with a Bite.*  (paid site).
* David Powers PHP 7 (book)
* basic useage of [Composer](https://getcomposer.org/doc/01-basic-usage.md)
* the actual challenge questions come from Stanford University's Compsci Dept: [codingbat](https://codingbat.com/)

## Connect
I'm on Twitter at @mistergenest    	&#x1f426; <br/>
This repo is where I work between the time I wake up and the time the rest of my house wakes up. &#x1f304; <br/>
My day job is working LAMP stack for an ecommerce company.  
## The Historical Tiberius
I needed a naming system that gave my project folders an implied sequence.  This one is Tiberius, the next is Caligula. 

BTW, the 3-D artist Daniel Voshart has released new, accurate reconstructions of what the caesars looked like. One of these is a realistic reconstruction of [Tiberius](https://www.ancient.eu/image/12979/tiberius-facial-reconstruction/)


