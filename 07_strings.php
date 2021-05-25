<?php

// Strings

$name = "Jiji Corp";
$about = "I am the future";
// Single quotation cannot print variables
$string = 'Hello. My Name is ' . $name . ', ' . $about; 

// Double quotation can print variables
$string2 = "Hello. My Name is $name, $about";
echo $string . '<br>';
echo $string2 . '<br>';

// String concatenation
echo 'Hello ' . ' World' . ' From Jiji Corp' . '<br>';

$string = "     Hello Jiji     ";
// String functions
echo "1 - " . strlen($string) . '<br>';
echo "2 - " . trim($string) . '<br>';
echo "3 - " . ltrim($string) . '<br>';
echo "4 - " . rtrim($string) . '<br>';
echo "5 - " . str_word_count($string) . '<br>';
echo "6 - " . strrev($string) . '<br>';
echo "7 - " . strtolower($string) . '<br>';
echo "8 - " . strtoupper($string) . '<br>';
echo "9 - " . ucfirst($string) . '<br>';
echo "10 - " . lcfirst($string) . '<br>';
echo "11 - " . ucwords($string) . '<br>';
echo "12 - " . strpos($string, 'Jiji') . '<br>';
echo "13 - " . stripos($string, 'Jiji') . '<br>';

echo "14 - " . substr($string, 8, 6) . '<br>';
echo "15 - " . str_replace("jiji", 'Juju', $string) . '<hr>';
// str_ireplace igonores sensitive case 
echo "16 - " . str_ireplace("jiji", 'Juju', $string);

// Multiple lines text

$longText = "
    Hello, my name is <b>Jiji</b>,
    I am <b>1 year</b>,
    I love to walk with my fathers
";

echo "<hr> $longText <br>";
echo nl2br($longText) . '<hr>';

// Multiple lines text with html tags
echo htmlentities($longText) . '<hr>';

echo nl2br(htmlentities($longText)) . '<hr>';