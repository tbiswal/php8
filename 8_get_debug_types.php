<?php

Class Foo{
    // ....
}

Class Bar{
    // ...
}

$foo = new Bar();

print ("gettype demo: \n");
if (!($foo instanceof Foo)) { 
    throw new TypeError(
        sprintf(
            'Parameter 1 is expected to be of type "%s", got "%s" instead.',
            Foo::class,
            (is_object($foo) ? get_class($foo) : gettype($foo))
        )
    );
}

print("get_debug_types demo: ");

if (!($foo instanceof Foo)) { 
    throw new TypeError(
        sprintf(
            'Parameter 1 is expected to be of type "%s", got "%s" instead.',
            Foo::class,
            get_debug_type($foo)
        )
    );
}
