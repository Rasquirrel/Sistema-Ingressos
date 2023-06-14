<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ibento For You</title>
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <script src="https://use.fontawesome.com/releases/v6.4.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="eventios/fotocss.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item h-auto ">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links  https://fontawesome.com/v6/icons/poo?f=classic&s=solid-->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item h-auto ">
        <a class="nav-link btn btn-outline-info m-2"  href="#">
        <i class="fa-solid fa-person-circle-plus"></i> <b> Cadastro</b> 
        </a>
      </li>
      <li class="nav-item h-auto ">
        <a class="nav-link btn btn-outline-primary m-2"  href="a_client-pages/index-clientes.php">
        <i class="fa fa-door-open"></i> <b> Entrar</b> 
        </a>
      </li>
      <li class="nav-item h-auto ">
        <a class="nav-link btn btn-outline-secondary m-2"  href="admin-pages/index-admins.php">
        <i class="fas fa-toolbox"></i> <b> Admin</b>
        </a>
      </li>

      <li class="nav-item h-auto ">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home-page.html" class="brand-link">
      <img src="favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Ibento For You</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item h-auto ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
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
        <div class="row mb-2">
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div id="eventbody">
      <?php
                include 'banco/banco.php';
                $sql = "SELECT `codeve`, `nome_evento`, `rua`, `bairro`, `cidade`, `estado`, day(`data`) as dia,month(`data`) as mes, `hora`, `qtd_ingressos`, `atracao`, `valor`,`tipo_foto` FROM `tbevento`";
                $consulta = $conexao->query($sql);
                  if ($consulta->num_rows > 0){
                            while($linha=$consulta->fetch_array(MYSQLI_ASSOC)){
                              echo "
                              <div class='eventio m-2' id='".$linha['codeve']."'>
                              <img src='eventios/".$linha['codeve'].$linha['nome_evento'].".".$linha['tipo_foto']."' class='fotios'><div class='infs'>
                              <b>".$linha['nome_evento']."</b>
                              <p>".$linha['cidade']." - ".$linha['estado']."</p>
                              <p>Dia ".$linha['dia']." / ".$linha['mes']."  |  ".$linha['hora']." </p>
                              </div>
                              </div>";
                          }
                    }
      ?>
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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="jquery.js"></script>
<script>

  $('#eventbody').on('click','.eventio', function(){
    let inf =$(this).attr('id');
    $.post('pgevento.php', {id:inf}, function(resposta) {	
    $('#eventbody').html(resposta);
    $('#eventbody').attr('class',inf);
    });
  });
  $('#eventbody').on('click','#voltar_eventos', function(){
    window.setTimeout('location.reload()');
  });

  $('#eventbody').on('change','#num2', function(){
          let n=parseInt($('#num2').val())
            $('#qtd').text(n)
            let preco=$('#preco').text()
            let valor= n*preco
            $('#total').text(valor)
  })

  $('#eventbody').on('click','#comprar', function(){
    if($('#total').text()!=0){
      window.location='a_client-pages/index-clientes.php?login=semsessao';
    }
  })
</script>
</body>
</html>
