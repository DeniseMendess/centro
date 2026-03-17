<?php

use app\Core\Rota;
use Dotenv as Dotenv;

require_once '../vendor/autoload.php';
require_once '../app/configuracao.php';
require_once '../app/Helpers/autorizacao.php';


$dotenv = Dotenv\Dotenv::createUnsafeImmutable(dirname(__DIR__));
$dotenv->load();

(new Rota);
