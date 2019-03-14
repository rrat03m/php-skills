<?php



// Array
$animals = ['dog', 'cat'];
$animals = ['elephant'];



$person = [

	'age' => 31,

	'hair' => 'black',

	'carrer' => 'Programador'

];

$person['name'] = 'Rafael';

unset($person['age']);


// echo $person['age'];


// die(var_dump($person));

require_once 'view.php';