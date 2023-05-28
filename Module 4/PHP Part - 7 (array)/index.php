<?php

$day = "Friday";
if($day == 'Saturday'){echo "Today is Saturday<br/>";}
elseif($day == 'Sunday'){echo "Today is Sunday<br/>";}
elseif($day == 'Friday'){echo "Today is Friday<br/>";}

$array = ['Nasim', 'Rahaman', 'Dusty', 'Cube', 71, 12.25];
echo $array[0], "<br/>", $array[1], "<br/>", $array[2], "<br/>", $array[3], "<br/>", $array[4], "<br/>", $array[5], "<br/>";
$line = array('POP', 'SMOKE', 'CARROT', 31.88);
if($line[0] === 'POP'){echo $line[0], "<br/>";}
if($line[1] == 'NOPE'){echo $line[1], "<br/>";}
elseif($line[2] == 'CARROT' && $line[3] === 31.88){echo "SUCCESS<br/>";}