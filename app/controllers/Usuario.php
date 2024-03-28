<?php

namespace app\controllers;

use app\models\entities\User;

class Usuario
{
    public function post()
    {
        //verificando se os dados foram passados
        if (!empty($_POST)) {
            //criar uma instancia do UserModel
            $user = new User();

            //enviando os dados
            $user->create($_POST);

            header("Location: http://localhost/sistema-biblioteca2/home");
        }
    }
}