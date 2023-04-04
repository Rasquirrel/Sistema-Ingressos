<?php
include'banco.php';

$id = $_GET['id'];

$sql = "delete from tbusua where codusu = '$id'";
$consulta = $conexao->query($sql);
if ($consulta){
    header('Location: users-page.php?delete=ok');
}else{
    header('Location: users-page.php?delete=erro');
}
?>
