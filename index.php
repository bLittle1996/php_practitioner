<?php
  $query = require 'core/bootstrap.php';
  try {
    require Router::load('routes.php')->direct(Request::uri(), Request::method());
  } catch(Exception $ex) {
    echo $ex->getMessage();
  }
 ?>
