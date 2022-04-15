// Write an algorithm that takes an array and moves all of the zeros to the end, preserving the order of the other elements.
// Ex: [1,2,0,1,0,1,0,3,0,1] => [1, 2, 1, 1, 3, 1, 0, 0, 0, 0]

function moveZeros(arr) {
    return [...arr.filter(el => el !== 0), ...arr.filter(el => el === 0)];
}


// moveZeros([1,2,0,1,0,1,0,3,0,1]);
// moveZeros([9,0.0,0,9,1,2,0,1,0,1,0.0,3,0,1,9,0,0,0,0,9]);
// moveZeros(["a",0,0,"b","c","d",0,1,0,1,0,3,0,1,9,0,0,0,0,9]);
// moveZeros(["a",0,0,"b",null,"c","d",0,1,false,0,1,0,3,[],0,1,9,0,0,0,0,9]);