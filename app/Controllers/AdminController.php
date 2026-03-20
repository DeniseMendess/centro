<?php

namespace app\Controllers;

use app\Core\Controller;
use app\Helpers\Sessao_destroy;

class AdminController extends Controller
{
  public function dashboard()
  {
    Sessao_destroy::somenteAdmin();

    $this->renderLayout('admin/dashboard');
  }
}
