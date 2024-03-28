<?php

namespace app\controllers;

class Cadastro extends Controller
{

    public function index(): void
    {
        $this->loadView("cadastro");
    }

    /**
     * Metodo responsavel por abrir o cadastro/professor
     */
    public function professor(): void
    {
        $this->loadView("cadastro/professor");
    }

    /**
     * Metodo responsavel por abrir o cadastro/aluno
     */
    public function aluno(): void
    {
        $this->loadView("cadastro/aluno");
    }

    /**
     * Metodo responsavel por por abrir o cadastro/cd
     */
    public function cd(): void
    {
        $this->loadView("cadastro/cd");
    }

    /**
     * Metodo responsavel por por abrir o cadastro/livro
     */
    public function livro() {
        $this->loadView("cadastro/livro");
    }

    /**
     * Metodo responsavel por por abrir o cadastro/revista
     */
    public function revista()
    {
        $this->loadView("cadastro/revista");
    }

    /**
     * Metodo responsavel por por abrir o cadastro/tcc
     */
    public function tcc()
    {
        $this->loadView("cadastro/tcc");
    }

    public function usuario()
    {
        $this->loadView("usuario");
    }

}