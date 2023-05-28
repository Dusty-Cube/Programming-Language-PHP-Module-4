<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$new = [];

foreach($array as $num)
{
    echo $num, ' ';
} echo '<br/><br/>';
foreach($array as $index => $num)
{
    echo $index, ' => ', $num, '<br/>';
} echo '<br/>';
for($i = 0; $i < 20; $i++)
{
    echo $array[$i], ' ';
} echo '<br/><br/>';

$i = 0;
foreach($array as $num)
{
    $new[$i] = $array[$i] * 5;
    echo $new[$i], ' '; $i++;
}