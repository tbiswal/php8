<?php
// Bfore PHP 8
/**
class User {
    private string $name;
    public function __construct(string $name) {
        $this->name = $name;
    }
}
*/

class User {
    public function __construct(private string $name) {
        echo $this->name . "\n";
    }
}

new User('Ayesh');
