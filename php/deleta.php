<?php
session_start();
include_once('conexao.php');

if(!empty($_GET['id']))
{
    include_once('conexao.php');

    $id = $_GET['id'];
    $user = $_SESSION['usuario'];

    $sql = "SELECT * from emprestimos where usuario = '$user' and id_livro = '$id'";
    $query = mysqli_query($conexao, $sql);

    if($query->num_rows > 0)
    {
        $deletesql = "DELETE FROM emprestimos WHERE usuario = '$user' and id_livro = '$id'";
        $result = mysqli_query($conexao, $deletesql);
    }
}
header('Location: home.php');
?> 