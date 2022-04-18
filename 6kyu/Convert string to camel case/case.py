# Complete the method/function so that it converts dash/underscore delimited words into camel casing. The first word within the output should be capitalized only if the original word was capitalized (known as Upper Camel Case, also often referred to as Pascal case).

def to_camel_case(text):
    if not text:
        return ""
    else:
        import re
        res = re.sub("-|_", " ", text).split
        resault = res[0]

        for word in res[1:]:
            resault = resault + word.capitalize()

        return resault


# to_camel_case(""):
# to_camel_case("the_stealth_warrior"):
# to_camel_case("the-stealth_Warrior"):
# to_camel_case("The-Stealth-Warrior"):