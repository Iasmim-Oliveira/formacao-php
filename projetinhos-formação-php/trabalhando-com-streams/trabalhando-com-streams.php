<?php
//programação precedural - todas anfunções e métodos no mesmo arquivo

echo '----Olá, bem vindo à sua agenda! O que deseja fazer?----'.PHP_EOL.'1. adicionar tarefa'.PHP_EOL.'2. listar tarefas'. PHP_EOL;
$resposta = trim(fgets(STDIN));

function adicionaTarefa(){
    echo ('Digite a nova tarefa: ');
   $novaTarefa = trim(fgets(STDIN));
   file_put_contents('lista-tarefas.txt', $novaTarefa . PHP_EOL, FILE_APPEND);
   echo ('Sua tarefa foi adicionada!' . PHP_EOL);
};

function listaTarefa() {
    echo('------Aqui está sua lista de tarefas!------'. PHP_EOL);
    echo file_get_contents('lista-tarefas.txt');
};

if ($resposta === '1') {
   do {
    adicionaTarefa();
    echo('Deseja inserir outra tarefa? S/N'. PHP_EOL);
    $adicionarTarefa = trim(fgets(STDIN));
   } while ($adicionarTarefa === 'S');

} else {
    listaTarefa();
    echo('----Fechando a agenda... até mais!----');
};

