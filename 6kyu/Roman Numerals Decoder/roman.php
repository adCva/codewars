<?php

// Create a function that takes a Roman numeral as its argument and returns its value as a numeric decimal integer. You don't need to validate the form of the Roman numeral.
// Modern Roman numerals are written by expressing each decimal digit of the number to be encoded separately, starting with the leftmost digit and skipping any 0s. So 1990 is rendered "MCMXC" (1000 = M, 900 = CM, 90 = XC) and 2008 is rendered "MMVIII" (2000 = MM, 8 = VIII). The Roman numeral for 1666, "MDCLXVI", uses each letter in descending order.

function solution($roman) {
    $num = 0;
    $string = str_split($roman, 1);
    $symbols = ["I"=>1, "V"=>5, "X"=>10, "L"=>50, "C"=>100, "D"=>500, "M"=>1000];
    $specialSymbols = ["IV"=>4, "IX"=>9, "XL"=>40, "XC"=>90, "CD"=>400, "CM"=>900];

	while (preg_match("/IV|IX|XL|XC|CD|CM/", implode("", $string))) {
      for ($i = 0; $i <= count($string); $i++) {
          if (in_array($string[$i].$string[$i + 1], array_keys($specialSymbols))) {
              $num = $num + $specialSymbols[$string[$i].$string[$i + 1]];
              array_splice($string, array_search($string[$i], $string), 2);
          }
      }
    }
    
    if (count($string) > 0) {
      foreach($string as $roman){
          $num = $num + $symbols[$roman];
      }
    }

    return $num;
}



// solution("XIV");
// solution("XXI");
// solution("I");
// solution("IV");
// solution("MMVIII");
// solution("MDCLXVI");