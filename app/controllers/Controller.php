<?php

namespace app\controllers;

class Controller
{

    //metódo utilizado para carregar uma view
    public function loadView(string $view, array $data = [])
    {
        $arquivoView = "resources\\views\\$view.php";

        if (file_exists($arquivoView))
        {
            require_once $arquivoView;
        }
        else //caso não existir, emite uma mensagem de erro e encerra a execução do script
        {
            die("View inexistente");
        }
    }

}