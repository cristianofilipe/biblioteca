<?php

namespace app\models\entities;

use app\models\Model;

class TccModel extends Material
{
    //tema do tcc
    private string $tema;

    //orientador do tcc
    private string $orientador;

    //id do curso
    private int $curso;

    

    /**
     * Metodo construtor da classe
     */
    public function __construct()
    {
        $this->tipo = "tcc";
    }

    /**
     * Metodo que fará a validação e o cadastro de CD
     * @param array values => dados a serem salvos na base de dados
     */
    public function create(array $values)
    {

        //validando o tema
        $this->tema = htmlspecialchars($values["tema"]);

        //validando o orientador
        if (preg_match("/^[a-zA-Z ]+$/", $values["orientador"])) {
            $this->orientador = $values["orientador"];
        }
        else {
            echo "Orientador inválido";
            exit;
        }

        //validando o id do curso
        if (preg_match("/^[0-9]$/", $values["curso"])) {
            $this->curso = $values["curso"];
        }
        else {
            echo "ID do curso inválida";
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

        $model->insert("material", [
            "tipo_material" => $this->tipo,
            "data_entrada" =>$this->data 
        ]);

        $idMaterial = $model->lastId("material", "id_material");    

        $model->insert("tcc",[
            "material_id" => $idMaterial,
            "tema" => $this->tema,
            "orientador" => $this->orientador,
            "curso_id" => $this->curso
        ]);

        header("Location: ");
 
    }

    public function get()
    {
        $model = new Model();
        $query = "SELECT material.data_entrada, tcc.tema, tcc.orientador from 
        tcc inner join material on tcc.material_id = material.id_material;";
        $res = $model->select($query);
        return $res;
    }
}