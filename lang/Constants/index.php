<?php

// define('CONSTANT', 'Hello, world');
const CONSTANT = 'Hello, world';

function foo()
{
    // define('MESSAGE', 'Who are you?');

    // -> syntax error
    // const MESSAGE = 'Who are you?';
}

// foo();

class MyClass
{
    public const MESSAGE = 'Who are you?';

    public static function foo()
    {
        // -> syntax error
        // const BYE = 'Bye';
    }
}

[ 'user' => $globalConstants ] = get_defined_constants(true);
var_dump($globalConstants, MyClass::MESSAGE);

class A
{
    public function __construct()
    {
        // A
        var_dump(__CLASS__);
    }

    public function sayHello()
    {
        // A::sayHello
        return __METHOD__;
    }
}

var_dump((new A())->sayHello());
