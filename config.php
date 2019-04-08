<?php

return [

  'database' => [

    'connection' => 'mysql:host=localhost',
    'dbname' => 'todos',
    'charset' => 'utf8',
    'userName' => 'root',
    'password' => '',
    'options' => [
      PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
    ]

  ]

];
