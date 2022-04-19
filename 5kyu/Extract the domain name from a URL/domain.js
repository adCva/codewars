// Write a function that when given a URL as a string, parses out just the domain name and returns it as a string. 

function domainName(url){
    return url.replace(/http:\/\/www.|https:\/\/www.|www.|http:\/\/|https:\/\//, "").split(".")[0];
}


// domainName("www.xakep.ru");
// domainName("http://github.com/carbonfive/raygun");
// domainName("https://www.zombie-bites.com");
// domainName("http://www.cnet.com");
