<?php

namespace app\controllers;

use app\models\entities\CdModel;

class CD
{
    public function post()
    {
        //verificando se os dados foram passados
        if (!empty($_POST)) {
            //criar uma instancia do ProfessorModel
            $cd = new CdModel();

            //enviando os dados
            $cd->create($_POST);
        }
    }

    public function get()
    {
        echo "Metodo get do CD";
        
        
    }

    public function put(int $id)
    {
        echo "Edidando o CD ".$id;
    }

    public function delete(int $id)
    {
        //criando a instancia de CdModel
        $cd = new CdModel();

        $cd->delete($id);
    }
}
    