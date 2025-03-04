<?php

// // Create array
// $fruits = ["Banana", "Apple", "Orange"];

// // Print the whole array
// for ($i = 0; $i < count($fruits); $i++) {
//      echo $fruits[$i] . "<br>";
// }

// // Check if array has element at index
// echo isset($fruits[2]); // true

// // Append element
// $fruits[] = "Cherry";

// for ($i = 0; $i < count($fruits); $i++) { //count() function to identify the length of the array
//      echo "New append " . $fruits[$i] . "<br>";
// }

// // add element at the end of the array
// array_push($fruits, 'Last item');

// for ($i=0; $i < count($fruits); $i++){
//      echo $fruits[$i]. "<br>";
// }

// // remove element at the end of the array
// array_pop($fruits);

// for ($i=0; $i < count($fruits); $i++){
//      echo $fruits[$i]. "<br>";
// }

// // add element at the beginning of the array
// array_unshift($fruits, "First item");

// for ($i=0; $i < count($fruits); $i++){
//      echo $fruits[$i]. "<br>";
// }

// // remove element at the end of the array
// $numbers = [1, 2, 3, 4, 5];
// //echo array_shift($numbers);

// // split the string into an array 
// $string = "Banana,Apple,Peach";
// var_dump(explode(",", $string));

// // combine array elements into string
// var_dump(implode("#", $numbers));

// // check if the elements exist in the array 
// var_dump(in_array(1, $numbers));

// // search element index in the array
// echo '<pre>';
// var_dump(array_search(8, $numbers));
// echo '</pre>';

// // merge two arrays
// $coffee = ['Latte', 'Americano', 'Machiatto'];
// $juice = ['Orange juice', 'Pineapple juice', 'Dalandan juice'];
// $mixed = array_merge($coffee, $juice); // Older PHP version
// $mixedModern = [...$coffee, ...$juice];// Modern PHP version

// for ($i = 0; $i < count($mixedModern); $i++){
//      echo $mixedModern[$i].", ";
// }

// //sorting of array (reverse order)
// $array = [5, 3, 8, 1];
// sort($array);
// echo '<pre>';
// var_dump($array);
// echo '</pre>';

// rsort($array);
// echo '<pre>';
// var_dump($array);
// echo '</pre>';

// create an associative array 
$person = [
     'name' => 'Kim',
     'surname' => 'Raya',
     'age' => '23',
     'hobbies' => ['Basketball', 'Gaming']
];

echo '<pre>';
var_dump($person);
echo '</pre>';

// utilized foreach to iterate array
foreach ($person as $key => $personalInformation){
     if(is_array($personalInformation)){
          echo ucfirst($key).":". implode(", ", $personalInformation) . "<br>";
     } else {
          echo ucfirst($key).":"."$personalInformation<br>";
     }
} 

// get element by key
echo $person["name"] . "<br>";

// set element by key
$person['channel'] = 'BigDaddy';
foreach ($person as $key => $personalInformation){
     if(is_array($personalInformation)){
          echo ucfirst($key).":". implode(", ", $personalInformation) . "<br>";
     } else {
          echo ucfirst($key).":"."$personalInformation<br>";
     }
} 

// Null coalascing assignment operator 
// if (!isset($person['address'])){ // if person address is not find
//      $person['address'] = 'Unknown'; // set the address to unknown
// }
$person['address'] ??= 'Unknown'; // shorter version 
foreach ($person as $key => $personalInformation){
     if(is_array($personalInformation)){
          echo ucfirst($key).":". implode(", ", $personalInformation) . "<br>";
     } else {
          echo ucfirst($key).":"."$personalInformation<br>";
     }
} 


// Print the keys of the array
var_dump(array_keys($person));
echo "<br>";

// print the values of the array
var_dump(array_values($person));

// Sorting associative arrays by values
// use ksort and asort function

// Two dimensional array
