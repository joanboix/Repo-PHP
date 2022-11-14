<?php

use Dotenv\Dotenv;
use Framework\App;
use frameWork\Database\Connection;
use Framework\Database\Database;

$dotenv = Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();


App::bind('config', require 'config.php');

App::bind('database', New Database(
    Connection::make(App::get('config')['database'])
));

