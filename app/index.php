<?php

//QUERY STRING
//var_dump ($_GET['name']);
//name = "Joan";

function greet() {
    $name = htmlspecialchars($_GET['name']);
    $surname = htmlspecialchars($_GET['surname']);

    return "Hola  $name $surname!";
}

$greeting = greet();
//$greeting = 'Hola ' . $_GET['name'];

