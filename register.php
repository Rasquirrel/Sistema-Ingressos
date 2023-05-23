<?php
  include 'admin-pages/banco/banco.php';

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha1 = $_POST['senha1'];
  $senha2 = $_POST['senha2'];
  $fone = $_POST['fone'];
  $nascimento = $_POST['nascimento'];
  $cpf = $_POST['cpf'];

  $sql = "select * from tbcliente";
  $consulta = $conexao->query($sql);
  $linha = $consulta->fetch_array(MYSQLI_ASSOC);

  /**if (in_array($email, $linha)){
    header('Location: register-page.php?erro=email_existe');
  }

  if ($senha1 != $senha2){
    header('Location: register-page.php?erro=senhas_diferem');
  }

  $insert_sql = "insert into tbcliente values(null, '$nome', '$cpf', '$fone', '$email', '$senha1', '$nascimento')";

  $consulta_1 = $conexao->query($insert_sql);
  if ($consulta_1) {
    header("Location: register-page.php?registro=ok");
  }
**/
?>
