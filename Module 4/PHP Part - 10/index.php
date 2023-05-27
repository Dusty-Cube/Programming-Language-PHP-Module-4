<?php

$array = [
    'name' => 'The Dark Knight',
    'price' => '$ 4.95',
    'rating' => 'PG-13',
    'score' => 9
];
print_r($array); echo '<br/><br/>';

$i = 1;
while($i <= 10){
    echo $i, ' x 50 = ', $i*50, '<br/>';
    $i++;
}echo '<br/>';

$j = 50;
while($j > 0){
    echo $j, ' / 5 = ', $j/5, '<br/>';
    $j = $j - 5;
}