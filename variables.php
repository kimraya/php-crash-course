<?php
    $fullName = 'Kim L. Raya'; // String
    $age = 25;  // Integer
    $isMale = true; // Boolean  
    $height = 1.7;  // Float
    $salary = null; // Null


    // Print types of the variable
    echo gettype($fullName). '<br>';
    echo gettype($age). '<br>';
    echo gettype($isMale). '<br>';
    echo gettype($height). '<br>';
    echo gettype($salary). '<br>';

    // Print the whole variable
    var_dump($fullName, $age, $isMale, $height, $salary).'<br>';

    // Variable checking functions
    is_string($fullName);
    is_int($age);
    is_bool($isMale);
    is_double($height);

    // Check if variable is defined
    isset($name);

    // Constants
    define('PI', 3.14);
    echo (PI). '<br>';

    // Using PHP built-in constants
    echo SORT_ASC. '<br>';
    echo PHP_INT_MAX. '<br>';
    echo "push";
?>