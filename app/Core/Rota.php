<?php

namespace app\Core;

class Rota
{
  private $controlador = 'LoginController';
  private $metodo = 'index';
  private $parametro = [];

  public function __construct()
  {
    $url = $this->url() ? $this->url() : [0];

    if (file_exists('../app/Controllers/' . ucwords($url[0]) . 'Controller.php')) {
      $this->controlador = ucwords($url[0]) . 'Controller';
      ucwords($url[0]);
    }

    $classe = 'app\\Controllers\\' . $this->controlador;
    $this->controlador = new $classe;

    if (isset($url[1])) {
      if (method_exists($this->controlador, $url[1])) {
        $this->metodo = $url[1];
        unset($url[1]);
      }
    }

    $this->parametro = $url ? array_values($url) : [];
    call_user_func_array([$this->controlador, $this->metodo], $this->parametro);
  }

  public function url()
  {
    $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);

    if (isset($url)) {
      $url = trim(rtrim($url, '/'));
      $url = explode('/', $url);

      return $url;
    }
  }
}
