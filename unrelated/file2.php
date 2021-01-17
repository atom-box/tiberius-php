<?php
namespace brownsville;
include 'file1.php';

const FOO = 2;
function foo() {}
class foo
{
    static function staticmethod() {}
}

/* Unqualified name */
// foo(); // resolves to function Foo\Bar\foo
// foo::staticmethod(); // resolves to class Foo\Bar\foo, method staticmethod
echo "\n\n";
echo "Say nought; resolves to 'this file: 2'.\n";
echo FOO; // resolves to constant Foo\Bar\FOO
echo "\n\n";

/* Qualified name */
// subnamespace\foo(); // resolves to function Foo\Bar\subnamespace\foo
// subnamespace\foo::staticmethod(); // resolves to class Foo\Bar\subnamespace\foo,
// method staticmethod
echo "\n\n";
echo "Say that other guys three word name but leave off the first three words, resolves to a child of your current folder: 1\n";
echo subnamespace\FOO; // resolves to constant Foo\Bar\subnamespace\FOO
echo "\n\n";

/* Fully qualified name */
// \Foo\Bar\foo(); // resolves to function Foo\Bar\foo
// \Foo\Bar\foo::staticmethod(); // resolves to class Foo\Bar\foo, method staticmethod
echo "\n\n";
echo "Say the long two words, resolves to here again: 2\n";
echo \brownsville\FOO; // resolves to constant Foo\Bar\FOO
echo "\n\n";

//  https://www.php.net/manual/en/language.namespaces.basics.php 
// SEE file1.php in same folder
?>  