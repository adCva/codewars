<?php
// Write a function that when given a URL as a string, parses out just the domain name and returns it as a string. 

function domainName($url){
    $resault = preg_replace("/https:\/\/www.|http:\/\/www.|www.|https:\/\/|http:\/\//", "", $url);
    return explode(".", $b)[0];
}


// domainName("www.xakep.ru");
// domainName("http://github.com/carbonfive/raygun");
// domainName("https://www.zombie-bites.com");
// domainName("http://www.cnet.com");