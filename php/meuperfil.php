<?php
session_start();
include_once("conexao.php");
$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel</title>
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/homepage.css">
</head>
<body>
  <nav class="navbar">
    <!-- LOGO -->
    <div class="logo">
      <img src="../img/icon.png">
    </div>
    <p>Olá, <?php echo $_SESSION['usuario']?></p>
    <!-- <p><a class="sair" href="logout.php">Sair</a></p> -->
    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
      <!-- NAVIGATION MENUS -->
      <div class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="emprestar.php">Emprestar</a></li>
        <li><a href="emprestimos.php">Todos os empréstimos</a></li>
        <li><a href="meuperfil.php">Meu perfil</a></li>
        <li><a href="logout.php">Sair</a></li>
      </div>
    </ul>
  </nav>
  <table>
    <tr>
      <th>Nome</th>
      <th>Usuário</th>
      <th>Senha</th>
    </tr>
    <?php
    include('verifica.php');
    $sql = "select * from cadastro where usuario = '$_SESSION[usuario]'";
    $query = mysqli_query($conexao, $sql);

    while($row = mysqli_fetch_assoc($query)){
      echo"<tr>
        <td>". $row['nome']."</td>
        <td>". $row['usuario']."</td>
        <td>". $row['senha']."</td> 
        </tr>";        
    }
    ?>
  </table>
</body>
</html>