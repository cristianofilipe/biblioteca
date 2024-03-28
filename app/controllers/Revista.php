<?php

namespace app\controllers;

use app\models\entities\RevistaModel;

class Revista
{
    /**
     * Metodo responsavel por criar uma nova revista 
     */
    public function post()
    {
        //verificando se os dados foram passados
        if (!empty($_POST)) {
            //criar uma instancia do ProfessorModel
            $revista = new RevistaModel();

            //enviando os dados
            $revista->create($_POST);
        }
    }

    public function get()
    {
        echo "Metodo get do livro";
    }

    public function put(int $id)
    {
        echo "Edidando o livro ".$id;
    }

    /**
     * 
     */
    public function delete(int $id)
    {
        //criar uma instancia do RevistaModel
        $revista = new RevistaModel();

        //enviando o id
        $revista->delete($id);
    }
}