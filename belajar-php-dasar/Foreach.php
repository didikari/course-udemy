<?php

$names = ["Didik", "Ari", "Yanto"];

for ($i=0; $i < count($names); $i++){
    echo "data Ke $i = $names[$i]".PHP_EOL;
}

foreach ($names as $name) {
    echo "Data $name".PHP_EOL;
}

$person = [
    "firstname"=>"Didik",
    "middlename"=>"Ari",
    "lastname"=>"Yanto"
];

foreach($person as $key=>$value){
    echo "$key : $value".PHP_EOL;
}