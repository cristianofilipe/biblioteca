<?php

namespace app\controllers;

use app\models\entities\LivroModel;

class Livro
{
    public function post()
    {
        //verificando se os dados foram passados
        if (!empty($_POST)) {
            //criar uma instancia do ProfessorModel
            $livro = new LivroModel();

            //enviando os dados
            $livro->create($_POST);
        }
    }

    public function get()
    {
        //pegando o paramentro
        if (isset($_GET["titulo"])) {
            $livro = new LivroModel();

            $titulo = htmlspecialchars($_GET["titulo"]);

            $data = $livro->getLivro($titulo);

            if (!empty($data)) {
                $response = [
                    "status" => 200,
                    "data" => $data 
                ];
            } else {
                $response = [
                    "message" => "not sucess"
                ];
            }

            header("Content-Type: application/json");
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
        //criar uma instancia do LivroModel
        $livro = new LivroModel();

        //enviando o id
        $livro->delete($id);
    }
}