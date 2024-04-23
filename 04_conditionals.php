<?php

/**
 * 
 * < Less Than
 * > Greater than
 * < less than or equal to
 * >= greater than or equal to
 * == equal to
 * === identical to
 * != not equal to 
 * !== not identical to
 * 
 * if statements
 * if (condition){
 *      //execution if the condition is true
 * }
 * 
 */
$age = 20;
$age = $age-10;
/*
if ($age == 20){
    echo "my age is $age";

}else if ($age >18 ){

    echo "i am older than 20";
}else{

    echo "too bad i am $age";
};

$t = date("H");
echo "$t\n";
if ($t<12){
    echo 'Goodmorning';
}elseif($t<15){
    echo 'good afternoon';
}elseif($t>15){
    echo 'good evening';
}

$cars = ["bugatti","lamboghini"];
if(empty($cars)){
    echo 'cars array is empty';
}else{
    var_dump($cars);
}

//tenary condition
$cars = ["bugatti","lamboghini"];
echo !empty($cars)? $cars[0] : "no data in cars array";

$firstCar = !empty($cars)? $cars[0] : "no data inserted";
echo $firstCar;
*/

$favcolour = 'green';
switch($favcolour){
    case 'red':
        echo 'your favourite colour is red';
        break;
    case 'green':
        echo 'your favourite colour is green';
        break;
    case 'orange':
        echo 'your favourite colour is orange';
        break;
    default:
        echo 'your favourite colour is not red green or orange';
        
}