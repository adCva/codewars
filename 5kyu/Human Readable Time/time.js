// Write a function, which takes a non-negative integer (seconds) as input and returns the time in a human-readable format (HH:MM:SS).

function humanReadable (seconds) {
    let h = Math.floor(seconds / 3600);
    let hDisplay = h < 10 ? `0${h}` : h;
    let m = Math.floor((seconds / 60) % 60);
    let mDisplay = m < 10 ? `0${m}` : m;
    let s = Math.floor(seconds % 60);
    let sDisplay = s < 10 ? `0${s}` : s;

    return `${hDisplay}:${mDisplay}${sDisplay}`;
}


// OR.


function humanReadable (seconds) {
    let h = Math.floor(seconds / 3600);
    let m = Math.floor((seconds / 60) % 60);
    let s = Math.floor(seconds % 60);

    return `${h < 10 ? `0${h}` : h}:${m < 10 ? `0${m}` : m}:${s < 10 ? `0${s}` : s}`;
}


// humanReadable(359999)
// humanReadable(86399)
// humanReadable(60)
// humanReadable(5)
// humanReadable(0)