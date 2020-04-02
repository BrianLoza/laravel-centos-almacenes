@extends('layouts.app')
@section('content')

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../GrupoAlmasen" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Grupos de Almacenes
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../ConfigMoneda" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Configuracion de Moneda
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
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
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Grupos de Almacenes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Grupos de Almacenes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
			<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Datos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('GrupoAlmasenForm') }}" method="POST" autocomplete="off">
                @csrf
                <div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputEmail1">Codigo</label>
												<input type="text" class="form-control" id="cod_grupo_almacen" placeholder="Codigo" name="cod_grupo_almacen">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Descripcion</label>
												<input type="text" class="form-control" id="desc_grupo_almacen" placeholder="Descripcion" name="desc_grupo_almacen">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Cuenta de transaccion</label>
												<input type="text" class="form-control" id="cuenta_trans_articulo" placeholder="Cuenta de transaccion" name="cuenta_trans_articulo">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Cuenta Grupo</label>
												<input type="text" class="form-control" id="cuenta_grupo_articulo" placeholder="Cuenta Grupo" name="cuenta_grupo_articulo">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputEmail1">Cuenta Consumo</label>
												<input type="text" class="form-control" id="cuenta_consumo_int" placeholder="Cuenta Consumo" name="cuenta_consumo_int">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Cuenta Diferencia</label>
												<input type="text" class="form-control" id="cuenta_diferencia_articulo" placeholder="Cuenta Diferencia" name="cuenta_diferencia_articulo">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Sucursal</label>
												<input type="text" class="form-control" id="cod_sucursal" placeholder="Sucursal" name="cod_sucursal">
											</div>
										</div>
									</div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <button type="submit" class="btn btn-warning">Canselar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
				<!-- /.row --><!-- /.row -->

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de Grupos De almasenes</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Cuneta Trans</th>
                      <th>Cuneta Grupo</th>
                      <th>Cuneta Consumo</th>
                      <th>Cuneta Diferncia</th>
                      <th>Sucursal</th>
                      <th>Descripcion</th>
                    </tr>
                  </thead>
                  <tbody>						
									@foreach($Grupo_Almacen as $Grupo_Almacen)
                    <tr>
                      <td>{{ $Grupo_Almacen->cod_grupo_almacen }}</td>
                      <td>{{ $Grupo_Almacen->cuenta_trans_articulo }}</td>
                      <td>{{ $Grupo_Almacen->cuenta_grupo_articulo }}</td>
                      <td>{{ $Grupo_Almacen->cuenta_consumo_int }}</td>
                      <td>{{ $Grupo_Almacen->cuenta_diferencia_articulo }}</td>
                      <td><span class="tag tag-success">{{ $Grupo_Almacen->cod_sucursal }}</span></td>
                      <td>{{ $Grupo_Almacen->desc_grupo_almacen }}</td>
										</tr>
									@endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
				
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
