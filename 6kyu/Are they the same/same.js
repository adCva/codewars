// Given two arrays a and b write a function comp(a, b) (orcompSame(a, b)) that checks whether the two arrays have the "same" elements, with the same multiplicities (the multiplicity of a member is the number of times it appears). "Same" means, here, that the elements in b are the elements in a squared, regardless of the order.

function comp(array1, array2){
    if (array1 === null || array2 === null) {
        return false;
    } else if (array1.length !== array2.length) {
        return false;
    } else {
        return array1.map(el => el * el).sort((a, b) => a - b).join("") === array2.sort((a,b) => a - b).join("");
    }
}


// comp([121, 144, 19, 161, 19, 144, 19, 11], [null]);
// comp([121, 144, 19, 161, 19, 144, 19, 11], [121, 14641, 20736, 361, 25921, 361, 20736, 361]);
// comp([121, 144, 19, 161, 19, 144, 19, 11], [121, 14641, 20736, 361, 25921, 3615, 20736, 361]);