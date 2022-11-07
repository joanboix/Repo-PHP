<?php


use App\Models\Task;

function greet()
{
    $name = htmlspecialchars($_GET['name']);
    $surname = htmlspecialchars($_GET['surname']);

    return "Hola  $name $surname!";
}

function dd($xivato)
{
    var_dump($xivato);
    die();
}
