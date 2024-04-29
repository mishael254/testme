<?php

/**
 * file handling is the ability of reading and writing 
 * files in a server 
 * php has some built in functions to handle files 
 * 
 */

 $file = "extras/users.txt";

 // function to check whether this file do exist

 if (file_exists($file)){
    //echo readfile($file);
    $handle = fopen($file,"r");
    $contents = fread($handle,filesize($file));
    fclose($handle);
    echo $contents;

 }else{
    //create the file 
    $handle = fopen($file,"w");
    $contents = 'brandnew' . PHP_EOL . 'escorte' . PHP_EOL . 'performante';
    fwrite($handle,$contents);
    fclose($handle);

 }