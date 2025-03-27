<?php

// Indexed array
$fruits = ["Apple", "Banana", "Cherry"];
// To accessed the array
// echo $fruits[0]. '<br>';

// Mixed type array
$mixedArray = [15, "String", true];
// var_dump($mixedArray);

// Associative Array
$user = [
     'name' => 'Kim',
     'age' => 32,
     'hobbies' => ['Coding', 'Tennis']
];

echo $user['name']. '<br>';

echo '<pre>';
var_dump($user);
echo '<pre>';


?>