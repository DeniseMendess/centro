<?php

namespace app\Helpers;

class Validar
{
  /* Validação do nome */
  public static function validarNome($nome)
  {
    if (!preg_match('/^[A-Za-zÀ-ÖØ-öø-ÿ]+(?:\s[A-Za-zÀ-ÖØ-öø-ÿ]+)*$/u', $nome)) {
      return true;
    }
    return false;
  }

  /* Validação do email */
  public static function validarEmail($email)
  {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    }
    return false;
  }
}
