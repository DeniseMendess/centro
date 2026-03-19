<?php

namespace app\Helpers;

class Validar
{
  // validação do campo nome
  public static function checarNome($nome)
  {
    if (!preg_match('/^[A-Za-zÀ-ÖØ-öø-ÿ]+(?:\s[A-Za-zÀ-ÖØ-öø-ÿ]+)*$/u', $nome)) {
      return true;
    } else {
      return false;
    }
  }

  // validação do campo email
  public static function validarEmail($email)
  {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
    }
  }
}
