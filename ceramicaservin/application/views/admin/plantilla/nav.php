
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url();?>Estilosback/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $this->session->userdata('nombre');?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENÚ DE NAVEGACIÓN</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Administración de tablas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-circle-o"></i> Usuarios
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/Admin/usuarios"><span class="glyphicon glyphicon-list-alt"></span>Administrar Usuarios</a></li>
                    <li><a href="<?php echo base_url();?>index.php/Admin/agregarusuarios"><span class="glyphicon glyphicon-plus"></span>Agregar Usuarios</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-circle-o"></i> Ventas 
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/Admin/ventas"><span class="glyphicon glyphicon-list-alt"></span>Administrar Ventas</a></li>
                    <!--<li><a href="<?php echo base_url();?>index.php/Backend/agregarventas"><span class="glyphicon glyphicon-plus"></span>Agregar Ventas</a></li>-->
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-circle-o"></i> Productos 
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/Admin/productos"><span class="glyphicon glyphicon-list-alt"></span>Administrar Productos</a></li>
                    <li><a href="<?php echo base_url();?>index.php/Admin/agregarproductos"><span class="glyphicon glyphicon-plus"></span>Agregar Productos</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-circle-o"></i> Direcciones 
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/Admin/direccion"><span class="glyphicon glyphicon-list-alt"></span>Administrar Direcciones</a></li>
                    <li><a href="<?php echo base_url();?>index.php/Admin/agregardireccion"><span class="glyphicon glyphicon-plus"></span>Agregar Direcciones</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-circle-o"></i> Comentarios 
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/Admin/comentarios"><span class="glyphicon glyphicon-list-alt"></span>Administrar Comentarios</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <!--<li>
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Calendario</span>
              </a>
            </li>-->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-gear fa-fw"></i> <span>Configuración</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a></li>
                <li><a href="<?php echo base_url();?>index.php/Usuarios/cerrarSesion"><i class="fa fa-sign-out fa-fw"></i> Salir</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

       <div class="content-wrapper">