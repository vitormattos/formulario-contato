<?php
require_once 'formularioContato.php';

if($_POST) {
    $pdo = new PDO('sqlite:contatos.sqlite3');
    $sth = $pdo->prepare(
        'INSERT INTO contato ' .
        '(nome, mensagem, telefone) '.
        'VALUES (?, ?, ?)'
    );
    $sth->execute([
        $_POST['nome'],
        $_POST['mensagem'],
        $_POST['telefone']
    ]);
    echo "Em breve entraremos em contato!";
}