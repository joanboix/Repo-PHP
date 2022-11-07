<?php

//use Framework\App;

use Framework\App;
use frameWork\Database\Connection;
use frameWork\Database\Database;

App::bind('config', require 'config.php');

App::bind('database', New Database(
    Connection::make(App::get('config')['database'])
));