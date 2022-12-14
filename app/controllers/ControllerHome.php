<?php

namespace app\controllers;

class ControllerHome extends Base
{
    public function home($request, $response)
    {
        //RETORNAMOS A VIEW 
        return $this->getTwig()->render(
            $response,
            $this->setView("home"),
            [

                "lista" => HOME . "/listaproprio",
                "base_url" => BASE_URL,
                "descricao_label" => "Controle e cadastro de empresa"
            ]
        );
    }
}
