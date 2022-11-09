<?php
   include('conexao.php');
   session_start();

   $usuario = $_SESSION['usuario']; // aqui eu estou tentando pegar a variavel de sessão do usuario
   $id = $_SESSION['id']; // id usuario


   $senha = isset($_POST['senha_banco'])?$_POST['senha_banco']:"";
   $senha_nova = isset($_POST['senha_nova'])?$_POST['senha_nova']:"";
   $confirme_senha = isset($_POST['senha_confirmada'])?$_POST['senha_confirmada']:"";

   if($senha_nova != $confirme_senha || $senha_banco == $senha)
   {
    die("ERROR senhas nao sao iguais!!!");
   }

   $sql = "SELECT id, usuario from cadastro where usuario = '$usuario' and senha = '$senha'"; //experiencia
   $result = mysqli_query($conexao, $sql);
   if(mysqli_num_rows($result)<=0)
   {
    die("errado!!! pass ou user esta' mal!!!");
   }

   $result = "UPDATE cadastro SET senha = '$senha_nova' and repetir = '$confirme_senha' where id = '$id'"; //verifica se é verdadeiro o resultado da query, e retorna mensagem    
   echo"<script>alert('Senha Alterada com Sucesso!');
        window.location='alterasenha.php';
        </script>";

?>