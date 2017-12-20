<?php

$sum = 0;

for ($i = 20; $i <= 45; $i++) {
    $fm = fmod($i, 5);
    
    if ($fm == 0) {
        $sum = $sum + $i;
        echo "$i divided by 5 \n";
    }

    #echo "$i = $fm \n";
}

echo "sum of numbers divided by 5 = $sum";

?>