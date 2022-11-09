<?php

session_start();
include("conexao.php");

$livro = $_POST['livro'];
$data_emp = $_POST['data_emp'];
$data_dev = $_POST['data_dev'];
$usuario = $_SESSION['usuario'];


$sql = "select count(*) as total from emprestimos where livro = '$livro'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['livro_ja_emprestado'] = true;
    header('Location: emprestar.php');
    exit;
}

$sql = "INSERT INTO emprestimos(usuario, livro, data_emp, data_dev) 
    values('$usuario', '$livro', '$data_emp', '$data_dev')";

if($conexao->query($sql) === true){
    $_SESSION['livro_cadastrado'] = true;

}

$conexao->close();

header('Location: emprestar.php');
exit;
?>


