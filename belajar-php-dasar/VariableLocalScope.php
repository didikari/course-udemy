<?php
function createName(){
    $name = "Didik";//local scope
}
createName();
echo $name.PHP_EOL;