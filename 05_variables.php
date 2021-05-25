<?php

// What is a variable?

/**
 * In programming, a variable is a value that can change, 
 * depending on conditions or on information passed to 
 * the program. Typically, a program 
 * consists of instructions 
 * that tell the computer 
 * what to do and data that the program 
 * uses when it is running.
 */

// Variables types
/**
 * String, Integer, Float, Boolean,
 * Null, Array, Object, Resource
 */

// Declare variables
$name   = "Julião";
$age    = 26;
$isMale = false;
$height = 1.80;
$salary = null;

// Print variables
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print the type of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Printing the whole variable
var_dump($name, $age, $height, $isMale, $salary);

// Change the value of the variable
$name = false;

// Print the type of the variables
echo gettype($name) . '<br>';

// Variable check functions
is_string($name);
is_int($age);
is_bool($isMale);
is_double($salary);
is_null($salary);

// Check if variable is defined
isset($name); // Return bool (True)
isset($address); // False

// Constants
define("PI", 3.14);
echo PI . '<br>';

// Using PHP built-in constants
echo SORT_ASC . '<br>';
echo PHP_INT_MAX  . '<br>';