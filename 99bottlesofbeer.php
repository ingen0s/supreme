<?php
function printVerse($bottles) {
    echo getBottlesText($bottles) . " of beer on the wall, " . getBottlesText($bottles) . " of beer.\n";
    if ($bottles > 0) {
        echo "Take one down and pass it around, " . getBottlesText($bottles - 1) . " of beer on the wall.\n\n";
    } else {
        echo "Go to the store and buy some more, 99 bottles of beer on the wall.\n\n";
    }
}

function getBottlesText($bottles) {
    if ($bottles === 0) {
        return 'no more bottles';
    } elseif ($bottles === 1) {
        return '1 bottle';
    } else {
        return "$bottles bottles";
    }
}

function singBottlesOfBeerSong() {
    for ($bottles = 99; $bottles >= 0; $bottles--) {
        printVerse($bottles);
    }
}

singBottlesOfBeerSong();
?>
