<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$repetir = mysqli_real_escape_string($conexao, trim($_POST['repetir']));

$sql = "select count(*) as total from cadastro where usuario ='$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

    if($senha === $repetir){;
        $_SESSION['senhas_iguais'];
        $sql= "INSERT INTO cadastro(nome, usuario, senha) 
        values('$nome', '$usuario', '$senha')";
    }

    else{
        $_SESSION['senhas_diferente'] = true;
        header('Location: cadastro.php');
    }

// $sql= "INSERT INTO cadastro(nome, usuario, senha, repetir) 
//     values('$nome', '$usuario', '$senha', $repetir)";

if($conexao->query($sql) === true){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>