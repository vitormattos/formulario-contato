<form action="" method="post">
  <?php
  if (!empty($row['id'])) {
      ?><input type="hidden" value="<?php
        echo $row['id'];
      ?>" /><?php
  }
  ?>
  <label for="nome">Nome</label>
  <input name="nome" id="nome" type="text"
    value="<?php
        if (!empty($row['nome'])) {
            echo $row['nome'];
        }
    ?>" />
  <label for="cep">CEP</label>
  <input name="cep" id="cep" type="text"
    value="<?php
        if (!empty($row['cep'])) {
            echo $row['cep'];
        }
    ?>" />
  <label for="telefone"
    value="<?php
        if (!empty($row['telefone'])) {
            echo $row['telefone'];
        }
    ?>" >Telefone</label>
  <input type="tel" name="telefone" />
  <label for="mensagem">Mensagem</label>
  <textarea name="mensagem" id="mensagem"><?php
    if (!empty($row['mensagem'])) {
        echo $row['mensagem'];
    }
    ?></textarea>
  <input type="submit" value="Enviar" />
</form>