<?php

switch (basename($_SERVER['PHP_SELF'], '.php')) {
  case 'index':
  case 'home':
    require 'home.php';
    break;
  case 'contact':
    require 'contact.php';
    break;
  case 'blog':
    require 'blog.php';
    break;
  case 'about':
    require 'about.php';
    break;
  default:
    http_response_code(404);
    // redirect
    header('location:404.php');
    break;
}