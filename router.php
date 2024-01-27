<?php

$url = basename($_SERVER['PHP_SELF'], '.php');

$routes = [
  'home' => 'controller/home.php',
  'index' => 'controller/home.php',
  '/' => 'controller/home.php',
  'contact'=> 'controller/contact.php',
  'blog' => 'controller/blog.php',
  'about'=> 'controller/about.php',
];

function abort($code = 404) {
  require "controller/{$code}.php";

  die();
}

function routesToController($url, $routes) {
  if(array_key_exists($url, $routes)) {
    require $routes[$url];
  } else {
    abort();
  }
}

routesToController($url, $routes);