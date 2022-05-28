<?php

$sayHello = function (string $name)
{
    echo "Hello $name".PHP_EOL;
};

$sayHello("Didik");
$sayHello("Ariyanto");


function sayGoodBye(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Good bye $finalname".PHP_EOL;
}

sayGoodBye("Didik", function(string $name):string{
    return strtoupper($name);
});

$filterFunction = function (string $name):string
{
    return strtoupper($name);
};

sayGoodBye("Didik", $filterFunction);

$firstName = "Didik";
$lastName = "Ariyanto";

$sayHelloDidik = function() use($firstName, $lastName){
    echo "Hello $firstName $lastName".PHP_EOL;
};
$sayHelloDidik();