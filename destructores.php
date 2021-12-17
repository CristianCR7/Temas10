<?php
class MyDestructableClass
{
    function __construct() {
        print "En el constructor\n";
    }

    function __destruct() {
        print "Destruyendo " . __CLASS__ . "\n";
    }
}

$obj = new MyDestructableClass();
?>