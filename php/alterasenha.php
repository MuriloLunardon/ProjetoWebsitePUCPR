<?php
include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Altera Senha</title>
</head>

<body>
  <form method="POST" action="altera_senha.php">
    <div>
      <h1>Alterar Senha</h1>
      <label>Senha Nova:</label>
      <input type="password" name="senha_nova" required placeholder="Senha" maxlength="8" minlength="4" />
      <label>Confirme Senha:</label>
      <input type="password" name="confirme_senha" required placeholder="Confirmar senha" maxlength="8" minlength="4" />
      <button class="registrar">
        Alterar Senha
      </button>
    </div>
  </form>
</body>
</html>