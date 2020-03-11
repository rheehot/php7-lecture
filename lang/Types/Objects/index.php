<?php

// class Closure
var_dump(function () {
});
// var_dump(fn () => 'Hello, world');

class MyClass
{
}

// class MyClass
var_dump(new MyClass());
// class class@anonymous
// var_dump(new class {});

function foo()
{
    yield 1;
}
// class Generator
var_dump(foo());
