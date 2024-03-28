<?php

namespace app\controllers;

use app\models\entities\TccModel;

class TCC
{
    public function post()
    {
        //verificando se os dados foram passados
        if (!empty($_POST)) {
            //criar uma instancia do ProfessorModel
            $tcc = new TccModel();

            //enviando os dados
            $tcc->create($_POST);
        }
    }

    public function get()
    {
        $tcc = new TCC();

        $tcc->get();
    }

    public function put(int $id)
    {
        echo "Edidando o livro ".$id;
    }

    public function delete(int $id)
    {
        echo "Metodo deletando o livro ".$id;
    }
}