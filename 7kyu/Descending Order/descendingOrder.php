<?php
function descendingOrder(int $n)
{
    $numbers = str_split(strval($n));
    rsort($numbers);
    $resault = (int)implode("", $numbers);

    return $resault;
}
