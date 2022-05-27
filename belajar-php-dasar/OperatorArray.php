<?php

$first = [
    "first_name" => "didik"
];
$last = [
    "first_name" => "di",
    "last_name"=>"Ariyanto"
];

$full = $first+$last;
var_dump($full);

$a = [
    "last_name"=>"Ariyanto",
    "first_name" => "didi"
];

$b = [
    "first_name" => "didi",
    "last_name"=>"Ariyanto"
];

var_dump($a == $b);
var_dump($a === $b);
