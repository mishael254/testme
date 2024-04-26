<?php

$fruits = ["mangos","pineapples","bananas"];
//getting the length of the array
echo count($fruits);

//searching the array
//using the in_array function

var_dump(in_array("apple",$fruits));

//adding to the array

$fruits[] = "apple";
echo "<br>";
//print_r($fruits);

//adding into the array using array_push() - this adds to the end of the array

array_push($fruits, "grapes","avocados");
//array_unshift adds values in the array starting from the beginning
array_unshift($fruits,"tomatoes","kiwi");

//print_r($fruits);

//removing the objects from the array note that the two take only one argument
//from the end 
array_pop($fruits);
//print_r($fruits);

//from the beginning 
array_shift($fruits);
//print_r($fruits);

//removing specific objects from the array

//unset($fruits [3]);
//print_r($fruits);


//splitting into chunks
$chunkedArray = array_chunk($fruits,2);
//print_r($chunkedArray);
$colors = ["yellow","red","Green"];
$fruits = ["banana","apple","Avocado"];

$fruit_with_colors = array_combine($colors, $fruits);

//print_r($fruit_with_colors);

//flip fruits with colors

$flipped_fruits_with_colors = array_flip($fruit_with_colors);

//print_r($flipped_fruits_with_colors);
$numbers = range(1,20);
//print_r($numbers);

$assigning_names = function($number){
    return "Number $number";
};

$new_num_with_names = array_map($assigning_names,$numbers);
//print_r ($new_num_with_names);

$less_than_10 = array_filter($numbers, fn($number)=> $number <=10);
print_r($less_than_10);


$sum_of_numbers = array_reduce($numbers, fn($carry,$number)=> $carry + $number);
var_dump($sum_of_numbers);







 