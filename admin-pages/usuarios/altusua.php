<?php
include 'testasessao.php';
include '../banco/banco.php';
  // recebendo id do usuário
    $id = $_GET['id'];
  //criando consulta
    $sql = "select * from tbusua where codusu = '$id'";
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
  <title>Ibento For You</title>
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
  <!--sweetalert-->
  <link rel="stylesheet" href="../../js/sweetalert.min.css">
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
      <span class="brand-text font-weight-light">Ibento For You</span>
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
            <a href="users-page.php?adm=S" class="nav-link active">
              <i class="nav-icon fa-solid fa-address-book"></i>
              <p>
                Usuários ADM
              </p>
            </a>
          </li>

          <li class="nav-item">
          <?php
             if(isset($_GET['adm'])){
              echo'
              <a href="../clientes/client-page.php?adm=S" class="nav-link">
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
            <a href="../eventos/event-page.php?adm=S" class="nav-link">
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
                <h3 class="card-title">Alteração de Usuários &nbsp; <i class="fa-solid fa-person-circle-plus"></i></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                  <label for="email">Seu código</label>
                  <input type="text" class="form-control mb-3" readonly name="id" id="id" value="<?php echo $linha['codusu']?>">
                    <label for="email">Email Antigo</label>
                    <input type="email" class="form-control" id="email" readonly name="email" value="<?php echo $linha['email']?>">
                  </div>
                  <div class="form-group">
                    <label for="email_novo">Email Novo</label>
                    <input type="email" class="form-control" id="email_novo" placeholder="insira o novo endereço de email" name="email_novo" required>
                  </div>
                  <div class="row">
                        <div class="form-group col-6">
                          <label for="senha1">Senha Antiga</label>
                          <input type="text" class="form-control" id="senha1" readonly name="senha1" value="<?php echo $linha['senha']?>">
                        </div>
                        <div class="form-group col-6">
                        <label for="senha2">Senha Nova</label>
                          <input type="text" class="form-control" id="senha2" placeholder="nova senha" name="senha2" required>
                        </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button id="submitalt" class="btn btn-primary"><i class="fa-sharp fa-solid fa-plus"></i> &nbsp;Alterar</button>
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

<!-- Page specific script -->
<script>
  $("#submitalt").click(function(){
                  let id = $('#id').val();
                  let email = $('#email_novo').val();
                  let senha = $('#senha2').val();
                  if(senha!='' && email!=''){
                  swal({
                                title: "DESEJA ALTERAR?",
                                text: "Verifique se os dados estão corretos!",
                                icon: "info",
                                buttons: ["Não", "Sim"],
                                dangerMode: true,
                              })//fim swal
                              .then((willUpdate) => {
                                if (willUpdate) {
                                  $.post('alterausua.php', {id:id,email:email,senha:senha} ,function(retornupdate){
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
          })


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
</script>

    <!-- Core JS -->    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
</body>
</html>
