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


$tasks = [

	'title' => 'Finish homework',

	'due'   => 'today',

	'assigned_to' => 'Rafael',

	'complete' => false // if(!$completed) {}

]; // title, due, assignned_to, completed



require_once 'view.php';