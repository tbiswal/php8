<?php
/**
 * Ref - https://www.php.net/manual/en/function.setcookie.php
 setcookie ( 
    string $name, 
    string $value = "", 
    int $expires = 0, 
    string $path = "", 
    string $domain = "", 
    bool $secure = false, 
    bool $httponly = false,
 ) : bool
 */

// If you want to set cookie name and domain name
setcookie(
    name: "Awesome",
    domain: "example.com",
);

// Without named arguments how it would look like?
/*
setcookie(
    "Awesome",
    "",
    0,
    "",
    "example.com"
);
*/
