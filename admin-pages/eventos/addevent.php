<?php
include 'testasessao.php';

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
            <a href="../home-page.php?adm=S" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../usuarios/users-page.php?adm=S" class="nav-link">
              <i class="nav-icon fa-solid fa-address-book"></i>
              <p>
                Usuários ADM
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../clientes/client-page.php?adm=S" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Clientes
              </p>
            </a>
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
            <a href="../eventos/event-page.php" class="nav-link active">
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
                <h3 class="card-title">Criação de Eventos &nbsp; <i class="fa-solid fa-person-circle-plus"></i></h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text"  required class="form-control" id="nome" placeholder="Insira o nome" name="nome">
                  </div>
                  <div class="form-group">
                    <label for="rua">Rua</label>
                    <input type="text" required class="form-control" id="rua" placeholder="insira o nome da rua " name="rua">
                  </div>
                  <div class="row">
                  <div class="form-group col-6">
                    <label for="fone">Bairro</label>
                    <input type="text" required class="form-control" id="bairro" placeholder="Insira o nome do bairro" name="bairro">
                  </div>
                  <div class="form-group col-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" required class="form-control" id="cidade" name="cidade">
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" required class="form-control" id="estado" placeholder="Insira o nome do estado" name="estado">
                  </div>
                  <div class="form-group">
                    <label for="data">Data</label>
                    <input type="date" required class="form-control" id="data"  name="data">
                  </div>
                  <div class="form-group">
                    <label for="hora">Hora</label>
                    <input type="time" required class="form-control" id="hora" name="hora">
                  </div>
                  <div class="form-group col-6">
                    <label for="qtd_ingressos">Quantidade de Ingressos</label>
                    <input type="text" required class="form-control" id="qtd_ingressos" name="qtd_ingressos">
                  </div>
                   <div class="form-group col-6">
                    <label for="atracao">Atração</label>
                    <input type="text" required class="form-control" id="atracao" name="atracao">
                  </div>
                   <div class="form-group col-6">
                    <label for="valor">Valor</label>
                    <input type="text" required class="form-control" id="valor" name="valor">
                  </div>


                   <div class="form-group col-6">
                    <label for="tipo_foto">Tipo de Foto</label>
                    <input type="text" required class="form-control" id="tipo_foto" name="tipo_foto">
                  </div>
      
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button id="submitcli" class="btn btn-primary" name=""><i class="fa-sharp fa-solid fa-plus"></i> &nbsp;Criar</button>
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
<script src="../../jquery.js"></script>
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
   $(document).ready(function(){ 

      // Evento de envio do formulário
      $("#submitcli").on("click", function(event) {
                  let nome = $('#nome').val();
                  let rua = $('#rua').val();
                  let bairro = $('#bairro').val();
                  let cidade = $('#cidade').val();
                  let estado = $('#estado').val();
                  let data = $('#data').val();
                  let hora = $('#hora').val();
                  let ingressos = $('#qtd_ingressos').val();
                  let atracao = $('#atracao').val();
                  let valor = $('#valor').val();
                  let tipo_foto = $('#tipo_foto').val();

                  
                  if(nome){

                        $.post("salvaevent.php",{nome:nome,rua:rua,bairro:bairro,cidade:cidade,estado:estado,data:data, hora:hora, ingressos: ingressos, atracao: atracao, valor: valor, tipo_foto: tipo_foto},function(retcli){
                            if(retcli!='vazio'){
                                    swal("Dados Registrados", {  icon: "success",	});
                                    window.setTimeout('location.reload()',1000);
                            }else{
                                    swal("ERRO INTERNO!", {  icon: "error",	});
                            }
                        })//fim do post de salvacli
                }else{
                  swal("1 ou mais campos não preenchidos!", {  icon: "warning",	});
                }
      });

//$("#cnpj").mask("99.999.999/9999-99");
//$("#data").mask("99/99/9999");
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
