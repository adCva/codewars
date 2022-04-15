// Write a function that takes a string of parentheses, and determines if the order of the parentheses is valid. The function should return true if the string is valid, and false if it's invalid.

function validParentheses(parens) {
    let resault = parens.replace(/\(\)/g, "");
    
    while (/\(\)/.test(resault)) {
      let temp = resault;
      resault = temp.replace(/\(\)/g, "");
    }
    
    return resault.length > 0 ? false : true;
  }


// validParentheses("())(");
// validParentheses("((");
// validParentheses("(");  
// validParentheses("((((()()()(((())))))))(");  
// validParentheses("(((())))(");