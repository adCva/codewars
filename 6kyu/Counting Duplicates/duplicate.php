<?php
// Write a function that will return the count of distinct case-insensitive alphabetic characters and numeric digits that occur more than once in the input string. The input string can be assumed to contain only alphabets (both uppercase and lowercase) and numeric digits.

function duplicateCount($text) {
    $string = str_split(strtolower($text), 1);
    asort($string);
    return count(array_unique(array_diff_key($string, array_unique($string))));
}


// duplicateCount("");
// duplicateCount("abcde");
// duplicateCount("aabBcde");
// duplicateCount("aabbcde");
// duplicateCount("Indivisibility");
// duplicateCount("Indivisibilities");



// Best practice
/*
    function duplicateCount($text) : int {
    $stats = array_count_values(str_split(strtolower($text)));
    return count(array_filter($stats, function($value) {return $value > 1;} ));
    }
*/