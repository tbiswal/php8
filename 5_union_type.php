<?php

class Example {
    private int|float $foo;
    public function squareAndAdd(float|int $bar, $foo): int|float {
        return $bar ** 2 + $foo;
    }
}

$exampleObj = new Example();
echo $exampleObj->squareAndAdd(5.5, 6) ."\n";
echo $exampleObj->squareAndAdd(5, 6.5) ."\n";

