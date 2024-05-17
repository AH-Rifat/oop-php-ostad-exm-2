<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
  // Count vowels
  $vowel_count = 0;
  $string_lower = strtolower($string); 
  $vowels = ['a', 'e', 'i', 'o', 'u'];
  foreach (str_split($string_lower) as $char) {
    if (in_array($char, $vowels)) {
      $vowel_count++;
    }
  }

  // Reverse the string
  $reversed_string = strrev($string);

  // Output original string, vowel count, and reversed string
  echo "Original String: $string, Vowel Count: $vowel_count, Reversed String: $reversed_string\n";
}
