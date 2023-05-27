<?php

$trigger = 0;
for($i = 20; $i > 1; $i--)
{
    for($j = 2; $j <= $i / 2; $j++)
    {
        if($i % $j == 0)
        {
            $trigger = 1; break;
        }
    }
    if($trigger == 0) echo $i, " is a prime number<br/>";
    if($trigger == 1) echo $i, " is not a prime number<br/>";
    $trigger = 0;
}