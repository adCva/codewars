function XO(str) {
    let array = str.split("");
    let count = 0;
    
      for (let i = 0; i < array.length; i++) {
        if (array[i].toLowerCase() === "x") {
          count++;
        } else if (array[i].toLowerCase() === "o") {
          count--;
        }
      }
    
    return count === 0;
}