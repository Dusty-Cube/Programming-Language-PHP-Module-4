<?php

$name = "Nasim ";
$name .= "Rahaman";
echo $name . "<br/><br/>";

var_dump(10 > 5); var_dump(10 < 5); echo "<br/>";
var_dump(10 >= 5); echo "<br/>";
var_dump(0.01 <= 0.1); echo "<br/>";
var_dump(0.005 >= 0.11); var_dump(199 >= 199); echo "<br/>";
var_dump(21 == 99); var_dump(55.871 == 55.871); echo "<br/>";
var_dump(71 != 47); var_dump(71 != 71); echo "<br/>";
var_dump(30 === 30.0); var_dump(30.0 === 30.0); var_dump('30' === 30); var_dump('nasim' === 30); var_dump('30' == 30); var_dump('30' !== 30); echo "<br/><br/>";

$var1 = 30; $var2 = 30.0; $var3 = 15; $var4 = 15.0;
var_dump($var1 > $var3); var_dump($var1 < $var3); echo "<br/>";
var_dump($var2 >= $var3); var_dump($var1 <= $var4); echo "<br/>";
var_dump($var1 == $var2); var_dump($var3 != $var4); echo "<br/>";
var_dump($var1 === $var2); var_dump($var3 !== $var4);