def high_and_low(numbers):
    array = numbers.split()
    res = list(map(int, array))
    res.sort()
    return f'{res[-1]}' f' {res[0]}'