<?php

namespace app\models;

error_reporting(E_ALL);
ini_set('display_errors', 'On');

use core\DataBase;
use PDO;

class Model extends DataBase
{
    /**
     * Metodo construtor da classe
     */
    public function __construct()
    {
        parent::__construct();


    }

    /**
     * Função utilizada para inserção de dados
     * @param string table => tabela a ser inserida os dados
     * @param array values => dados a serem inseridos na tabela
     */
    public function insert(string $table, array $values)
    {
        //verificando a conexão
        if (self::$connection) {
            //pegando todas as chaves dos parametros
            $keys = array_keys($values);
            
            //colunas a serem preenchidas
            $columns = implode(", ", $keys);

            //parametros de cada coluna
            $formatString = array_map(function($key){
                return ":" . $key;
            }, $keys);
            
            $params = implode(", ", $formatString);

            //preparando a consulta
            $stmt = self::$connection->prepare("INSERT INTO $table ($columns) VALUES ($params)");

            //executando a instrução
            $stmt->execute($values);
        }


    }

    /** 
     * Metodo para pegar o ultimo ID de uma tabela
     * @param string table => nome da tabela
     * @param string id = nome do id a ser buscado
     */
    public function lastId(string $table, string $id): int
    {
        //verificando a conexao
        if (self::$connection) {
           //preparando a query e executando
           $stmt = self::$connection->query("SELECT * FROM $table ORDER BY $id DESC LIMIT 1");

           //verifica se houve retorno/sucesso
           if ($stmt->rowCount() > 0) {
               //pegando os resultados
               $result = $stmt->fetch(PDO::FETCH_ASSOC);

               //retorna o id
               return $result[$id];
           }
        }
    }

    /**
     * Método para buscar dados em uma tabela
     * @param string table => tabela a ser feita a consulta
     */
    public function select(string $query)
    {
        //verificando a conexão
        if (self::$connection) {

            //preparando a query e executar
            $stmt = self::$connection->prepare($query);

            $stmt->execute();
            //verificando se houve algum retorno
            if ($stmt->rowCount() > 0) {
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $data;
            } else {
                return array();
            }
        }
    }

    public function delete(string $table, string $idName, int $id)
    {

        //verficando a conexao
        if (self::$connection) {
            //preparando a instrucao
            $query = "DELETE FROM $table WHERE $idName = $id";

            $stmt = self::$connection->prepare($query);

            $stmt->execute();
        }
        
    }   

    public function show(string $table, string $idName, int $id): array
    {
        //verficando a conexao
        if (self::$connection) {
            //preparando a instrucao
            $query = "SELECT * FROM $table WHERE $idName = $id LIMIT 1";

            $stmt = self::$connection->prepare($query);

            if ($stmt->execute()) {
                $dados = $stmt->fetch(PDO::FETCH_ASSOC);

                return $dados;
            }
        }
    }

    public function showAll(string $sql)
    {
    
        //verficando a conexao
        if (self::$connection) {
            //preparando a instrucao
            $query = $sql;

            $stmt = self::$connection->prepare($query);

            if ($stmt->execute()) {
                $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $dados;
            }
        }
    }

}