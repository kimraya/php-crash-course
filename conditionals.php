<?php

$age = 20;
$salary = 300000;

// ternary if 
echo $age  < 22 ? 'Young' : 'Old';

// switch
$userRole = 'bilat';
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Invalid';
}

?>