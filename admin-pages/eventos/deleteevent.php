<?php
include '../banco/banco.php';

$id = $_POST['id'];

$sql = "delete from tbcliente where codcli = '$id'";
$consulta = $conexao->query($sql);

if ($consulta){
    echo 'ok';
}else{
    echo 'vazio';
}

?>
