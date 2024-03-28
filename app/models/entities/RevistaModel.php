<?php

namespace app\models\entities;

use app\models\Model;
use app\models\entities\Material;

class RevistaModel extends Material
{

    //titulo da revista
    private string $titulo;

    //subtitulo da revista
    private string $subTitulo;

    //local de publiccao
    private string $localPub;

    /**
     * Metodo construtor da classe
     */
    public function __construct()
    {
        $this->tipo = "Revista";
    }


    /**
     * Metodo que fará a validação e o cadastro de revista
     * @param array values => dados a serem salvos na base de dados
     */
    public function create(array $values)
    {

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

        //validando o titulo da revista
        $this->titulo = htmlspecialchars($values["titulo"]);

        //validando o subtitulo
        $this->subTitulo = htmlspecialchars($values["subTitulo"]);

        //validando o local de publicacao
        $this->localPub = htmlspecialchars($values["localPub"]);

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

        //fazer a insercao na tabela revista
        $model->insert("revista", [
            "material_id" => $idMaterial,
            "titulo" => $this->titulo,
            "subtitulo" => $this->subTitulo,
            "localPub" => $this->localPub
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

        $tblRevista = $model->show("revista", "id_revista", $id);

        $model->delete("material", "id_material", $tblRevista["id_material"]);
        $model->delete("revista", "id_revista", $id);

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