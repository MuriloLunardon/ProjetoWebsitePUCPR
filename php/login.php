<?php
session_start();
include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/login.css">
  <title>Login</title>
</head>
<body>
  <div class="container" id="container">
    <div class="form-container sign-in-container">
      <form  method="POST" action="verifica_login.php">
        <h1>Bem Vindo!</h1>
        <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
        <p class="danger">ERRO: Usuário ou senha inválida</p>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
        <input type="usuário" name="usuario" required placeholder="Nome de usuário" />
        <input type="password" name="senha" required placeholder="Senha" minlength="4" maxlength="8"/>
        <a href="#" id="recuperarSenha">Recuperar senha</a>
        <button class="registrar">
          <a>Login</a>
        </button>
        <button class="registrar">
          <a href="cadastro.php">Registrar</a>
        </button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-right">
          <img src="../img/icon.png" width="150vw">
          <p>Ler é viver mil vidas diferentes em uma única existência.<br>"André William Segalla"</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>