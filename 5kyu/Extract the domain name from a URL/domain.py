# Write a function that when given a URL as a string, parses out just the domain name and returns it as a string. 

def domain_name(url):
    import re
    resault = re.sub("https://|http://|www.|https://www.|http://www.", "", url)
    return resault.split(".")[0]



# domainName("www.xakep.ru");
# domainName("http://github.com/carbonfive/raygun");
# domainName("https://www.zombie-bites.com");
# domainName("http://www.cnet.com");