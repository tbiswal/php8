<?php

$mystring = 'Managed WordPress Hosting';
$findme   = 'WordPress';

if (str_contains($mystring, $findme)) {
    echo "The string has been found";
} else {
    echo "String not found";
}
