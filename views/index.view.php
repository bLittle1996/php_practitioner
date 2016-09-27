<?php include 'includes/header.php' ?>

<ul>
  <?php foreach($tasks as $task) : ?>
    <?php if($task->completed) : ?>
      <strike><li><?= $task->task ?></li></strike>
    <?php else: ?>
      <li><?= $task->task ?></li>
    <?php endif; ?>
  <?php endforeach; ?>
</ul>

<form method="POST" action="/add-task">
  <input name='task' type='text' placeholder="to do 'later'"></input>
  <button type='submit'>Submit</button>
</form>

<?php include 'includes/footer.php' ?>
