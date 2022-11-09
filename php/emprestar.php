<?php
include_once("conexao.php");
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emprestar</title>
  <link rel="stylesheet" href="../css/emprestimo.css">
  <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
	<nav class="navbar">
    <!-- LOGO -->
    <div class="logo">
      <img src="../img/icon.png">
    </div>
    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
      <!-- NAVIGATION MENUS -->
      <div class="menu">
        <li><a href="home.php">Voltar</a></li>
        <li><a href="emprestar.php">Emprestar</a></li>
        <li><a href="emprestimos.php">Todos os empréstimos</a></li>
        <li><a href="meuperfil.php">Meu perfil</a></li>
      </div>
    </ul>
  </nav>
<div class="main">
 <div class="container" id="container">
    <form method="POST" action="verifica_emprestimo.php">
        <div class="caixa">
            <div class="titulo">
                <h2 class="emprestimo">Cadastro de emprestimo</h2>
            </div>
            <div class="formulario">
              <?php
              if(isset($_SESSION['livro_ja_emprestado'])):
              ?>
              <p class="danger">Erro: Livro ja emprestado!!</p>
              <?php
              endif;
              unset($_SESSION['livro_ja_emprestado']);
              ?>
              <?php
              if(isset($_SESSION['livro_cadastrado'])):
              ?>
              <p class="sucesso">Livro emprestado com sucesso <a href="home.php">Clique aqui</a></p>
              <?php
              endif;
              unset($_SESSION['livro_cadastrado']);
              ?>
                <div class="label">
                    <label>Nome do livro</label>
                    <input id="usuario_emprestimo" name="livro" type="text" required placeholder="Digite um livro">
                </div>
                <div class="label">
                    <label>Data de emprestimo</label>
                    <input id="data_emprestimo" name="data_emp" type="date" required>
                </div>
                <div class="label">
                    <label>Data de devolução</label>
                    <input id="data_devolucao" name="data_dev" type="date" required>
                </div>
                <div>
                    <button type="submit">Emprestar</button>
                </div>
            </div>
        </div>
    </form>
  </div>	
</div>
</body>
</html>