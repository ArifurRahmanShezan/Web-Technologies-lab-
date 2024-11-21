<?php
// Sample arrays
$numericArray = [3, 1, 4, 1, 5, 9, 2];
$stringArray = ["apple", "orange", "banana", "grape"];

// Using sort() with SORT_NUMERIC
sort($numericArray);
echo "Numeric array sorted in ascending order (SORT_NUMERIC): ";
print_r($numericArray);
echo "<br>";

// Using sort() with SORT_STRING
sort($stringArray, SORT_STRING);
echo "String array sorted in ascending order (SORT_STRING): ";
print_r($stringArray);
echo "<br>";

// Using rsort() with SORT_NUMERIC
rsort($numericArray, SORT_NUMERIC);
echo "Numeric array sorted in descending order (SORT_NUMERIC): ";
print_r($numericArray);
echo "<br>";

// Using rsort() with SORT_STRING
rsort($stringArray, SORT_STRING);
echo "String array sorted in descending order (SORT_STRING): ";
print_r($stringArray);
?>
