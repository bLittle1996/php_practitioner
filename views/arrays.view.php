<?php include 'includes/header.php' ?>

<?php var_dump(array_column($posts, 'title')); ?>

Unpublished Posts
<pre>
  <?php var_dump($unpublished); ?>
</pre>
<br>
Published Posts
<pre>
  <?php var_dump($published); ?>
</pre>
Array Map
<pre>
  <?php var_dump($mappedArray); ?>
</pre>
<br>
<?php include 'includes/footer.php' ?>
