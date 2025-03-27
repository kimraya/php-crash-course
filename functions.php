<?php
$msg = "Hello this is my simple message";

function simpleMessage($msg)
{
    echo $msg;
}
// simpleMessage($msg);

// Parameter with default value
function defaultMsg ($name = "User") 
{
    echo "Hello, $name!";
}
// defaultMsg("Kim");

// Return from function
function calculation ($a, $b) 
{
    return $a + $b;
}

$result = calculation(5,4);

echo $result;


