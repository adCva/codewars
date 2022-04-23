// In this kata you are required to, given a string, replace every letter with its position in the alphabet.

function alphabetPosition(text) {
    const alphabet = 'abcdefghijklmnopqrstuvwxyz'.split('');
    return text.toLowerCase().split("").filter(el => alphabet.includes(el)).map(el => alphabet.indexOf(el) + 1).join(" ");
}


// alphabetPosition("text");
// alphabetPosition("The sunset sets at twelve o' clock.");
// alphabetPosition("The narwhal bacons at midnight.");