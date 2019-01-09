<?php
$pdo = new PDO('sqlite:contatos.sqlite3');
$sth = $pdo->prepare(
    'DELETE FROM contato WHERE id = ?'
);
$sth->execute([$_GET['id']]);
?>Contato excluído com sucesso!