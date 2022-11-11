<?php

namespace app\controllers;

use app\database\models\Fornecedor;
use app\traits\Read;

class ControllerFornecedor extends Base
{
    use Read;
    private $fornecedor;
    public function __construct()
    {
        $this->fornecedor = new Fornecedor();
    }
    public function listafornecedor($request, $response)
    {
        $fornecedor = $this->fornecedor->find();
        //RETORNAMOS A VIEW 
        return $this->getTwig()->render(
            $response,
            $this->setView("listafornecedor"),
            [
                "fornecedor" => $fornecedor,
                "lista" => HOME,
                "base_url" => BASE_URL,
                "descricao_label" => "Listagem de fornecedor"
            ]
        );
    }
}
