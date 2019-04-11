<?php

class QueryBuilder
{
  private $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table)
  {

      $statement = $this->pdo->prepare("SELECT * FROM {$table}");

      $statement->execute();

      return $statement->fetchAll(PDO::FETCH_CLASS);

  }

  public function insert($table, $parameters)
  {
    //insert into %s (%s) values (:name);
    $sql = sprintf(

      'insert into %s (%s) values (%s)',

      $table,

      implode(', ', array_keys($parameters)),

      ':' . implode(', :', array_keys($parameters))

    );

    try {

      $statement = $this->pdo->prepare($sql);

      //$statement->bindParam(':name', 'Some Name');
      //$
      $statement->execute($parameters);

      return true;

    } catch (Exception $e) {

      die('Whoops something went wrong!');

    }

  }
  
}
