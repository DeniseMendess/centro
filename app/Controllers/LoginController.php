<?php

namespace app\Controllers;

use app\Core\Controller;
use app\Helpers\Validar;

class LoginController extends Controller
{
  public function index()
  {
    $dados = [
      'email' => '',
      'senha' => '',
      'email_erro' => '',
      'senha_erro' => '',
      'login_erro' => ''
    ];

    $this->view('login/index', $dados);
  }

  public function logar()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

      $dados = [
        'email' => trim($formulario['email'] ?? ''),
        'senha' => trim($formulario['senha'] ?? ''),
        'email_erro' => '',
        'senha_erro' => '',
        'login_erro' => ''
      ];

      /* Verificação dos campos */
      if (empty($dados['email'])) {
        $dados['email_erro'] = 'Preencha o campo email';
      } elseif (Validar::validarEmail($dados['email'])) {
        $dados['email_erro'] = 'Email inválido';
      }

      if (empty($dados['senha'])) {
        $dados['senha_erro'] = 'Preencha o campo senha';
      }

      if (empty($dados['email_erro']) && empty($dados['senha_erro'])) {
        $usuarioModel = $this->model('Usuario');

        $usuario = $usuarioModel->checarLogin($dados['email'], $dados['senha']);

        if ($usuario) {
          $this->sessaoUsuario($usuario);

          if ($usuario->tipo_usuario == ADMIN) {
            header("Location: " . URL . "/admin/dashboard");
          } else {
            header("Location: " . URL . "/funcionario/dashboard");
          }

          exit;
        } else {
          $dados['login_erro'] = 'Email ou senha inválidos';
        }
      }

      $this->view('login/index', $dados);
    }
  }

  private function sessaoUsuario($usuario)
  {
    session_regenerate_id(true);

    $_SESSION['usuario_id'] = $usuario->id;
    $_SESSION['tipo_usuario'] = $usuario->tipo_usuario;
    $_SESSION['pessoa_id'] = $usuario->pessoa_id;
    $_SESSION['usuario_nome'] = $usuario->nome;
  }

  public function logout()
  {
    unset($_SESSION['usuario_id']);
    unset($_SESSION['tipo_usuario']);
    unset($_SESSION['pessoa_id']);
    unset($_SESSION['usuario_nome']);

    session_destroy();

    header("Location: " . URL . "/login");
    exit;
  }
}
