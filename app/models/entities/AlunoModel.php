<?php

namespace app\models\entities;

use app\models\Model;
use app\models\entities\Pessoa;

class AlunoModel extends Pessoa 
{
    //Curso do aluno
    private int $curso;

    //Classe do aluno
    private int $classe;

    //Turma do aluno
    private string $turma;


    /**
     * Metodo responsavel por cadastrar o aluno
     * @param array values => dados a serem salvos na base de dados
     */
    public function create(array $values): bool
    {
        //validando o nome
        if (preg_match("/^[a-zA-Z ]+$/", $values["nome"])) {
            $this->nome = $values["nome"];
        }
        else {
            echo "Nome inválido";
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

        //validação do curso
        if (preg_match("/^[1-6]$/", $values["curso"])) {
            $this->curso = $values["curso"];
        }
        else {
            echo "Curso Inválido";
            exit;
        }

        //validando a classe
        if (preg_match("/^[0-9]{2}$/", $values["classe"])) {
            $this->classe = $values["classe"];
        }
        else {
            echo "Classe inválida";
            exit;
        }

        //validando a turma
        if (preg_match("/^[a-zA-Z]{2}[0-9]{2}[a-zA-Z]$/", $values["turma"])) {
            $this->turma = $values["turma"];
        }
        else {
            echo "Turma inválida";
            exit;
        }

        //instanciando a model
        $model = new Model();

        //fazer a insercao na tabela telefone
        $model->insert("telefone", ["numero" => $this->numero]);

        //pegando o id do telefone
        $idTel = $model->lastId("telefone", "id_telefone");

        //fazer a inserção na tabela pessoa
        $model->insert("pessoa", [
            "nome" => $this->nome,
            "telefone_id" => $idTel,
            "sexo" => $this->sexo
        ]);

        //pegando o id da pessoa
        $idPessoa = $model->lastId("pessoa", "id_pessoa");

        //fazer a insercao na tabela aluno
        $model->insert("aluno", [
            "classe" => $this->classe,
            "turma" => $this->turma,
            "curso_id" => $this->curso,
            "pessoa_id" => $idPessoa
        ]);
        

        return true; 
    } 

    public function delete($id)
    {
        //instanciando a model
        $model = new Model();

        $tblAluno = $model->show("aluno", "id_aluno", $id);
        $tblPessoa = $model->show("pessoa", "id_pessoa", $tblAluno["id_pessoa"]);

        $model->delete("telefone", "id_telefone", $tblPessoa["id_telefone"]);
        $model->delete("pessoa", "id_pessoa", $tblAluno["id_pessoa"]);
        $model->delete("curso", "id_curso", $tblAluno["id_curso"]);
        //$model->delete("tcc", "id_tcc", $tblAluno["id_tcc"]);
        $model->delete("aluno", "id_aluno", $id);

        //se tudo der certo...
        header("Content-Type: application/json");

        $response =  [
            "status" => 200,
            "success" => true
        ];

        http_response_code(200);

        echo json_encode($response);
    
    }

    public function getAluno(string $nome): array
    {
        $model = new Model();
        $alunos = $model->select("SELECT * FROM aluno WHERE nome LIKE '%$nome%'");

        return $alunos;

    }
}