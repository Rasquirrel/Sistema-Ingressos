<?php
include('banco.php');

$a = $_POST['adm'];
$email = $_POST['email'];
$senha = $_POST['senha1'];
$senha2 = $_POST['senha2'];
    // Verificar a ordem dos valores a seguir
    if($a=='adm'){
                if($senha==$senha2){

                $sql = "insert into tbusua values(null,'$email','$senha')";
                $insert = $conexao->query($sql);

                if($insert==true){
                    header('Location: addusua.php?insert=ok&adm=S');
                  }else{
                    header('Location: addusua.php?insert=erro&adm=S');
                  }
                }else{
                    header('Location: addusua.php?insert=Senhaerro&adm=S');
                }
  }else{
    if($senha==$senha2){

      $sql = "insert into tbusua values(null,'$email','$senha')";
      $insert = $conexao->query($sql);

            if($insert==true)
            {
              header('Location: addusua.php?insert=ok');
            }else{
              header('Location: addusua.php?insert=erro');
            }

            }else{
                header('Location: addusua.php?insert=Senhaerro');
            }
          }
?>