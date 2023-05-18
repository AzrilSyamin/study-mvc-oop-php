<?php

require_once __DIR__ . "/../Controllers/Users.php";

use Controllers\Users;

$user = new Users;
$user->tambah_data($_POST);
