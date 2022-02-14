def xo(s):
    array = list(s)
    count = 0
    
    for item in array:
        if item.lower() == "x":
            count += 1
        elif  item.lower() == "o":
            count -= 1
            
            
    return count == 0




xo("hello mate")