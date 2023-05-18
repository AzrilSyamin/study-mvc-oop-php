<?php

namespace Core {

  class Controller
  {
    public function view($view, $data = [])
    {
      require_once __DIR__ . "/../Views/" . $view . ".php";
    }
    public function model($model)
    {
      require_once __DIR__ . "/../Model/" . $model . ".php";
      return new $model;
    }
  }
}
