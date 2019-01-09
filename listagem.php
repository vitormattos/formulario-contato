<?php
$pdo = new PDO('sqlite:contatos.sqlite3');
$sth = $pdo->prepare(
    'SELECT * FROM contato'
);
$sth->execute();
?>
<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Telefone</th>
      <th>Mensagem</th>
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
          <a href="excluir.php?id=<?php
            echo $row['id'];?>">X</a>
          <a href="editar.php?id=<?php
            echo $row['id'];?>">E</a>
        </td>
      </tr><?php
  }
  ?>
  </tbody>
</table>