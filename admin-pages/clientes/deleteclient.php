<?php
include '../banco/banco.php';

$id = $_GET['id'];

$sql = "delete from tbcliente where codcli = '$id'";
$consulta = $conexao->query($sql);

if ($consulta){
    header('Location: client-page.php?delete=ok');
}else{
    header('Location: client-page.php?delete=erro');
}

?>
