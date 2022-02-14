<?php
function XO($s)
{
    $array = str_split($s);
    $count = 0;

    foreach ($array as $item) {
        if (strtolower($item) == "x") {
            $count++;
        } elseif (strtolower($item) == "o") {
            $count--;
        }
    }


    return $count === 0;
}
