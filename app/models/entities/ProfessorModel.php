<?php


namespace app\models\entities;

use app\models\Model;
use app\models\entities\Pessoa;

class ProfessorModel extends Pessoa
{

    //Email do professor
    private string $email;

    /**
     * Metodo que fará a validação e o cadastro de professores
     * @param array values => dados a serem salvos na base de dados
     */
    public function create(array $values)
    {

        //Validação do nome
        if (preg_match_all("/^[a-zA-Z ]+$/", $values["nome"])) {
            $this->nome = $values["nome"];
        }
        else {
            echo "Nome invalido";
            exit;
        }

        //validação do sexo
        if (preg_match('/^[fm]$/i', $values["sexo"])) {
            $this->sexo = $values["sexo"];
        }
        else {
            echo "Sexo inválido";
            exit;
        }

        //validação do numero
        if (preg_match('/^\d{3}-\d{3}-\d{3}$/', $values["numero"])) {
            $this->numero = $values["numero"];
        }
        else {
            echo "Telefone inválido";
            exit;
        }

        //validação do email
        if (preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/', $values["email"])) {
            $this->email = $values["email"];
        }
        else {
            echo "Email inválido";
            exit;
        }

        //Instanciando a Model
        $model = new Model();

        //fazer a inserção na tabela telefone
        $model->insert("telefone", ["numero" => $this->numero]);

        //pegar o ultimo numero inserido
        $idTel = $model->lastId("telefone", "id_telefone");

        //fazer a inserção na tabela pessoa
        $model->insert("pessoa", [
            "nome" => $this->nome,
            "telefone_id" => $idTel,
            "sexo" => $this->sexo
        ]);

        //pegar a ultima pessoa inserida
        $idPessoa = $model->lastId("pessoa", "id_pessoa");
        
        //fazer a inserção na tabela professor
        $model->insert("professor", [
            "email" => $this->email,
            "pessoa_id" => $idPessoa
        ]);

       // header("Location: http://localhost/sistema-biblioteca/cadastro/");

       header("Content-Type: application/json");

       $response =  [
            "status" => 200,
            "success" => true
       ];

       http_response_code(200);

       echo json_encode($response);

    }

    public function delete(int $id)
    {
        //instanciando a model
        $model = new Model();

        $tblProfessor = $model->show("professor", "id_professor", $id);

        $tblPessoa = $model->show("pessoa", "id_pessoa", $tblProfessor["id_pessoa"]);


        $model->delete("telefone", "id_telefone", $tblPessoa["id_telefone"]);
        $model->delete("pessoa", "id_pessoa", $tblProfessor["id_pessoa"]);
        $model->delete("professor", "id_professor", $id);

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