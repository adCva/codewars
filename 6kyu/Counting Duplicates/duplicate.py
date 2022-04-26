# Write a function that will return the count of distinct case-insensitive alphabetic characters and numeric digits that occur more than once in the input string. The input string can be assumed to contain only alphabets (both uppercase and lowercase) and numeric digits.

def duplicate_count(text):
    string = list(text.lower())
    return len(set([letter for letter in string if string.count(letter) > 1]))



# duplicate_count("");
# duplicate_count("abcde");
# duplicate_count("aabBcde");
# duplicate_count("aabbcde");
# duplicate_count("Indivisibility");
# duplicate_count("Indivisibilities");