function highAndLow(numbers){
    let high = Math.max(...numbers.split(" "));
    let low = Math.min(...numbers.split(" "));
    
    return `${high} ${low}`;
};