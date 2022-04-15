# // Write a function that takes a string of parentheses, and determines if the order of the parentheses is valid. The function should return true if the string is valid, and false if it's invalid.

def valid_parentheses(string):
    import re
    res = re.sub("\(\)|[a-zA-Z]", "", string)

    while re.search("\(\)", res):
        temp = res
        res = re.sub("\(\)", "", temp)
         
    return len(res) == 0



# validParentheses("((((()()()(((())))))))(");  
# validParentheses("(((())))(");
# validParentheses("hi(hi)()");    