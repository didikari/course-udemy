<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName".PHP_EOL;
}

sayHello("Didik","strtoupper");
sayHello("Didik","strtolower");
sayHello("Didik", function(string $name):string{
    return strtoupper($name);
});

sayHello("Didik", fn($name)=>strtoupper($name));

