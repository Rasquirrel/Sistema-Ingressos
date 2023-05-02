<?php
include('../banco/banco.php');

$a = $_POST['adm'];
$id = $_POST['id'];
$nome = $_POST['nome_novo'];
$cpf = $_POST['cpf_novo'];
$fone = $_POST['fone_novo'];
$email = $_POST['email_novo'];
$senha = $_POST['senha2'];
    // Verificar a ordem dos valores a seguir
$sql = "update tbcliente set nome = '$nome', cpf = '$cpf', fone = '$fone', email = '$email', senha = '$senha'
          where codcli = '$id'";

$update = $conexao->query($sql);
if($a=='adm'){
if($update==true)
{
  header('Location: client-page.php?update=ok&adm=S');
}else{
  header('Location: client-page.php?update=erro&adm=S');
}
}else{
    if($update==true)
    {
      header('Location: client-page.php?update=ok');
    }else{
      header('Location: client-page.php?update=erro');
    } 
}
?>