<h1>Formulário contato</h1>
<form action="" method="post">
  <?php
  if (!empty($row['id'])) {
      ?><input type="hidden" value="<?php
        echo $row['id'];
      ?>" /><?php
  }
  ?>
  <label for="nome">Nome :</label>
  <input name="nome" id="nome" type="text"
    value="<?php
        if (!empty($row['nome'])) {
            echo $row['nome'];
        }
    ?>" /><br/><br/>
  <label for="telefone"
    value="<?php
        if (!empty($row['telefone'])) {
            echo $row['telefone'];
        }
    ?>" >Telefone :</label>
  <input type="tel" name="telefone" /><br/><br/>
  <label for="mensagem">Mensagem :</label>
  <textarea name="mensagem" id="mensagem"><?php
    if (!empty($row['mensagem'])) {
        echo $row['mensagem'];
    }
    ?></textarea><br/><br/>
  <input type="submit" value="Enviar" />
</form>