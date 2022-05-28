<?php
function createName(){
    global $name;
    $name = "Didik";//local scope
    echo $GLOBALS["name"].PHP_EOL;
}
createName();
echo $name.PHP_EOL;