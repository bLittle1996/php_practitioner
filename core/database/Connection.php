<?php
  class Connection {
    public static function make($config) {
      try {
        return new PDO(
          $config['driver'] . ':dbname=' . $config['dbname'] . ';host=' . $config['host'] . ';',
          $config['username'],
          $config['password'],
          $config['options']
        );
      } catch (PDOException $ex) {
        die($ex->getMessage());
      }
    }
  }
 ?>
