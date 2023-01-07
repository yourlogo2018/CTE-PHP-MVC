<?php

use src\controllers\UsuarioController;

//Verifica se a sessão do usuario esta vazia
$auth = new UsuarioController();
$auth->usuarioLogado($_SESSION['user']);

//Sessão Rota
$_SESSION["rota"] = $rota;

?>


<!DOCTYPE html>
<html lang="en">
<?php echo $render("head"); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo $base ?>/template/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php echo $render("navbar"); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php echo $render("menu"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $_SESSION["header"]  ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $base ?>/">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $_SESSION["header"]  ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

     
  <?php
    print_r($_SESSION['user']);
    
  ?>