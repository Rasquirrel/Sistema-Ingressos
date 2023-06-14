<?php
    include 'banco/banco.php';
    
//echo 'conexão ok!'
//recebendo variáveis por post
$email = $_POST ['email'];
$senha = $_POST ['senha'];


//criando uma consulta
$sql = "select * from tbcliente where email='$email' and senha='$senha'";
$consulta = $conexao->query($sql);
if ($consulta->num_rows > 0){
    session_start();
    $_SESSION['login'] = 'ok';
    $linha=$consulta->fetch_array(MYSQLI_ASSOC);
    $_SESSION['client'] = $linha['codcli'];
    header("Location: home-page.php?login=ok&cli=".$linha['codcli']);
   // echo 'Usuário Encontrado';
}else{
    header('Location: index-clientes.php?login=erro');
   // echo 'Usuário não encontrado';
}
?>
