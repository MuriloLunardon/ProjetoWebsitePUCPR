<?php
session_start();
include('conexao.php');
include('verifica.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel</title>
  <script src="https://kit.fontawesome.com/fe30f843d3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/homepage.css">
</head>
<body>
  <nav class="navbar">
    <!-- LOGO -->
    <div class="logo">
      <img src="../img/icon.png">
    </div>
    <p><i class="fa-solid fa-user"></i> <?php echo $_SESSION['nome']?></p>
    <!-- <p><a class="sair" href="logout.php">Sair</a></p> -->
    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
      <!-- NAVIGATION MENUS -->
      <div class="menu">
        <li><a href="home.php">Home</a></li>
        <li><a href="emprestar.php">Emprestar</a></li>
        <li><a href="emprestimos.php">Todos os empréstimos</a></li>
        <li><a href="meuperfil.php">Meu perfil</a></li>
        <li><a href="logout.php">Sair</a></li>
      </div>
    </ul>
  </nav>
  <table>
    <tr>
      <th>Usuário</th>
      <th>Id_livro</th>
      <th>Livro</th>
      <th>Data Emp</th>
      <th>Data Dev</th>
    </tr>
    <?php
    $sql = "select * from emprestimos";
    $query = mysqli_query($conexao, $sql);

    while($row = mysqli_fetch_assoc($query)){
      echo"<tr>
        <td>". $row['usuario']."</td>
        <td>". $row['id_livro']."</td>
        <td>". $row['livro'] ."</td> 
        <td>". date("d/m/y", strtotime($row['data_emp']))."</td> 
        <td>". date("d/m/y", strtotime($row['data_dev']))."</td> 
        </tr>";        
    }
    ?>
  </table>
</body>
</html>