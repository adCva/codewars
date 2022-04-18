// Complete the method/function so that it converts dash/underscore delimited words into camel casing. The first word within the output should be capitalized only if the original word was capitalized (known as Upper Camel Case, also often referred to as Pascal case).

function toCamelCase(str){
    if (str === "") {
        return "";
    } else {
        if (/[A-Z]/.test(str[0])) {
            return str.split(/_|-/).map(el => el.replace(/\b\w/g, l => l.toUpperCase())).join("")  
        } else {
            return str.split(/_|-/).map(el => el.replace(/\b\w/g, l => l.toUpperCase())).join("").replace(/\b\w/g, l => l.toLowerCase())
        }
    }
}

toCamelCase("the-cammel-case")


// to_camel_case(""):
// to_camel_case("the_stealth_warrior"):
// to_camel_case("the-stealth_Warrior"):
// to_camel_case("The-Stealth-Warrior"):