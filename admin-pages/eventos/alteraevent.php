<?php
include('../banco/banco.php');

$id = $_POST['codeve'];
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
$sql = "update tbevento set nome = '$nome', rua = '$rua', bairro = '$bairro', cidade = '$cidade', estado = '$estado', data = '$data', hora = '$hora', qtd_ingressos = '$qtd_ingressos', atracao = '$atracao', valor = '$valor', tipo_foto = '$tipo_foto' where codeve = '$id'";

$update = $conexao->query($sql);
if($update==true)
{ 
  echo 'ok';
}else{
  echo 'vazio';
} 
?>