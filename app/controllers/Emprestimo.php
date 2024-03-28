<?php

namespace app\controllers;

class Emprestimo extends Controller
{

    public function index(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SESSION["tipo_adm"] !== "admin") {
            header("Location: http://localhost/sistema-biblioteca2/home");
            exit; // Sempre que você redirecionar, é uma boa prática sair do script imediatamente.
        } 

        $this->loadView("emprestimo");
    }

}
