def high_and_low(numbers):
    array = numbers.split()
    array.sort()
    return array[0], array[-1]