<?php

namespace app\Models;

use app\Core\Database;

class Usuario
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function checarEmail($email)
  {
    $this->db->query("SELECT email FROM usuario WHERE email = :e");
    $this->db->bind(":e", $email);

    if ($this->db->resultado()) {
      return true;
    }
    return false;
  }

  public function checarLogin($email, $senha)
  {
    $this->db->query("SELECT usuario.*, pessoa.nome FROM usuario INNER JOIN pessoa ON pessoa.id = usuario.pessoa_id WHERE usuario.email = :e");
    $this->db->bind(":e", $email);

    if ($this->db->resultado()) {
      $resultado = $this->db->resultado();

      if (password_verify($senha, $resultado->senha)) {
        return $resultado;
      }
      return false;
    }
    return false;
  }
}
