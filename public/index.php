<?php

require_once __DIR__ . "/../Controllers/Users.php";

$method = "/index.php?controller=";
$controller = "Users";

$user = new Controllers\Users;

if ($_SERVER["REQUEST_URI"] == "/" || $_SERVER["REQUEST_URI"] == "/index.php") {
  if ($_GET["controller"] == "") {
    $_GET["controller"] = "index";
    $method = $_GET["controller"];
    $user->$method();
  }
} else {
  $method = $_GET["controller"];
  $user->$method();
}
