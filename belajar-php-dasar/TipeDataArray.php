<?php
$values = array(1,2,3,4, 6.8);
var_dump($values);

$names = ["Didik", "Ariyanto"];
var_dump($names);

var_dump($names[0]);

$names[1] = "Ari";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Ari";

var_dump(count($names));

$didik = array(
    "id" => "1",
    "name"=> "Didik Ariyanto",
    "age"=> 28,
    "address"=> array(
        "city"=> "Tuban",
        "country" => "Indonesia"
    )
);
var_dump($didik);
var_dump($didik['name']);
var_dump($didik['address']["country"]);

$ari = [
    "id" => "1",
    "name"=> "Ari Ariyanto",
    "age"=> 28,
    "address"=> [
        "city"=> "Tuban",
        "country" => "Indonesia"
    ]
];
var_dump($ari);
var_dump($ari['name']);
var_dump($ari['address']["country"]);
