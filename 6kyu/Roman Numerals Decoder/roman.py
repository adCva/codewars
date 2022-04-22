# Create a function that takes a Roman numeral as its argument and returns its value as a numeric decimal integer. You don't need to validate the form of the Roman numeral.
# Modern Roman numerals are written by expressing each decimal digit of the number to be encoded separately, starting with the leftmost digit and skipping any 0s. So 1990 is rendered "MCMXC" (1000 = M, 900 = CM, 90 = XC) and 2008 is rendered "MMVIII" (2000 = MM, 8 = VIII). The Roman numeral for 1666, "MDCLXVI", uses each letter in descending order.

def solution(roman):
    num = 0
    prev = 0
    stringList = list(roman)[::-1]
    symbols = {'I': 1, 'V': 5, 'X': 10,  'L': 50, 'C':100, 'D': 500, 'M': 1000}

    for letter in stringList:
        if symbols[letter] < prev:
            num = num - symbols[letter]
            prev = symbols[letter]
        else:
            num = num + symbols[letter]
            prev = symbols[letter]

    return num



# solution("XIV");
# solution("XXI");
# solution("I");
# solution("IV");
# solution("MMVIII");
# solution("MDCLXVI");