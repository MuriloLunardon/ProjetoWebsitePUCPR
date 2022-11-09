<?php
include_once('conexao.php');
session_start();

$usuario = $_SESSION['usuario'];
$id = $_SESSION['id'];

if(empty($_POST['senha_nova']) || empty($_POST['confirme_senha'])){
    header('Location: alterasenha.php');
    exit();
}

$senha_nova =  isset($_POST['senha_nova'])?$_POST['senha_nova']:'';
$confirme_senha = isset($_POST['confirme_senha'])?$_POST['confirme_senha']:'';

if($senha_nova != $confirme_senha)
{
    $_SESSION['senhas_diferentes'] = true;
    header('Location: alterasenha.php');
    exit();
}
else{
    $query = "UPDATE cadastro SET senha = '$senha_nova' WHERE id = '$id'";
    $result = mysqli_query($conexao, $query);
}

$conexao->close();

header('Location: alterasenha.php');
exit();

?>