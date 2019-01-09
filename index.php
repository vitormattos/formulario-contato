<form action="" method="post">
  <label for="nome">Nome</label>
  <input name="nome" id="nome" type="text">
  <label for="mensagem">Mensagem</label>
  <textarea name="mensagem" id="mensagem"></textarea>
  <input type="submit" value="Enviar">
</form>
<?php
if($_POST) {
    var_dump($_POST);
    $pdo = new PDO('sqlite:contatos.sqlite3');
    $sth = $pdo->prepare(
        'INSERT INTO contato ' .
        '(nome, mensagem) '.
        'VALUES (?, ?)'
    );
    $sth->execute([$_POST['nome'], $_POST['mensagem']]);
}