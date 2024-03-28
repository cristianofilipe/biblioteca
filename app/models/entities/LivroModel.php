<?php

namespace app\models\entities;

use app\models\Model;
use app\models\entities\Material;

class LivroModel extends Material
{

    //autores do livro
    private array $autor;

    //titulo do livro
    private string $titulo;

    //volume do livro
    private int $volume;

    //ano de publicação
    private string $ano_pub;

    //edição de livro
    private string $edicao;

    //isbn do livro
    private string $isbn;

    //estante do livro
    private string $estante; 
    
    //local de publicacao do livro
    private string $local_publicacao;

    //editora do livro
    private string $editora;
    
    //tipo de material
    private string $tipo;


    
    /**
     * Metodo construtor da classe
     */
    public function __construct()
    {
        $this->tipo = "Livro";
    }

    /**
     * Metodo que fará a validação e o cadastro de CD
     * @param array values => dados a serem salvos na base de dados
     */
    public function create(array $values)
    {

        //validando a quantidade de material
        if (preg_match("/^[0-9]+$/", $values["qtd_materia"])) {
            $this->qtd = $values["qtd_materia"];
        }
        else {
            echo "Quantidade inválida";
            exit;
        }

        //validando o modo de aquisicao
        if (preg_match("/^[a-zA-Z ]+$/", $values["modo_aquisicao"])) {
            $this->modo_aqui = $values["modo_aquisicao"];
        }
        else {
            echo "Modo de aquisicao inválido";
            exit;
        }

        //validando o local de publicacao
        if (preg_match("/^[a-zA-Z ]+$/", $values["local_publicacao"])) {
            $this->local_publicacao = $values["local_publicacao"];
        }
        else {
            echo "local_publicacao inválido";
            exit;
        }

        //validando a data de entrada
        if (preg_match("/^[0-9]{4}[-][0-9]{2}[-][0-9]{2}$/", $values["data_entrada"])) {
            $this->data = $values["data_entrada"];
        }
        else {
            echo "Data inválida";
            exit;
        }

        //validando titulo
        $this->titulo = htmlspecialchars($values["titulo"]);

        //validand o volume do livro
        if (preg_match("/^[0-9]+$/", $values["volume"])) {
            $this->volume = $values["volume"];
        }
        else {
            echo "Volume inválido";
            exit;
        }

        //validando o ano de publicação
        if (preg_match("/^[0-9]{4}$/", $values["ano_pub"])) {
            $this->ano_pub = $values["ano_pub"];
        }
        else {
            echo "Ano de publicação inválida";
            exit;
        }

        //validando a edicao do livro
        if (preg_match("/^[a-zA-Z0-9]+/", $values["edicao"])) {
            $this->edicao = $values["edicao"];
        } 
        else {
            echo "edicao inválida";
            exit;
        }

        //validando o isbn do livro
        if (preg_match("/^(?:\d{9}[\dXx])$/", $values["isbn"]) || preg_match("/^(?:\d{13})$/", $values["isbn"])) {
            $this->isbn = $values["isbn"];
        }
        else {
            echo "ISBN inválido";
            exit;
        }

        //validando a editora do livro
        if (preg_match("/^[a-zA-Z]+$/", $values["editora"])) {
            $this->editora = $values["editora"];
        }
        else {
            echo "Editora inválida";
            exit;
        }

        //instanciando o model
        $model = new Model();

        //fazer a insercao na tabela material
        $model->insert("material", [
            "tipo_material" => $this->tipo,
            "qtd_material" => $this->qtd,
            "modo_aquisicao" => $this->modo_aqui,
            "data_entrada" => $this->data
        ]);

        //pegando o id do material
        $idMaterial = $model->lastId("material", "id_material");

        //fazer a inserção na tabela livro
        $model->insert("livro", [
            "titulo" => $this->titulo,
            "volume" => $this->volume,
            "ano_pub" => $this->ano_pub,
            "edicao" => $this->edicao,
            "isbn" => $this->isbn,
            "editora" => $this->editora,
            "local_publicacao" => $this->local_publicacao,
            "estante" => $this->estante,
            "material_id" => $idMaterial
        ]);

        //se tudo der certo...
        header("Content-Type: application/json");

        $response =  [
            "status" => 200,
            "success" => true
        ];

        http_response_code(200);

        echo json_encode($response);
        
        
    }

    public function delete(int $id)
    {
        //instanciando a model
        $model = new Model();

        $tblLivro = $model->show("livro", "id_livro", $id);

        $model->delete("material", "id_material", $tblLivro["id_material"]);
        $model->delete("livro", "id_livro", $id);

        //se tudo der certo...
        header("Content-Type: application/json");

        $response =  [
            "status" => 200,
            "success" => true
        ];

        http_response_code(200);

        echo json_encode($response);
    }

    public function getLivro($livros): array
    {
        $model = new Model();
        $livros = $model->select("SELECT * FROM livro WHERE titulo LIKE '%$livros%'");

        return $livros;
    }
}