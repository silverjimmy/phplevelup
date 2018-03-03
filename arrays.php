<?php
//variable that holds mulitple values
/*
    -indexed
    -Assoicative
    -Multi-dimensional
*/



//Indexed
$people = array('ben','louis','Ibra');
//echo $people[];

// $ids = array(23,55,12);
// echo $ids[2];

$cars =['c','a','r'];
// echo $cars[2];

// count($cars);
// echo count;

// print_r($cars);

// var_dump($cars);


//Assoicative
$people =['Brad' => 35,'Jose' => 32, 'William' => 37];
// echo $people['Brad'];
// $ids = [22 => 'Crad',44 => 'Jose'];
// echo $ids[22];

// Multidim
$cars = [['Honda',20,10],['Toyota',30,20],['Honda',23,10]];
echo $cars[1][2];


?>