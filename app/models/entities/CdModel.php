<?php

namespace app\models\entities;

use app\models\Model;

class CdModel
{
    //capacidade do cd
    private int $capacidade;

    //conteudo do cd
    private string $conteudo;

    //tipo de material
    private string $tipo;

    //quantidade de cd entrados
    private int $qtd;

    //modo de aquisicao
    private string $modo_aqui;

    //data de entrada na biblioteca
    private string $data;

    /**
     * Metodo construtor da classe
     */
    public function __construct()
    {
        $this->tipo = "CD";
    }

    /**
     * Metodo que fará a validação e o cadastro de CD
     * @param array values => dados a serem salvos na base de dados
     */
    public function create(array $values)
    {
        //validando a capacidade
        if (preg_match("/^[0-9]+$/", $values["capacidade"])) {
            $this->capacidade = $values["capacidade"];
        }
        else {
            echo "Dado capacidade inválido";
            exit;
        }

        //validando conteudo
        if (preg_match("/^[a-zA-z0-9 ]+$/", $values["conteudo"])) {
            $this->conteudo = $values["conteudo"];
        }
        else {
            echo "Conteudo inválido";
            exit;
        }

        //validando a quantidade de material
        if (preg_match("/^[0-9]+$/", $values["qtd_material"])) {
            $this->qtd = $values["qtd_material"];
        }
        else {
            echo "Quantidade inválida";
            exit;
        }

        //validando o modo de aquisicao
        if (preg_match("/^[a-zA-Z ]+$/", $values["modo_aquisicao"])) {
            $this->modo_aqui = $values["modo_aquisicao"];
        }
        else {
            echo "Modo de aquisicao inválido";
            exit;
        }

        //validando a data de entrada
        if (preg_match("/^[0-9]{4}[-][0-9]{2}[-][0-9]{2}$/", $values["data_entrada"])) {
            $this->data = $values["data_entrada"];
        }
        else {
            echo "Data inválida";
            exit;
        }

        //instanciando o model
        $model = new Model();

        //fazer a insercao na tabela material
        $model->insert("material", [
            "tipo_material" => $this->tipo,
            "qtd_material" => $this->qtd,
            "modo_aquisicao" => $this->modo_aqui,
            "data_entrada" => $this->data
        ]);

        //pegando o id do material
        $idMaterial = $model->lastId("material", "id_material");

        //fazer insercao na tabela cd
        $model->insert("cd", [
            "material_id" => $idMaterial,
            "capacidade" => $this->capacidade,
            "conteudo" => $this->conteudo
        ]);

        //se tudo der certo...
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

        $tblCd = $model->show("cd", "id_cd", $id);

        $model->delete("material", "id_material", $tblCd["id_material"]);
        $model->delete("cd", "id_cd", $id);

        //se tudo der certo...
        header("Content-Type: application/json");

        $response =  [
            "status" => 200,
            "success" => true
        ];

        http_response_code(200);

        echo json_encode($response);
    }
    
    public function show(): array
    {
        $model = new Model();

        $data = $model->select("cd");

        return $data;
    }

}