<?php

$array = [1, 2, 5, 10, 22, 3, 5, 10, 18, 18];

$unique_array = array_unique($array);
print_r($unique_array);

echo '<br/><br/>', count($array), '<br/>', count($unique_array);
echo '<br/>', array_sum($unique_array), '<br/>';

$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; echo "<br/>product = ", array_product($arr1), '<br/>';

