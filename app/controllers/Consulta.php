<?php

namespace app\controllers;

class Consulta extends Controller
{

    public function index(): void
    {
        $this->loadView("consulta");
    }
    /**
     * Metodo responsavel por por abrir a consulta/livro
     */
    public function cd(): void
    {
        $this->loadView("consulta/cd");
    }

    /**
     * Metodo responsavel por por abrir a consulta/livro
     */
    public function livro() {
        $this->loadView("consulta/livro");
    }


}