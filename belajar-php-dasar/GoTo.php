<?php

goto a;
echo "Hello World".PHP_EOL;

a:
echo "Hello A".PHP_EOL;

while(true){
    echo "while loop ke-$counter".PHP_EOL;
    $counter++;

    if($counter > 10 ){
    goto end;
    }
}
end:
echo "End Loop";