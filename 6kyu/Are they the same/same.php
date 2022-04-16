<?php
// Given two arrays a and b write a function comp(a, b) (orcompSame(a, b)) that checks whether the two arrays have the "same" elements, with the same multiplicities (the multiplicity of a member is the number of times it appears). "Same" means, here, that the elements in b are the elements in a squared, regardless of the order.

function comp($a1, $a2) {
    if ($a1 === null || $a2 === null) {
        return false;
    } elseif(count($a1) !== count($a2)) {
        return false;
    } else {
        $b = array_map(function($num) { return $num * $num; }, $a1);
        sort($b);
        sort($a2);

        return implode("", $b) == implode("", $a2);
    }
}


// comp([121, 144, 19, 161, 19, 144, 19, 11], [null]);
// comp([121, 144, 19, 161, 19, 144, 19, 11], [121, 14641, 20736, 361, 25921, 361, 20736, 361]);
// comp([121, 144, 19, 161, 19, 144, 19, 11], [121, 14641, 20736, 361, 25921, 3615, 20736, 361]);