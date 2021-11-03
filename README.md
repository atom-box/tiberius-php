# Tiberius Folder
## This is a page for outputting code challenge answers
This code doesn't particularly "do" anything except output a static page. 
## Who this is for
Me mainly. But also for Web Developers who are practicing algorithms and exercises or practicing for a job interview.<br/>
This is a place to work on Fizz Buzz solutions in a Test-Driven Development (TDD).<br/>
Once you have a fork cloned to your local machine, practice your coding routine by adding more:
* php
* phpunit (for unit testing)
* CSS
* HTML   
* algorithms (fizz buzz solutions!)
## All this project does is serve a static page
This code generates a simple web page.  

![screenshot of the final result](https://raw.githubusercontent.com/atom-box/tiberius-php/master/resources/images/challenges-screenshot.png)
  
You have to do something like this: `php -S localhost:8000`.  
Then you can view your page in Firefox or similar.
## How to get started
On your local machine, clone this site and use it as a starting point for your daily messing around. I think the below steps will work if you have php installed and you have cloned this site. Let me know if this site is useful to you. If you follow these instructions you should end up with a simple page like this in your browser:
 
## How to add code
1. find online any algorithm coding challenge
2. in your local folder, write a **controller** file. solve the challenge's logic in the controller file
3. write a new **view** file in views to display the controller logic
4. connect the view file(s) back to **index.php** somehow
5. styling is currently at the top of index.php
6. to run it locally: `php -S localhost:8000`
7. to view the page: `http://127.0.0.1:8000/` in Firefox or Safari
## Folder structure
* index.php is at the top level
* other layouts go in the views folder (these are all children of index.php)
* nearly all of the logic goes in the controllers folder
There are also these:
* tests folder
* images are in resources/images
* src folder got sort of forgotten.  these other folders should be under it but they're not
## How to write tests for the PHP
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
