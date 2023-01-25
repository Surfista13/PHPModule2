<?php

function orderDecroissant($val1,$val2){
    $array[0] = $val1;
    $array[1] = $val2;
    rsort($array);
    return $array;
}

$result = orderDecroissant(1,2);

var_dump($result);

