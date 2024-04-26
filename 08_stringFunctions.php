<?php

$myString = "hello me and the world";
// gives the length of that string
echo (strlen($myString));

// finding the position of the first occurence of a substring in a string

var_dump(strpos($myString,"o"));

// finding the position of the last occurence of a substring in a string

var_dump(strrpos($myString,"o"));

//reversing a string 

echo (strrev($myString));
//converting all characters to lower case

echo (strtolower($myString));

//converting all the characters to upper
echo (strtoupper($myString));

//replacing a substring 
//First arg is the substring that you want to replace 
/**
 * 
 * the second arg is the new word or string that you want it to displace the initial substing
 * the third arg is the string var where you want all this to happen 
 * 
 */
echo (str_replace("hello","junior",$myString));

/**
 * 
 * want to get a potion , of the string 
 * use the substr function
 * 
 * with this function arg1 goes for the variable string 
 * the second arg is the starting-index of the the substing 
 * the third arg is the ending-index of the substring
 * 
 * 
 */
echo(substr($myString,0,5));


//starts with and ends with both return a boolean

if (str_starts_with($myString, "hello")){
    echo "YES";
}
//Ends with RETurns a boolean

if (str_ends_with($myString, "world")){

    echo "YESS";
}

