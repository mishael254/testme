<?php
/**
for ($x = 0; $x<=10; $x++){
    echo "<br>$x";
}
 
//while loop

$x = 1;

while ($x<=19){
    echo "number $x <br>";
    $x = $x + 1;
}



// THE do while loop
$x = 11;
do {
    echo "number $x<br>";
    $x ++;
}while($x<=10);

//looping through arrays using for
$bestCars = ['lamboghini','ferrari','porche911','mustang'];

for($x = 0; $x<count($bestCars); $x++){
    echo $bestCars[$x];
}

//looping through arrays using foreach
$bestCars = ['lamboghini','ferrari5','porche911','mustang'];

foreach($bestCars as $bestCar){
    echo $bestCar;
}

//looping through arrays using foreach using also the index
$bestCars = ['lamboghini','ferrari5','porche911','mustang'];

foreach($bestCars as $index => $bestCar){
    echo"$index -- $bestCar <br>";
}
*/
//using associative arrays and foreach

$motorvehicles = [
    'sportsCars' => 'lamboghini',
    'tractors' => 'holland',
    'transits' => 'SCANIA',
];

foreach($motorvehicles as $key => $value){
    echo "$key - $value <br>";
}