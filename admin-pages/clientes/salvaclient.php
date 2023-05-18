<?php
include('../banco/banco.php');

$a = $_POST['adm'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$senha = $_POST['senha1'];
$senha2 = $_POST['senha2'];
$data = $_POST['data'];
    // Verificar a ordem dos valores a seguir
    if($a=='adm'){
                if($senha==$senha2){

                $sql = "insert into tbcliente values(null, '$nome', '$cpf', '$fone', '$email','$senha','$data')";
                $insert = $conexao->query($sql);
                

                if($insert==true){
                    header('Location: addclient.php?insert=ok&adm=S');
                  }else{
                    header('Location: addclient.php?insert=erro&adm=S');
                  }
                }else{
                    header('Location: addclient.php?insert=Senhaerro&adm=S');
                }
  }else{
    if($senha==$senha2){

      $sql = "insert into tbcliente values(null, '$nome', '$cpf', '$fone', '$email','$senha','$data')";
      $insert = $conexao->query($sql);

            if($insert==true)
            {
              header('Location: addclient.php?insert=ok');
            }else{
              header('Location: addclient.php?insert=erro');
            }

            }else{
                header('Location: addclient.php?insert=Senhaerro');
            }
          }
?>