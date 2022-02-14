def descending_order(num):
    array = list(str(num))
    array.sort(reverse = True)
    return int(''.join(array))