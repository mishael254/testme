<?php

//creating functions

function registerUser($firstName){

    echo "User registered $firstName";
}
registerUser("Mishael kk");

function sum ($val1,$val2){
    return $val1 + $val2;
}
$total_sum = sum(4,6);
echo "$total_sum<br>";

//anonymus functions
$total_sub = function($val1,$val2){
    if ($val1 == $val2){
        return "$val1 is the same as $val2";
    }elseif($val1 > $val2){
        return $val1 -$val2;
    }else{
        return "$val2 is greater";
    }
};

echo $total_sub(3,3).' = answer<br>';

//arrow functions
$multiply = fn($val1, $val2) => $val1 * $val2;


echo $multiply(3,7).'<br>';
