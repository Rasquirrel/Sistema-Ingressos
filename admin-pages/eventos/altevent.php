<?php
include 'testasessao.php';
include '../banco/banco.php';
  // recebendo id do usuário
    $id = $_GET['id'];
  //criando consulta
    $sql = "select * from tbevento where codeve = '$id'";
  //realizando busca
    $busca = $conexao->query($sql);
  //convertendo resultado em array
    $linha = $busca->fetch_array(MYSQLI_ASSOC);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Evento For You</title>
  <link rel="shortcut icon" href="../../favicon.png" type="image/x-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!--jquery-->
  <script src="../../build/js/jquery.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../home-page.php" class="brand-link">
      <img src="../../favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Evento For You</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
               <?php
            if(isset($_GET['adm'])){
            echo'
            <a href="../home-page.php?adm=S" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>';
          }else{
             echo'
            <a href="../home-page.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>';
          }
            ?>
          </li>

          <li class="nav-item">
            <?php
            if(isset($_GET['adm'])){
            echo'
            <a href="../usuarios/users-page.php?adm=S" class="nav-link">
              <i class="nav-icon fa-solid fa-address-book"></i>
              <p>
                Usuários ADM
              </p>
            </a>';
          }else{
             echo'
            <a href="../usuarios/users-page.php" class="nav-link">
              <i class="nav-icon fa-solid fa-address-book"></i>
              <p>
                Usuários ADM
              </p>
            </a>';
          }
            ?>
          </li>

          <li class="nav-item">
            <?php
             if(isset($_GET['adm'])){
              echo
              '<a href="../clientes/client-page.php?adm=S" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Clientes
                </p>
              </a>';
             }else{
              echo'
              <a href="../clientes/client-page.php" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Clientes
                </p>
              </a>';
             }
            ?>
          </li>

           <li class="nav-item">
            <?php
            if(isset($_GET['adm'])){
            echo'
            <a href="../eventos/event-page.php?adm=S" class="nav-link active">
              <i class="nav-icon fa-solid fa-calendar-days"></i>
              <p>
                Eventos
              </p>
            </a>';
          }else{
             echo'
            <a href="../eventos/event-page.php" class="nav-link">
              <i class="nav-icon fa-solid fa-calendar-days"></i>
              <p>
                Eventos
              </p>
            </a>';
          }
            ?>
          </li>

          <li class="nav-item">
            <a href="../sair.php" class="nav-link">
              <i class="nav-icon fas fa-arrow-right-from-bracket"></i>
              <p>
                Sair
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Alteração de Eventos &nbsp; <i class="fa-solid fa-person-circle-plus"></i></h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="email">Seu código</label>
                    <input type="text" class="form-control mb-3" readonly name="id" id="id" value="<?php echo $linha['codeve']?>">
                    <label for="nome">Nome Antigo</label>
                    <input type="text" readonly class="form-control" id="nome" name="nome" value="<?php echo $linha['nome']?>">
                    <label for="nome_novo">Nome Novo</label>
                    <input type="text" class="form-control" id="nome_novo" placeholder="insira o novo nome" name="nome_novo">
                  </div>
                  <div class="row">
                  <div class="form-group col-6">
                    <label for="cpf">Rua Antiga</label>
                    <input type="text" class="form-control" id="rua" readonly name="rua" value="<?php echo $linha['rua']?>">
                        </div>
                        <div class="form-group col-6">
                    <label for="email_novo">Rua Nova</label>
                    <input type="text" class="form-control" id="rua_nova" placeholder="insira a nova rua" name="rua_nova">
                  </div>
                  </div>
                  <div class="row">
                        <div class="form-group col-6">
                          <label for="fone">Bairro Antigo</label>
                          <input type="text" class="form-control" id="bairro" readonly name="bairro" value="<?php echo $linha['bairro']?>">
                        </div>
                        <div class="form-group col-6">
                          <label for="fone_novo">Bairro Novo</label>
                          <input type="text" class="form-control" id="bairro_novo" placeholder="insira o novo bairro" name="bairro_novo">
                        </div>
                  </div>
                  <div class="row">
                        <div class="form-group col-6">
                          <label for="data">Cidade Antiga</label>
                          <input type="text" class="form-control" id="cidade" readonly name="cidade" value="<?php echo $linha['cidade']?>">
                        </div>
                        <div class="form-group col-6">
                          <label for="data_novo">Cidade Nova</label>
                          <input type="text" class="form-control" id="cidade_nova" name="cidade_nova">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Estado Antigo</label>
                    <input type="text" class="form-control" id="estado" readonly name="estado" value="<?php echo $linha['estado']?>">
                    <label for="email_novo">Estado Novo</label>
                    <input type="text" class="form-control" id="estado_novo" placeholder="insira o novo estado" name="estado_novo">
                  </div>
                  <div class="row">
                        <div class="form-group col-6">
                          <label for="senha1">Data</label>
                          <input type="date" class="form-control" id="data" readonly name="data" value="<?php echo $linha['data']?>">
                        </div>
                        <div class="form-group col-6">
                        <label for="senha2">Hora</label>
                          <input type="time" class="form-control" id="hora" placeholder="nova senha" name="senha2">
                        </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button id="submitcli" class="btn btn-primary"><i class="fa-sharp fa-solid fa-plus"></i> &nbsp;Alterar</button>
                </div>
            </div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>

<!-- DataTables  & ../../plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!--mask-->
<script src="../../mascaras/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<script src="../../mascaras/jquery.inputmask.js" type="text/javascript"></script>
<script src="../../mascaras/jquery.inputmask.numeric.extensions.js" type="text/javascript"></script>
<!-- Page specific script -->
<script>
  $("#submitcli").click(function(){
                  let id = $('#id').val();
                  let nome = $('#nome_novo').val();
                  let cpf = $('#cpf_novo').val();
                  let fone = $('#fone_novo').val();
                  let email = $('#email_novo').val();
                  let data = $('#data_novo').val();
                  let senha = $('#senha2').val();
                  if(senha!='' && email!='' && nome!='' && cpf!='' && fone!='' && data!=''){
                  swal({
                                title: "DESEJA ALTERAR?",
                                text: "Verifique se os dados estão corretos!",
                                icon: "info",
                                buttons: ["Não", "Sim"],
                                dangerMode: true,
                              })//fim swal
                              .then((willUpdate) => {
                                if (willUpdate) {
                                  $.post('alteraclient.php', {id:id,nome:nome,cpf:cpf,fone:fone,email:email,senha:senha,data:data} ,function(retornupdate){
                                  if(retornupdate != 'vazio'){
                                    swal("dados atualizados", {  icon: "success",	});
                                    window.setTimeout('location.reload()',1000);
                                      }else{
                                          swal("não alterou!", {  icon: "error",	});
                                      }
                                  });//fim do post do delete conceitos
                                } else {
                                swal("não alterou!", {  icon: "error",	});
                                }//fim do if
                              });//fim do then
                  }else{
                    swal("1 ou mais campos não preenchidos!", {  icon: "warning",	});
                  }             
          })//fim submitcli

  $(document).ready(function(){ 
//$("#nasc").inputmask("99/99/9999"); 
// $("#cep").inputmask("99.999-999"); 
    $("#cpf_novo").inputmask("999.999.999-99");
    $("#fone_novo").inputmask("(99)99999-9999");

    function validarCPF(cpf) {
        cpf = cpf.replace(/[^\d]+/g, '');
        if (cpf == '') {
          return false;
        }
        // Elimina CPFs invalidos conhecidos
        if (
          cpf.length != 11 ||
          cpf == "00000000000" ||
          cpf == "11111111111" ||
          cpf == "22222222222" ||
          cpf == "33333333333" ||
          cpf == "44444444444" ||
          cpf == "55555555555" ||
          cpf == "66666666666" ||
          cpf == "77777777777" ||
          cpf == "88888888888" ||
          cpf == "99999999999"
        ) {
          return false;
        }
        // Valida 1o digito
        var add = 0;
        for (var i = 0; i < 9; i++) {
          add += parseInt(cpf.charAt(i)) * (10 - i);
        }
        var rev = 11 - (add % 11);
        if (rev == 10 || rev == 11) {
          rev = 0;
        }
        if (rev != parseInt(cpf.charAt(9))) {
          return false;
        }
        // Valida 2o digito
        add = 0;
        for (var i = 0; i < 10; i++) {
          add += parseInt(cpf.charAt(i)) * (11 - i);
        }
        rev = 11 - (add % 11);
        if (rev == 10 || rev == 11) {
          rev = 0;
        }
        if (rev != parseInt(cpf.charAt(10))) {
          return false;
        }
        return true;
      }

      // Função para exibir mensagem de CPF inválido
      function exibirMensagemCPFInvalido() {
        $("#cpf_novo").addClass("is-invalid");
        $("#cpf-feedback").html("CPF inválido");
      }

      // Evento de validação do CPF ao perder o foco do campo
      $("#cpf_novo").on("blur", function() {
        var cpf = $(this).val();
        if (!validarCPF(cpf)) {
          exibirMensagemCPFInvalido();
        } else {
          $("#cpf_novo").removeClass("is-invalid");
          $("#cpf-feedback").html("");
        }
      });//fim validar cpf

//$("#cnpj").mask("99.999.999/9999-99");
//$("#data").mask("99/99/9999");
  $('#').click(function(){

  });
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
});

</script>
<!-- Core JS -->    
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
</body>
</html>
