<?php
namespace brownsville;
include 'file5.php';

const FOO = 2;
function foo() {}
class foo
{
    static function staticmethod() {}
}

echo "\n\n";
echo subnamespace\FOO; // resolves to constant Foo\Bar\FOO
echo "\n\n";
