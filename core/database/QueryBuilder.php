<?php
  class QueryBuilder {
    protected $pdo;

    public function __construct(PDO $pdo) {
      $this->pdo = $pdo;
    }

    public function selectAll($table) {
      try {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
      } catch (Exception $ex) {
        die($ex->getMessage());
      }
    }

    public function insert($table, $params) {
      try {
      $query = sprintf("INSERT INTO %s (%s) VALUES (%s);",
        $table,
        implode(', ', array_keys($params)),
        ':' . implode(', :', array_keys($params))
      );
      $statement = $this->pdo->prepare($query);
      $statement->execute($params);
    } catch (PDOException $ex) {
      die('Oops...' . '<br>' . $ex->getMessage());
    }
    }
  }
 ?>
