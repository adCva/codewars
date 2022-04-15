<?php
// Write an algorithm that takes an array and moves all of the zeros to the end, preserving the order of the other elements.

function moveZeros(array $items): array
{
    $notZero = [];
    $isZero = [];

    foreach($items as $number) {
      if (is_numeric($number) && intval($number) === 0) {
        array_push($isZero, $number);
      } elseif ($number !== 0) {
        array_push($notZero, $number);
      }
    }
    
    
    return array_merge($notZero, $isZero);
}


// moveZeros([1,2,0,1,0,1,0,3,0,1]);
// moveZeros([9,0.0,0,9,1,2,0,1,0,1,0.0,3,0,1,9,0,0,0,0,9]);
// moveZeros(["a",0,0,"b","c","d",0,1,0,1,0,3,0,1,9,0,0,0,0,9]);
// moveZeros(["a",0,0,"b",null,"c","d",0,1,false,0,1,0,3,[],0,1,9,0,0,0,0,9]);