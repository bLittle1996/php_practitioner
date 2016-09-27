<?php

  class Post {
    public $title;
    public $published;

    public function __construct($title, $published) {
      $this->title = $title;
      $this->published = $published;
    }
  }

  $posts = [
    new Post('My First Post', true),
    new Post('My Second Post', true),
    new Post('My Third Post', false),
    new Post('My Fourth Post', true),
    new Post('My Fifth Post', false)
  ];

  $unpublished = array_filter($posts, function ($post) {
    return !$post->published;
  });

  $published = array_filter($posts, function ($post) {
    return $post->published;
  });

  $mappedArray = array_map(function ($post) {
    $newPost = clone $post;
    $newPost->title = 'HURRAY';
    $newPost->published = true;
    return $newPost;
  }, $posts);

  $test = ["hello", "is", "it", "me", "you're", "looking", "for"];
  $testTwo = array_map(function ($index) {
    return 'No';
  });

  require 'views/arrays.view.php';
 ?>
