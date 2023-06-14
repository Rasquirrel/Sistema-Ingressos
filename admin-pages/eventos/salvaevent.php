<?php
include('../banco/banco.php');

$nome = $_POST['nome'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$qtd_ingressos = $_POST['qtd_ingressos'];
$atracao = $_POST['atracao'];
$valor = $_POST['valor'];
$tipo_foto = $_POST['tipo_foto'];


    // Verificar a ordem dos valores a seguir
      $sql = "insert into tbevento values(null, '$nome', '$rua', '$bairro', '$cidade','$estado','$data', '$hora', '$qtd_ingressos', '$atracao', '$valor', '$tipo_foto')";
      $insert = $conexao->query($sql);

            if($insert==true)
            {
              echo 'ok';
            }else{
              echo 'vazio';
            }

?>