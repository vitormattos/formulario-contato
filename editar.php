<?php
if (!empty($_POST)) {
    $pdo = new PDO('sqlite:contatos.sqlite3');
    $sth = $pdo->prepare(
        'UPDATE contato '.
        '   SET nome = ?'.
        '   SET telefone = ?'.
        '   SET mensagem = ?'.
        ' WHERE id = ?'
    );
    $sth->execute([
        $_GET['nome'],
        $_GET['telefone'],
        $_GET['mensagem'],
        $_GET['id']
    ]);
    echo 'Dados editados com sucesso!';
}

$pdo = new PDO('sqlite:contatos.sqlite3');
$sth = $pdo->prepare(
    'SELECT * FROM contato WHERE id = ?'
    );
$sth->execute([$_GET['id']]);
$row = $sth->fetch();
require_once 'formularioContato.php';
?>