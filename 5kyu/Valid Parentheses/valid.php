<?php
// // Write a function that takes a string of parentheses, and determines if the order of the parentheses is valid. The function should return true if the string is valid, and false if it's invalid.

function validParentheses(String $parens): string
{
    $resault = preg_replace("/\(\)|[a-zA-Z]/", "", $parens);

    while (preg_match("/\(\)/", $resault)) {
        $temp = $resault;
        $resault = preg_replace("/\(\)/", "", $temp);
    }

    return strlen($resault) === 0;
}


// validParentheses("((((()()()(((())))))))(");  
// validParentheses("(((())))(");