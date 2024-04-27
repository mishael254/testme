<?php

/**
 * cookie this is a mechanizim for storing data in a remote
 * browser and thus tracking or identifying return users.You 
 * can set specific data to be stored in the browser, and then
 * get to retrive it when the user gets to visit the site again
 * 
 */

 setcookie("name","mishael",time()+86400*30);

 if(isset($_COOKIE["name"])){
    echo $_COOKIE["name"];

 }

 //deleting a cookie
 setcookie("name","",time()-86400);