<?php

class Connection
{

  private static $pdoConnection;

  public static function make()
  {

    if (!self::$pdoConnection) {

      try {

        return new PDO('mysql:host=localhost;dbname=todos;charset=utf8', 'root', '');

      } catch (PDOException $e) {

        die($e->getMessage());

      }

    } else {

      return self::$pdoConnection;

    }

  }
  
}
