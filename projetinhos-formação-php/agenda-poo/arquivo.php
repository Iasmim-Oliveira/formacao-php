<?php

require_once 'src/agenda.php';

$evento1 = new Evento("Estudar inglês", "2024-03-31", "Estudo de gramática");
$evento2 = new Evento("Encontro com a galera do IFRO", "2024-04-06", "");
$evento3 = new Evento("Ir ao mercado", "2024-03-31", "Comprar batata");

$agenda = new Agenda();
$agenda->adicionarEvento($evento1);
$agenda->adicionarEvento($evento2);
$agenda->adicionarEvento($evento3);

$eventos = $agenda->listarEventos();

foreach ($eventos as $evento) {
    echo "Titulo: " . $evento->titulo . "Data: " . $evento->data . "Descrição: " . $evento->descricao . "\n";
}