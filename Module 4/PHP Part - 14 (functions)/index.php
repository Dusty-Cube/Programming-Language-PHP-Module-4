<?php

function sum($var1, $var2) {echo $var1 + $var2;}
$num1 = 25; $num2 = 35;
sum($num1, $num2); echo '<br/>';
sum(150, 29);

function line() {echo "<br/>If you misuse a power that’s all too great, you will only destroy yourself<br/>";}
line();

function primenumbers($start, $end)
{
    $trigger = 0; $prime = 0; 
    for($i = $end; $i >= $start; $i--)
    {
        for($j = 2; $j <= $i / 2; $j++)
        {
            if($i % $j == 0){$trigger = 1; break;}
        }
        if($trigger == 0){$prime++;}
        else{$trigger = 0;}
    }
    if($start == 1){echo "<br/>There are ", $prime - 1, " prime numbers";}
    else{echo "<br/>There are ", $prime, " prime numbers";}
}

primenumbers(1, 20);
primenumbers(21, 40);
primenumbers(41, 100);