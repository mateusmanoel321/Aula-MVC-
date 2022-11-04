<?php


//use Slim\Factory\AppFactory;

use app\database\models\Veiculos;

require "../vendor/autoload.php";

$veiculos = new Veiculos();
$fieldAndValuesCreate = [
        "ano" => "1995",
        "valor" => 22.124,
        "chassi" => "AFA5265FAGD",
        "placa" => "ASA-545"
];

$fieldAndValuesUpdate =[
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

$veiculos->create($fieldAndValuesCreate);
$veiculos->update($fieldAndValuesUpdate);

/*$app = AppFactory::create();
$app->addRoutingMiddleware();
define("BASE_URL", $app->getBasePath());

//INCLUIMOS AS CONFIGURAÇÕES
require "../app/helpers/config.php";
//INCLUIMOS TODAS AS ROTAS.
require "../app/routes/site.php";
//RUM APP
$app->run();*/
