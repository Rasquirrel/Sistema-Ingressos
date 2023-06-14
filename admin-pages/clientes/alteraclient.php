<?php
include('../banco/banco.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data = $_POST['data'];
    // Verificar a ordem dos valores a seguir
$sql = "update tbcliente set nome = '$nome', cpf = '$cpf', fone = '$fone', email = '$email', senha = '$senha', nasc = '$data'
          where codcli = '$id'";

$update = $conexao->query($sql);
if($update==true)
{ 
  echo 'ok';
}else{
  echo 'vazio';
} 
?>