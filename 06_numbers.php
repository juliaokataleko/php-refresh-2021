<?php

// Numbers

// Declare numbers
$a = 5;
$b = 7;
$c = 1.2;

// Arithmetic operations
// echo $a + $b * $c . '<br>'; // First multiplication
// echo $a - $b . '<br>';
// echo $a * $b . '<br>';
// echo $a / $b . '<br>';
// echo $a % $b . '<br>'; // Module

// Assigment with math operators
// $a += $b; echo $a; // $a = $a + $b;
// $a -= $b; echo $a; // $a = $a + $b;
// $a *= $b; echo $a; // $a = $a + $b;
// $a /= $b; echo $a; // $a = $a + $b;
// $a %= $b; echo $a; // $a = $a + $b;

// Increment operator
// echo $a++; // echo $a; // First show then increment
echo ++$a . '<br>'; //  First increment then show

// Decrement operator
echo $a-- . '<br>';
echo --$a . '<br>';

// Number checking functions
is_float(1.25); // True
is_double(1.25); // True
is_int(12); // True
is_numeric("3.45"); // True

// Conversion
$strNumber = "12.34";
$floatNumber = (float) $strNumber;          // Cast number to float
$intNumber = (int) $strNumber;              // Cast number to float

// Or
$floatNumber = floatval($strNumber);        // Cast number to float
$intNumber = intval($strNumber);            // Cast number to float

// Number functions
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2, 3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';   // Round fractions down
echo "ceil(2.4) " . ceil(2.4) . '<br>';     // Round fractions up

// Formating numbers
$number = 123456789.12345;
echo "<h1>Formating numbers</h1>";
echo number_format($number, 2, ',', ' ');