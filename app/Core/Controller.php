<?php

namespace app\Core;

class Controller
{
  public function model($model)
  {
    require_once '../app/Models/' . $model . '.php';
    $classe = 'app\\Models\\' . $model;

    return new $classe;
  }


  public function view($view, $dados = [])
  {
    $arquivo = ('../app/Views/' . $view . '.php');
    file_exists($arquivo) ? require_once $arquivo : die('Página não encontrada!');
  }

  public function renderLayout($view, $dados = [])
  {
    extract($dados);
    ob_start();
    require '../app/Views/' . $view . '.php';
    $content = ob_get_clean();

    require '../app/Views/layout/main.php';
  }
}
