<?php

namespace app\models\entities;

use app\models\Model;

class User 
{

    //Metodo responsavel cadastrar um novo usuário
    public function create(array $values): void
    {
        /** Validando os campos */
        $nome = htmlspecialchars($values["nome"]);
        $tipo_adm = htmlspecialchars($values["tipo_adm"]);
        $email = filter_var($values["email"], FILTER_VALIDATE_EMAIL);
        $senha = password_hash($values["senha"], PASSWORD_ARGON2I);

        //instanciando o model
        $model = new Model;

        //enviando cadastrando o usuário
        $model->insert("usuario", [
            "nome" => $nome,
            "tipo_adm" => $tipo_adm,
            "email" => $email,
            "senha" => $senha
        ]);

    }

    //Metodo responsável por fazer o login do usuário
    public function login_user(array $values): bool
    {
        /** Validando os campos */
        $email = filter_var($values["email"], FILTER_VALIDATE_EMAIL);
        $senha = $values["senha"];

        //instanciando o model
        $model = new Model;

        $res = $model->select("SELECT email, tipo_adm, senha FROM usuario WHERE email = '$email' ");

        if (!empty($res)) {
            if (password_verify($senha, $res[0]["senha"])) {
                //iniciando nova sessão
                session_start();
                $_SESSION["login"] = $email;
                $_SESSION["tipo_adm"] = $res[0]["tipo_adm"];
                return true;
            }
        }
        else {
            return false;
        }
    }

    //Metodo responsavel por encerrar a sessão
    public function logout(): bool
    {
        session_start();
        session_unset();
        session_destroy();

        return true;
    }
}