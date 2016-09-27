<?php
  return [
    'database' => [
      'dbname' => 'php_practitioner_todo',
      'username' => 'postgres',
      'password' => 'OmicronPerseii',
      'driver' => 'pgsql',
      'host' => 'localhost',
      'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ]
    ]
  ];
 ?>
