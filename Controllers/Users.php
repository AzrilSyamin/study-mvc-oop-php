<?php

namespace Controllers {

  require_once __DIR__ . "/../Core/Controller.php";
  require_once __DIR__ . "/../Model/Users.php";

  use Core\Controller;
  // use Model\Users;

  class Users extends Controller
  {
    public function index()
    {
      $data = [
        "name" => "Mamat Perantau",
        "umur" => "28",
        "data" => \Model\Users::show()
      ];
      $this->view("user/show", $data);
    }

    public function add()
    {
      if (isset($_POST["add"])) {
        if (\Model\Users::create($_POST) > 0) {
          echo "Gagal Menambah";
        } else {
          header("location:/");
        }
      } else {
        $this->view("user/add");
      }
    }

    public function edit()
    {
      if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $users = \Model\Users::findID($id);

        $user = [
          "user_name" => $users["user_name"],
          "user_number" => $users["user_number"],
          "user_age" => $users["user_age"]
        ];

        $this->view("user/edit", $user);

        if (isset($_POST["edit"])) {
          if (\Model\Users::update($_POST, $id) > 0) {
            header("location:/");
          } else {
            echo "gagal";
          }
        }
      }
    }

    public function delete()
    {
      if (isset($_GET["id"])) {
        $id[] = $_GET["id"];
        if (\Model\Users::destroy($id) > 0) {
          header("location:/");
        }
      }
      $this->view("user/delete");
    }
  }
}
