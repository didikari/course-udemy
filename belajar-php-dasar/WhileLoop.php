<?php
$counter =1;
while($counter <= 10 ){
    echo "while loop ke-$counter".PHP_EOL;
    $counter++;
}
while($counter <= 10 ):
    echo "while loop ke-$counter".PHP_EOL;
    $counter++;
endwhile;