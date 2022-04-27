# Write a function, which takes a non-negative integer (seconds) as input and returns the time in a human-readable format (HH:MM:SS).

def make_readable(seconds):
    hour = seconds // 3600
    minutes = seconds // 60
    minutes %= 60
    sec = seconds % (24 * 3600)
    sec %= 3600
    sec %= 60
    return "%02d:%02d:%02d" % (hour, minutes, sec)


# make_readable(359999)
# make_readable(86399)
# make_readable(60)
# make_readable(5)
# make_readable(0)