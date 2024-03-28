<?php

namespace app\models\entities;

use app\models\Model;

class HomeModel extends Model
{
    //Metodo responsavel por retornar dados na pagina home
    public function totalData(): array
    {
        $model = new Model();

        $total = [];
        $total["material"] = $model->select("SELECT count(*) FROM material");
        $total["visitantes"] = $model->select("SELECT count(*) FROM pessoa");

        return $total;
    }
}