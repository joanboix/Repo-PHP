<?php


function greet() {
$name = htmlspecialchars($_GET['name']);
$surname = htmlspecialchars($_GET['surname']);

return "Hola  $name $surname!";
}