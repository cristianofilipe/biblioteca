<?php

namespace app\controllers;

use app\models\entities\AlunoModel;

class Aluno
{
    public function post()
    {
        //verificando se os dados foram passados
        if (!empty($_POST)) {
            //criar uma instancia do AlunoModel
            $aluno = new AlunoModel();

            //enviando os dados
            if ($aluno->create($_POST)) {
                //se tudo der certo...
                header("Content-Type: application/json");

                $response =  [
                    "status" => 200,
                    "success" => true
                ];

                http_response_code(200);

                echo json_encode($response);
            }
        }
    }

    public function get()
    {
        //pegando o paramentro
        if ($_GET["nome"]) {
            $aluno = new AlunoModel();

            $nome = htmlspecialchars($_GET["nome"]);

            $data = $aluno->getAluno($nome);

            $response = [
                "status" => 200,
                "data" => $data 
            ];

            http_response_code(200);

            echo json_encode($response);
        }
    }

    public function put(int $id)
    {
        echo "Edidando o livro ".$id;
    }

    public function delete(int $id)
    {
        //instanciando a classe Aluno
        $aluno = new AlunoModel();

        $aluno->delete($id);
    }
}