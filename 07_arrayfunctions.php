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
//$chunkedArray = array_chunk($fruits,3);
//print_r($chunkedArray);

$numbers1 = [1,2,3,4,5,6];
$numbers2 = [7,8,9,10];

$num1_and_num2 = array_merge($numbers1,$numbers2);
//print_r($num1_and_num2);

//combining arrays

$fruits = ["avocados","Apples", "bananas"];
$colors = ["Green", "Red", "Yellow"];
 
$fruits_description = array_combine($colors,$fruits);

//print_r($fruits_description);
$flipped_values = array_flip($fruits_description);
//print_r($flipped_values);

$numbers5 = range(1,20);

print_r($numbers5);



 