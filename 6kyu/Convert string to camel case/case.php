<?php
// Complete the method/function so that it converts dash/underscore delimited words into camel casing. The first word within the output should be capitalized only if the original word was capitalized (known as Upper Camel Case, also often referred to as Pascal case).

function toCamelCase($str){
    $words = preg_replace("/\_|-/", " ", $str;

    if (preg_match("/[A-Z]/", $words[0])) {
        return str_replace(" ", "", ucwords($words));
    } else {
        return str_replace(" ", "", lcfirst(ucwords($words)));
    }
}


// toCamelCase("the_Stealth_Warrior");
// toCamelCase("The-Stealth-Warrior");