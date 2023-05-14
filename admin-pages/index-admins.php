<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ibento For You</title>
  <link rel="shortcut icon" href="favicon.png" type="image/png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <img src="../favicon.png" alt="loho" style="width:50px;height:50px;">
      <a href="#" class="h1"><b>&nbsp;Ibento</b> For You</a>
    </div>
    <div class="card-body">
      <p>
      <?php 
        if(isset($_GET['login'])) {
          if(($_GET['login'])== 'erro'){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Atenção</strong> E-mail ou senha inválidos
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }
          if(($_GET['login'])== 'semsessao'){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Atenção</strong> Faça login!
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
       </button>
        </div>';
          }
          if(($_GET['login'])== 'logout'){
            echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Atenção</strong> Logout realizado com sucesso!                                                                         
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
       </button>
        </div>';
          }
        }
      ?>
      </p>

      <div class="row">
        <a class="btn btn-info col-3" href="../index.php">Voltar</a>
        <p class="login-box-msg col-9">Faça login para iniciar sua sessão</p>
      </div>
      <form action="login.php" method="POST">

        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="E-mail" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Senha" name="senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
           
          </div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="#">Esqueci a minha senha</a>
      </p>
      <p class="mb-0">
        <a href="#" class="text-center">Cadastrar-se</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
