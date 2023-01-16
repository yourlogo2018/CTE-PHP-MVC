<?php

switch ($_SESSION["rota"]) {
  case 'home':
    $home = "active" ?? "";
    break;
  
  case 'listar_cursos':
    $admin = "active";
    $admin_menu = "menu-open";
    break;

  case 'cursos':
    $admin_cad = "active";
    $admin_menu = "menu-open";
    break;
}

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo $base ?>/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://avatars.dicebear.com/api/initials/<?php echo $_SESSION["user"][0]["name"] ?>.svg" class="img-circle elevation-2" alt="<?php echo $_SESSION["user"][0]["name"] ?>">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["user"][0]["name"] ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo $base ?>/" class="nav-link <?php echo $home ?? "" ?>">
              <i class="nav-icon fa-sharp fa-solid fa-school"></i>
              <p>
                 Home
              </p>
            </a>
          </li>
          <li class="nav-item <?php echo $admin_menu ?? "" ?>">
            <a href="#" class="nav-link <?php echo $admin ?? "" ?>">
              <i class="nav-icon fa-solid fa-list"></i>
              <p>
                Administrativo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo $base ?>/nova_escola" class="nav-link <?php echo $admin ?? "" ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cadastro de Escola</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $base ?>/listar_cursos" class="nav-link <?php echo $admin ?? "" ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Todos os Curso</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $base ?>/cursos" class="nav-link <?php echo $admin_cad ?? "" ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cadastrar Curso</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">ACADÊMICO</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-graduation-cap"></i>
              <p>
                Alunos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $base ?>/estudante" class="nav-link <?php echo $admin ?? "" ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cadastrar Alunos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $base ?>/consultar_alunos" class="nav-link <?php echo $admin ?? "" ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultar Alunos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $base ?>/report_alunos" class="nav-link <?php echo $admin ?? "" ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Relatório de Alunos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $base ?>/record_alunos" class="nav-link <?php echo $admin ?? "" ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ficha de Aluno</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
