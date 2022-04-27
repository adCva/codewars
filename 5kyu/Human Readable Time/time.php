<?php
// Write a function, which takes a non-negative integer (seconds) as input and returns the time in a human-readable format (HH:MM:SS).

function human_readable($seconds) {
    $hours = floor($seconds / 3600);
    $minutes = floor(($seconds / 60) % 60);
    $seconds = $seconds % 60;
  
    return sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
}

// human_readable(359999);
// human_readable(86399);
// human_readable(60);
// human_readable(5);
// human_readable(0);