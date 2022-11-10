<?php


//use Slim\Factory\AppFactory;

use app\database\models\Veiculos;
use app\database\models\Proprietario;

require "../vendor/autoload.php";

$veiculos = new Veiculos();
$v_fieldAndValuesCreate = [
        "ano" => "1995",
        "valor" => 22.124,
        "chassi" => "AFA5265FAGD",
        "placa" => "ASA-545"
];

$v_fieldAndValuesUpdate =[
    "fields" => [
        "ano" => "1970",
        "valor" => 14.564,
        "chassi" => "4WTSGR5589SFA5D",
        "placa" => "WTS-254"
    ],

    "where" => [
        "id" => 4
    ]
];

$veiculos->create($v_fieldAndValuesCreate);
$veiculos->update($v_fieldAndValuesUpdate);

$proprietario = new Proprietario();

$p_fieldsAndValuesCreate = [
        "nome" => "Fulano",
        "sobrenome" => "Fulano",
        "cpf" => "100.000.000-00",
        "rg" => "100000-0",
        "cnh" => "10000000"
];

$p_fieldsAndValuesUpdate = [
    "fields" => [
        "nome" => "Ciclano",
        "sobrenome" => "Beltrano",
        "cpf" => "000.000.000-00",
        "rg" => "000000-0",
        "cnh" => "00000000"
    ],
    "where" => [
        "id" => 1
    ]
];

$proprietario->create($p_fieldsAndValuesCreate);
$proprietario->update($p_fieldsAndValuesUpdate);

/*$app = AppFactory::create();
$app->addRoutingMiddleware();
define("BASE_URL", $app->getBasePath());

//INCLUIMOS AS CONFIGURAÇÕES
require "../app/helpers/config.php";
//INCLUIMOS TODAS AS ROTAS.
require "../app/routes/site.php";
//RUM APP
$app->run();*/
