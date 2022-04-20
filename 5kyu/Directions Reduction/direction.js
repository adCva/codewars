// Once upon a time, on a way through the old wild mountainous west,…
// … a man was given directions to go from one point to another. The directions were "NORTH", "SOUTH", "WEST", "EAST". Clearly "NORTH" and "SOUTH" are opposite, "WEST" and "EAST" too. 
// Going to one direction and coming back the opposite direction right away is a needless effort. Since this is the wild west, with dreadfull weather and not much water, it's important to save yourself some energy, otherwise you might die of thirst!
// How I crossed a mountainous desert the smart way.
// The directions given to the man are, for example, the following (depending on the language):

function dirReduc(arr){
    let regExPatters = /NORTH SOUTH|SOUTH NORTH|EAST WEST|WEST EAST|/g;
    let x = arr.join(" ").toUpperCase().replace(regExPatters, "").replace(/\s+/g," ").replace(regExPatters, "");
    
    return x.split(" ").filter(el => el.length !== 0)
}


// dirReduc(["NORTH", "EAST", "NORTH", "EAST", "WEST", "WEST", "EAST", "EAST", "WEST", "SOUTH"]);
// dirReduc(["EAST", "NORTH", "EAST", "WEST"]);
// dirReduc(["NORTH", "SOUTH", "EAST", "WEST", "EAST", "WEST"]);
// dirReduc(["NORTH", "WEST", "SOUTH", "EAST"]);
// dirReduc(["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "WEST"]);