<?php

namespace app\controllers;

use app\database\models\Usuario;
use app\traits\Read;

class ControllerUsuario extends Base
{
    use Read;
    private $usuario;
    public function __construct()
    {
        $this->usuario = new Usuario();
    }
    public function listausuario($request, $response)
    {
        $usuario = $this->usuario->find();
        //RETORNAMOS A VIEW 
        return $this->getTwig()->render(
            $response,
            $this->setView("listausuario"),
            [
                "usuario" => $usuario,
                "lista" => HOME,
                "base_url" => BASE_URL,
                "descricao_label" => "Listagem de usuario"
            ]
        );
    }
}
