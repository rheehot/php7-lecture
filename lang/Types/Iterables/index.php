<?php

// range(0, 10) 은 0 부터 10까지의 숫자 배열을 생성합니다.
foreach (range(0, 10) as $value) {
    echo $value;
}

function foo(iterable $iterable): iterable
{
    foreach ($iterable as $value) {
        yield $value;
    }
}

class MyIterator implements Iterator
{
    private $position = 0;
    private $values;

    public function __construct(iterable $values)
    {
        $this->values = $values;
    }

    public function current()
    {
        return $this->values[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid()
    {
        return isset($this->values[$this->position]);
    }
}

$myclass = new MyIterator(range(0, 10));
foreach ($myclass as $value) {
    echo $value;
}
