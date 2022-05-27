<?php
$name = "Didik";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age :";
echo $age;
echo "\n";

echo "Is Name null :";
var_dump(is_null($name));

$contoh = "didik";
unset($contoh);
echo $contoh;
echo "\n";

$contoh = "didik";
var_dump(isset($contoh));