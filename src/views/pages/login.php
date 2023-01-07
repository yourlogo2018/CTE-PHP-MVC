<?php
session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $base ?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $base ?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $base ?>/template/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo $base ?>/template/plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?php echo $base ?>/template/index2.html" class="h1"><b>CTE</b> cursos</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Digite seu login e senha</p>

      <form action="<?php echo $base ?>/action_login" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="login" placeholder="Login" value="admin">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" value="1234">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Lembrar me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Acessar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">Esqueci minha senha</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Cadastre-se</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo $base ?>/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $base ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $base ?>/template/dist/js/adminlte.min.js"></script>
<!-- Toastr -->
<script src="<?php echo $base ?>/template/plugins/toastr/toastr.min.js"></script>

<?php
use core\Alerts;
if( !empty($_SESSION["erro"]) ){

  if( $_SESSION["erro"] == "true" ){

      Alerts::sessionsAlertsErrorToastTr($_SESSION["mensagem"]);
      $_SESSION["erro"] = "";
      $_SESSION["mensagem"] = "";

  }else{

      Alerts::sessionsAlertsSucessToastTr($_SESSION["mensagem"]);
      $_SESSION["erro"] = "";
      $_SESSION["mensagem"] = "";

  }

}
?>
</body>
</html>