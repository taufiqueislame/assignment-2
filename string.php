<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($string) {
    $lowercaseString = strtolower($string);
    
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    
    $vowelCount = 0;
    
    for ($i = 0; $i < strlen($lowercaseString); $i++) {
        if (in_array($lowercaseString[$i], $vowels)) {
            $vowelCount++;
        }
    }
    
    return $vowelCount;
}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    
    $reversedString = strrev($string);
    
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}


