<?php

require_once "./vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


// var_dump($_ENV['TMP_DIR']);
echo $_ENV['CACHE_DIR'];
// echo gettype($_ENV['CACHE_DIR']);