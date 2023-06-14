<?php
include('../banco/banco.php');

$id = $_POST['id'];
$email = $_POST['email'];
$senha = $_POST['senha'];
    // Verificar a ordem dos valores a seguir
$sql = "update tbusua set email = '$email', senha = '$senha'
          where codusu = '$id'";

$update = $conexao->query($sql);
if($update==true)
{
 echo 'ok';
}else{
  echo 'vazio';
}
?>