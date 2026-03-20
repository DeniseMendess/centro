<?php

namespace app\Helpers;

class Sessao_destroy
{
  public static function logado()
  {
    if (!isset($_SESSION['usuario_id'])) {
      header('Location: ' . URL . '/login');
      exit;
    }
  }


  public static function somenteAdmin()
  {
    self::logado();

    if (!isset($_SESSION['usuario_id']) || $_SESSION['tipo_usuario'] != ADMIN) {
      header('Location: ' . URL . '/login');
      exit;
    }
  }


  public static function somenteFuncionario()
  {
    self::logado();

    if ($_SESSION['tipo_usuario'] != FUNCIONARIO) {
      header('Location: ' . URL . '/login');
      exit;
    }
  }
}
