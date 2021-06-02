<?php

// Arrays
$fruits = [
    'Banana',
    'Orange',
    'Apple'
];

// Print the whole array
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Check if array element at index
isset($fruits[3]);

// Append element to array
$fruits[] = "Banana";
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Print the array length
echo count($fruits) . "<br>";

// Add array at the end of the array
array_push($fruits, "Manga");
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Remove element at the end of array
array_pop($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Add array at the begin of the array
array_unshift($fruits, "Manga");
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Remove element at the end of array
array_shift($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Split the string into array
$string = "Banana, Apple, Peach";
echo "<pre>";
var_dump(explode(",", $string));
echo "</pre>";

// Combine array elements into string
echo implode(" & ", $fruits);

// Check if any element exists in array
echo "<pre>";
var_dump(in_array("Manga", $fruits));
echo "</pre>";

// Search element index in the array
echo "<pre>";
var_dump(array_search("Apple", $fruits));
echo "</pre>";

// Merge two arrays
$vegetables = ['Potato', 'Cucumber'];
// $newarr = array_merge($fruits, $vegetables);
// OR
$newarr = [...$fruits, ...$vegetables];
print_r($newarr);

// Sorting of array (Reverse and)
echo "<pre>";
var_dump($fruits);
echo "</pre>";

rsort($fruits);

echo "<pre>";
var_dump($fruits);
echo "</pre>";

sort($fruits);

echo "<pre>";
var_dump($fruits);
echo "</pre>";
