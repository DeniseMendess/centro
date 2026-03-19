<?php

session_start();

use app\Core\Rota;
use Dotenv\Dotenv;

require_once '../vendor/autoload.php';
require_once '../app/configuracao.php';
require_once '../app/Helpers/Sessao_destroy.php';


$dotenv = Dotenv::createUnsafeImmutable(dirname(__DIR__));
$dotenv->load();

(new Rota);
