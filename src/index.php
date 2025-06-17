<?php
require_once "../vendor/autoload.php";
require_once "Routes/index.php";
require_once "Routes/web.php";

$path = $_SERVER['PATH_INFO'] ?? '/';
session_start();

// if (!array_key_exists('logado', $_SESSION) && $path === HOME) {
//   header('Location:'. LOGIN);
// }

routes($path);