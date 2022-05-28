<?php
$name = "Didik";//global scope

function sayName()
{
    $name = "Ari";//local scope
    echo "Hello $name".PHP_EOL;
}

sayName();
echo $name;