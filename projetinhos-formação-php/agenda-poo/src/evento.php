<?php

class Evento
{
    protected string $titulo;
    protected $data;
    protected string $descricao;

    protected function __construct($titulo, $data, $descricao)
    {
        $this->titulo = $titulo;
        $this->data = $data;
        $this->descricao = $descricao;

    }
}