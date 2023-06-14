<?php
include '../banco/banco.php';

$id = $_POST['id'];

$sql = "delete from tbusua where codusu = '$id'";
$consulta = $conexao->query($sql);

            if ($consulta){
                echo 'ok';
            }else{
                echo 'vazio';
            }
?>
