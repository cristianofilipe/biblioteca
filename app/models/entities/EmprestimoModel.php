<?php

namespace app\models\entities;

use app\models\Model;
use app\models\entities\Material;

class Emprestimo  extends Material
{

    //data da aquisição do material
    private array $data_arquisicao;

    //Data de devolução do material
    private string $data_devolucao;

    /**
     * Metodo que fará a validação e o cadastro de CD
     * @param array values => dados a serem salvos na base de dados
     */
    public function create(array $values)
    {
        //validando a data de arquisicao do material
        if (preg_match("/^[0-9]{4}[-][0-9]{2}[-][0-9]{2}$/", $values["data_arquisicao"])) {
            $this->data_arquisicao = $values["data_arquisicao"];
        }
        else {
            echo "Data de arquisição inválida";
            exit;
        }

        //validando a data de arquisicao do material
        if (preg_match("/^[0-9]{4}[-][0-9]{2}[-][0-9]{2}$/", $values["data_devolucao"])) {
            $this->data_devolucao = $values["data_devolucao"];
        }
        else {
            echo "Data de devolução inválida";
            exit;
        }

    }
} 