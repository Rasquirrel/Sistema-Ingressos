<?php
include '../banco/banco.php';

$id = $_GET['id'];

$sql = "delete from tbusua where codusu = '$id'";
$consulta = $conexao->query($sql);
if(isset($_GET['adm'])){
            if ($consulta){
                header('Location: users-page.php?delete=ok&adm=S');
            }else{
                header('Location: users-page.php?delete=erro&adm=S');
            }
}else{
            if ($consulta){
                header('Location: users-page.php?delete=ok');
            }else{
                header('Location: users-page.php?delete=erro');
            }
}
?>
