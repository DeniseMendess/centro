<?php

namespace app\Controllers;

use app\Core\Controller;

class LoginController extends Controller
{
  public function index()
  {
    $this->view('login/index');
  }
}
