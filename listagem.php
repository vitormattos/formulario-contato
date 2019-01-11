<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Listagem de Contato</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="main.js"></script>
</head>
<body>

<?php
$pdo = new PDO('sqlite:contatos.sqlite3');
$sth = $pdo->prepare(
    'SELECT * FROM contato'
);
$sth->execute();
?>
<div>
<h2><b>Listagem de Contatos</b></h2>
<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Telefone</th>
      <th>Mensagem</th>
      <th>Opções</th>
      <tr>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
  <?php
  while($row = $sth->fetch()) {
      ?>
      <tr>
        <td><?php echo $row['nome']?></td>
        <td><?php echo $row['telefone']?></td>
        <td><?php echo $row['mensagem']?></td>
        <td>
          <a class="btn btn-danger" href="excluir.php?id=<?php
            echo $row['id'];?>">Excluir</a>
          <a class="btn btn-primary" href="editar.php?id=<?php
            echo $row['id'];?>">Editar</a>
        </td>
      </tr><?php
  }
  ?>
  </tbody>
</table>
</div>

</body>
</html>