<?php

$day = 'Friday';

if($day === 'Sunday'){echo "Today is Friday.<br/>";}
else{echo "Today is not Friday.<br/>";}
if($day === 'Friday'){echo "Today is really Friday.<br/>";}
if($day === 'Monday' || $day === 'Friday'){echo "Today is a holiday.<br/>";}
if($day === 'Monday' && $day === 'Friday'){echo "Today is a holiday.<br/>";}
else{echo "Not a holiday.<br/><br/>";}

$name1 = 'Nasim'; $name2 = 'Rahaman'; $num1 = 25; $num2 = 30;
$name1 .= ' '. $name2;
If($name1 === "Nasim Rahaman"){
    echo "My name is ", $name1 . "<br/>";
    $name1 = "Rahaman Nasim";
}
If($name1 === "Nasim Rahaman"){echo "Today is a good day.<br/>";}
else{echo "Today is not a good day<br/>";}
if($num1 % 5 == 0 && $num2 % 5 == 0){echo $num1, " & ", $num2, " are divisible by 5 <br/>";}
if(($num2 - $num1) % 2 == 0){echo 'yes';}else{echo "Not divisible by 2<br/>";}
if($num1 % 10 == 0 || $num2 % 10 == 0){echo "Divisible by 10<br/>";}