<?php

use app\controllers\ControllerCliente;
use app\controllers\ControllerFornecedor;
use app\controllers\ControllerHome;
use app\controllers\ControllerUsuario;

$app->get('/', ControllerHome::class . ":home");
$app->get('/listacliente', ControllerCliente::class . ':listacliente');
$app->get('/listafornecedor', ControllerFornecedor::class . ':listafornecedor');
$app->get('/listausuario', ControllerUsuario::class . ':listausuario');
