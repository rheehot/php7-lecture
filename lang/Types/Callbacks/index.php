<?php

/**
 * @param callback $func
 */
function foo(callable $func)
{
    if (is_callable($func)) {
        var_dump(call_user_func($func));
    }
}

function foo2()
{
}

foo('foo2');
foo(fn () => 'Hello, world');

class MyClass
{
    public static function foo()
    {
        return __CLASS__;
    }
}

class MyClass2
{
    public function __invoke()
    {
        return __CLASS__;
    }
}

foo('MyClass::foo');
foo(new MyClass2());
