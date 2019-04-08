<?php

class Connection
{

  private static $pdoConnection;

  public static function make(array $config)
  {

    if (!self::$pdoConnection) {

      try {

        return new PDO(
                        $config['connection'] . ';dbname=' . $config['dbname'] . ';charset=' .
                        $config['charset'] . ';',
                        $config['userName'],
                        $config['password'],
                        $config['options']
                      );

      } catch (PDOException $e) {

        die($e->getMessage());

      }

    } else {

      return self::$pdoConnection;

    }

  }

}
