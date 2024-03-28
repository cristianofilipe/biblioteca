<?php

namespace app\controllers;
use app\models\entities\HomeModel;

class Home extends Controller {

    public function index()
    {
        $home = new HomeModel();
        $data = $home->totalData();
        $total = [];
        $total["materiais"] = $data["material"][0]["count(*)"];
        $total["visitantes"] = $data["visitantes"][0]["count(*)"];
        
        $this->loadView("home", $total);
    }

}