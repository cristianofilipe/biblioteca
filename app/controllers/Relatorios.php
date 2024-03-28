<?php

namespace app\controllers;

class Relatorios extends Controller
{
    public function index()
    {
        $this->loadView("relatorios");
    }
}