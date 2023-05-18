<?php

require_once __DIR__ . "/../Model/Users.php";

use Model\Users;


function show()
{
  $user = new Users;
  $user->show();
  foreach ($user->show() as $user) : ?>
    <tr>ID:<?= $user["user_id"]; ?> Name: <?= $user["user_name"]; ?></tr>
<?php
  endforeach;
}

function add()
{
  $user = new Users;

  $cubs[] = [
    "user_name" => "Normah Che Awang",
    "user_number" => "01111223366",
    "user_age" => "29"
  ];
  $cubs[] = [
    "user_name" => "ahmad albab",
    "user_number" => "01111223366",
    "user_age" => "29"
  ];
  $cubs[] = [
    "user_name" => "Akhmal Azim",
    "user_number" => "01111223366",
    "user_age" => "29"
  ];
  $cubs[] = [
    "user_name" => "khairul Azim",
    "user_number" => "01111223366",
    "user_age" => "29"
  ];
  $cubs[] = [
    "user_name" => "Azman Jailani",
    "user_number" => "01111223366",
    "user_age" => "29"
  ];
  $cubs[] = [
    "user_name" => "Siti Aishah",
    "user_number" => "01111223366",
    "user_age" => "29"
  ];
  $cubs[] = [
    "user_name" => "Aiman Tino",
    "user_number" => "01111223366",
    "user_age" => "29"
  ];
  $user->create($cubs);
  show();
}

function edit()
{
  $user = new Users;
  $data = [
    "user_name" => "Shaza"
  ];

  $user->update($data, 5);
  show();
}

function delete()
{
  $user = new Users;
  $id = [10, 11, 12, 13];
  $user->destroy($id);
  show();
}

Show();
