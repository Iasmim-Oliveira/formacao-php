<?php

require_once 'src/evento.php';
class agenda
{
    private $eventos = [];

    public function adicionarEvento($evento) {
        $this->eventos[] = $evento;
    }

    public function listarEventos() {
        return $this->eventos;
    }

    public function excluirEvento() {

    }
}