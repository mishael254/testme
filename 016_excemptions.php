<?php

/**
 * excemptions model is just like the other programing languages, 
 * an excemption can be thrown and caught
 * the code may be surrounded in a try block to facilitate the
 * catching of potentiol exceptions. each try must have atleast one 
 * corresponding catch or finally block
 */

 function inverse($x){
    if(!$x){
        throw new Exception("Division by zero");
    }
    return 1/$x;
 }

 try {
    echo inverse(5);
    echo inverse(0);

 }catch(Exception $e){
    echo "Caught exception, $e ->getMessage()";
 } finally {
    echo "first finally";
 }
 try {
    echo inverse(5);
    echo inverse(0);

 }catch(Exception $e){
    echo "Caught exception, $e ->getMessage()";
 } finally {
    echo "Second finally";
 }