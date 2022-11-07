<?php

use Framework\App;
use frameWork\Database\Database;

require 'config.php';

require 'app/helpers.php';

require 'app/Models/Task.php';


$tasks = App::get('database')->selectAll('tasks');
//$database = new Database(App::get('config')['database']);
//$tasks = Database::selectAll('tasks');
//$tasks = Task::selectAll('tasks');

$greeting = greet();
