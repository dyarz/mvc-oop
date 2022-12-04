<?php

class Controller
{
  public function view($view, $data = [])
  {
    # code...
    require_once '../app/views/' . $view . '.php';
  }
}
