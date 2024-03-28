<?php

namespace core;

use PDO;
use PDOException;

class DataBase
{

    //Nome da base de dados
    private const dbname = "sistema-biblioteca";

    //Nome do host
    private const hostname = "localhost";

    //Nome do usuário
    private const username = "root";

    //Senha da conexão
    private const password = "";

    //Variavel da conexão
    public static $connection;

    //Metodo construtor responsavel por fazer a conexão com a Base de Dados
    public function __construct()
    {
        try {
            self::$connection = new PDO("mysql:dbname=".self::dbname.";hostname=".self::hostname, self::username, self::password);
        } catch (PDOException $e) {
            die("Erro na conexão: ". $e->getMessage());
        }   
    }

} 