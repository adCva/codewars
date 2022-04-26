// Write a function that will return the count of distinct case-insensitive alphabetic characters and numeric digits that occur more than once in the input string. The input string can be assumed to contain only alphabets (both uppercase and lowercase) and numeric digits.
 
function duplicateCount(text){
    let arr = text.toLowerCase().split("").sort();
    let resault = arr.filter((el, i) => i !== arr.indexOf(el));
    return [...new Set(resault)].length;
}


// duplicateCount("");
// duplicateCount("abcde");
// duplicateCount("aabBcde");
// duplicateCount("aabbcde");
// duplicateCount("Indivisibility");
// duplicateCount("Indivisibilities");