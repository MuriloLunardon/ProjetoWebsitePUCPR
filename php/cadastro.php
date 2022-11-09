<?php
session_start();
include("conexao.php")
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <div class="container" id="container">
    <div class="form-container sign-in-container">
      <form method="POST" action="verifica_cadastro.php"> 
        <h1>Bem Vindo!</h1><br>
        <?php
        if(isset($_SESSION['status_cadastro'])):
        ?>
        <div class="sucesso">Cadastro efetuado com sucesso! <a class="text" href="login.php">Clique aqui</a></div>
        <?php
        endif;
        unset($_SESSION['status_cadastro']);
        ?>
        <?php
        if(isset($_SESSION['usuario_existe'])):
        ?>
        <div class="danger">ERRO: Usuário já cadastrado informe outro.</div><br>
        <?php
        endif;
        unset($_SESSION['usuario_existe']);
        ?>
        <?php
        if(isset($_SESSION['senhas_diferente'])):
        ?>
        <div class="danger">ERRO: As senhas não se conferem!!</div><br>
        <?php
        endif;
        unset($_SESSION['senhas_diferente']);
        ?>
        <input type="usuário" name="nome" required placeholder="Nome completo" />
        <input type="usuário" name="usuario" required placeholder="Nome de usuário" />
        <input type="password" name="senha" required placeholder="Senha" maxlength="8" minlength="4"/>
        <input type="password" name="repetir" required placeholder="Confirmar senha" maxlength="8" minlength="4" />
        <button class="registrar">
            Registrar
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