<?php

if (1 == 2) {
    echo "Sí";
} else {
    echo "No";
}

if (1 == 2):
    echo "Sí";
    $x = 0;
    while ($x < 10):
        echo "Vale" . $x;
        $x++;
    endwhile;
else:
    echo "No";
endif;

switch (4):
    case 0:
        echo "Es 0";
        break;
    case 1:
        echo "Es 1";
endswitch;

$a = [24 => 'a', 33 => 'b', 17 => 'c'];

$m = 1;
$me = 2;

echo "{$a[24]}";

foreach ($a as $k => $v):
#    echo $k . " => " . $v . "\n";
    echo "$k => $v\n";
endforeach;
