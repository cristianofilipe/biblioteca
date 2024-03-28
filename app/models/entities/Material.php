<?php

namespace app\models\entities;

class Material
{
    //tipo de material
    protected string $tipo;

    //quantidade de cd entrados
    protected int $qtd;

    //modo de aquisicao
    protected string $modo_aqui;

    //data de entrada na biblioteca
    protected string $data;
}