<?php
  include 'admin-pages/banco/banco.php';

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha1 = $_POST['senha1'];
  $senha2 = $_POST['senha2'];

  $sql = "select * from tbcliente";
  $consulta = $conexao->query($sql);
  $linha = $consulta->fetch_array(MYSQLI_ASSOC);

  if (in_array($email, $linha)){
    header('Location: register-page.php?erro=email_existe');
  }

  if ($senha1 != $senha2){
    header('Location: register-page.php?erro=senhas_diferem');
  }

  $sql_1 = "insert into tbcliente values()"
?>
