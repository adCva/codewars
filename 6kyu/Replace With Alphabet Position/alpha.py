# In this kata you are required to, given a string, replace every letter with its position in the alphabet.

def alphabet_position(text):
    string = list(text.lower())
    alphabet = list("abcdefghijklmnopqrstuvwxyz")
    resault = ""

    for letter in string:
        if letter in alphabet:
            resault = resault + " " + str(alphabet.index(letter) + 1)
            
            
    return resault.strip()



# alphabet_position("text");
# alphabet_position("The sunset sets at twelve o' clock.");
# alphabet_position("The narwhal bacons at midnight.");