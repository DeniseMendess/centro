<?php

namespace app\Helpers;

class Sessao_destroy
{
  public static function somenteLogado()
  {
    if (!isset($_SESSION['usuario_id'])) {
      header('Location: ' . URL . '/login');
      exit;
    }
  }

  public static function somenteAdmin()
  {
    self::somenteLogado();

    if (!isset($_SESSION['usuario_id']) || $_SESSION['tipo_usuario'] != ADMIN) {
      header('Location: ' . URL . '/login');
      exit;
    }
  }

  public static function somenteFuncionario()
  {
    self::somenteLogado();

    if ($_SESSION['tipo_usuario'] != FUNCIONARIO) {
      header('Location: ' . URL . '/login/');
      exit;
    }
  }
}
