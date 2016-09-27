<?php

  $query->insert('tasks', ['task' => $_POST['task']]);

  header('Location: /');
 ?>
