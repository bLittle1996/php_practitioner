<?php
  $config = require 'config.php';
  require 'core/Router.php';
  require 'core/Request.php';
  require 'database/Connection.php';
  require 'database/QueryBuilder.php';


  return new QueryBuilder(Connection::make($config['database']));
 ?>
