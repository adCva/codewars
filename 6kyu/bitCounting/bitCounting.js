function countBits(n) {
    return Number(n.toString(2).split("").reduce((a, b) => Number(a) + Number(b)));
};