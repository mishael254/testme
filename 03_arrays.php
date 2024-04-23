<?php
//learning arrays
$numbers = [1,44,56,78];
$fruits = array('mangos','pineapples','oranges');

//var_dump($numbers);

//echo $fruits[0];

//associative arrays

$myColors = [
    1 => 'red',
    2 => 'blue',
    3 => 'orange',
    4 => 'green',
    5 => 'purple'
];

//echo $myColors[1];

$colorCodes = [
    'red' => '#FF3344',
    'blue' => '#335CFF',
    'orange' => '#FFA533',
    'green' => '#33FF39',
    'skyBlue' => '#33F3FF'
];

//echo $colorCodes['skyBlue'];

//multidimensional arrays


$workers = [

    [
        'name' => 'peter Kamau',
        'email' => 'peterk@gmail.com',
        'phone' => '0768345769',
        'address' => '776'
    ],
    [
        'name' => 'John Karanja',
        'email' => 'johnkaranjiz@gmail.com',
        'phone' => '0768565769',
        'address' => '774'
    ],
    [
        'name' => 'Esther nderitu',
        'email' => 'esthern@gmail.com',
        'phone' => '0778345764',
        'address' => '116'
    ]
    
    ];

    echo $workers[2]['phone'];
    var_dump(json_encode($workers));
    