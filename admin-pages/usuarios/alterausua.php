<?php
include('../banco/banco.php');

$a = $_POST['adm'];
$id = $_POST['id'];
$email = $_POST['email_novo'];
$senha = $_POST['senha2'];
    // Verificar a ordem dos valores a seguir
$sql = "update tbusua set email = '$email', senha = '$senha'
          where codusu = '$id'";

$update = $conexao->query($sql);
if($a=='adm'){
if($update==true)
{
  header('Location: users-page.php?update=ok&adm=S');
}else{
  header('Location: users-page.php?update=erro&adm=S');
}
}else{
    if($update==true)
    {
      header('Location: users-page.php?update=ok');
    }else{
      header('Location: users-page.php?update=erro');
    } 
}
?>