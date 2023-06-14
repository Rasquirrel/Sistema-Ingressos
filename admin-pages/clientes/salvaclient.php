<?php
include('../banco/banco.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data = $_POST['data'];
    // Verificar a ordem dos valores a seguir
      $sql = "insert into tbcliente values(null, '$nome', '$cpf', '$fone', '$email','$senha','$data')";
      $insert = $conexao->query($sql);

            if($insert==true)
            {
              echo 'ok';
            }else{
              echo 'vazio';
            }

?>