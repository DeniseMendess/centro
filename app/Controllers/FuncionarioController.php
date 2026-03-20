<?php

namespace app\Controllers;

use app\Core\Controller;
use app\Helpers\Sessao_destroy;

class FuncionarioController extends Controller
{
  public function dashboard()
  {
    Sessao_destroy::somenteFuncionario();

    $this->renderLayout('funcionario/dashboard');
  }
}
