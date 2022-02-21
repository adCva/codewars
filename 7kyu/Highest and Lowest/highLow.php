<?php
function highAndLow($numbers)
{
    $array = explode(" ", $numbers);
    sort($array);
    $resault = "%d %d";
    return sprintf($resault, end($array), $array[0]);
}
