<?php

$query = require 'bootstrap.php';

$tasks = $query->selectAll('tasks', 'Task');

require 'index.view.php';
