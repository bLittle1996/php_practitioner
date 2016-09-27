<?php
  class Router {
    protected $routes = [
      'GET' => [],
      'POST' => []
    ];

    public function define($routes) {
      $this->routes = $routes;
    }

    public function dump_routes() {
      var_dump($this->routes);
    }

    public  function get($uri, $controller) {
      $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
      $this->routes['POST'][$uri] = $controller;
    }
    public static function load($file) {
      $router = new self;
      require $file;
      return $router;
    }
    public function direct($uri, $requestType) {
      $uri = trim($uri, '/');
      if (array_key_exists($uri, $this->routes[$requestType])) {
        return $this->routes[$requestType][$uri];
      }
      throw new Exception("Route does not exist.");
    }
  }
 ?>
