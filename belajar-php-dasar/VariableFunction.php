<?php
function foo()
{
    echo "Foo".PHP_EOL;
}

function bar(){
    echo "Bar".PHP_EOL;
}

$functionYangAkanDihasilkan = "foo";
$functionYangAkanDihasilkan();

$functionYangAkanDihasilkan= "bar";
$functionYangAkanDihasilkan();

function sayHello(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Hello $finalname".PHP_EOL;
}
function sampleFunction(string $name):string
{
    return "Sample $name";
}
sayHello("Didik","samplefunction");
sayHello("Didik","strtoupper");
sayHello("Didik","strtolower");
