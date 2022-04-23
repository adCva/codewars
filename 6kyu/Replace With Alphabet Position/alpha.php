<?php
// In this kata you are required to, given a string, replace every letter with its position in the alphabet.

function alphabet_position(string $s): string {
    $alphabet = str_split('abcdefghijklmnopqrstuvwxyz', 1);
    $resault = [];

    foreach(str_split(strtolower($s), 1) as $letter) {
      if (in_array($letter, $alphabet)) {
        array_push($resault, array_search($letter, $alphabet) + 1);
      }
    }

    return implode(" ", $resault); 
}


// alphabet_position("text");
// alphabet_position("The sunset sets at twelve o' clock.");
// alphabet_position("The narwhal bacons at midnight.");