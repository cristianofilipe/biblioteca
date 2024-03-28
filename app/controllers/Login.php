<?php

namespace app\controllers;

use app\models\entities\User;

class Login extends Controller
{

    public function index()
    {
        $this->loadView("login/index");
    }

    //Metodo responsavel por exibir a página de cadastro de novos usuários
    public function novo_usuario(): void
    {
        session_start();
        if ($_SESSION["tipo_adm"] == "admin") {
            $this->loadView("login/novo_usuario");
        }
        else {
            header("Location: http://localhost/sistema-biblioteca2/home");
            exit;
        }
    }

    //Metodo responsavel por fazer a autenticação de usuarios
    public function auth(): void
    {
        //verifica se foram enviados dados via POST
        if (!empty($_POST)) {
            //Instanciando o model User
            $user = new User;

            if ($user->login_user($_POST)) {
                header("Location: http://localhost/sistema-biblioteca2/home");
            }
            else {
                echo "Email/Senha inválida";
            }
        }
    }

    //Metodo responsável por receber os dados do novo usuário
    public function create_user()
    {
        //verifica se foram enviados dados via POST
        if (isset($_POST) && !empty($_POST)) {
            //Instanciando o model User
            $user = new User;
            $user->create($_POST);

            header("Location: http://localhost/sistema-biblioteca2/login");
        }
    }

    //Metodo responsável por encerrar a sessão
    public function close_session()
    {
        $user = new User;
        if ($user->logout()) {
            header("Location: http://localhost/sistema-biblioteca2/login");
        }
    }

}