<?php
namespace App\model;

class Projeto{
    private $id, $nome, $prioridade, $dificuldade, $data_inicio, $data_fim, $status, $pass;

    public function __construct(){}

    public function iniciar( $id, $nome, $prioridade, $dificuldade, $data_inicio, $data_fim, $status){
        $this->id = $id;
        $this->nome = $nome;
        $this->prioridade = $prioridade;
        $this->dificuldade = $dificuldade;
        $this->data_inicio = $data_inicio;
        $this->data_fim = $data_fim;
        $this->status = $status;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

}