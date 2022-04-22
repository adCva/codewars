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


// Best practice:

/*
function solution ($roman) {

    $number = 0;
    $roman_length = strlen($roman);
    
    $arr = [
      'I' => 1,
      'V' => 5,
      'X' => 10,
      'L' => 50,
      'C' => 100,
      'D' => 500,
      'M' => 1000,
    ];
    
    for ($i = 0; $i < $roman_length; $i++) {
      
      if ($arr[$roman{$i}] < $arr[$roman{$i + 1}]) {
        $number -= $arr[$roman{$i}];
      } else {
        $number += $arr[$roman{$i}];
      }
    }
    
    return $number;
  }



function solution ($roman) {
  $number = 0;
  $numerals = array("CM" => 900, "M" => 1000, "CD" => 400, "D" => 500, "XC" => 90, "C" => 100, "XL" => 40, "L" => 50, "IX" => 9, "X" => 10, "IV" => 4, "V" => 5, "I" => 1);
  
  foreach ($numerals as $numeral => $value) {
    $roman = str_replace($numeral, "", $roman, $count);
    $number += $count * $value;
  }
  
  return $number;
}


function solution ($roman) {
  $patterns = ['/IV/','/IX/','/XL/','/XC/','/CD/','/CM/','/I/','/V/','/X/','/L/','/C/','/D/','/M/'];
  $replacements = ['4/','9/','40/','90/','400/','900/','1/','5/','10/','50/','100/','500/','1000/'];
  $str_num = preg_replace($patterns,$replacements,$roman);
  $arr_num = explode('/',$str_num,-1);
  return array_sum($arr_num);
}