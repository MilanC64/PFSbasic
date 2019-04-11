<?php

//$tasks = $app['database']->selectAll('tasks');
//$users = $app['database']->selectAll('users');
$users = App::get('database')->selectAll('users');

require 'views/index.view.php';
