<?php

namespace app\controllers;
use app\models\entities\ProfessorModel;

class Professor
{
    public function post()
    {
        //verificando se os dados foram passados
        if (!empty($_POST)) {
            //criar uma instancia do ProfessorModel
            $prof = new ProfessorModel();

            //enviando os dados
            $prof->create($_POST);
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

    public function delete(int $id)
    {
        //criar uma instancia do ProfessorModel
        $prof = new ProfessorModel();

        //enviando o id
        $prof->delete($id);
    }
}