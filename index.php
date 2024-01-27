<?php

require 'functions.php';

require 'router.php';

$pdo = new PDO($connection);
$pdo->query("SELECT * FROM users");
$pdo->execute();