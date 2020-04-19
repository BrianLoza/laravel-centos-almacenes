@extends('layouts.sidebar')

@section('active-almacen-estilo') active @endsection

@section('contenido')

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
                      <th>Acciones</th>
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
                      <td>
                          <a href="{{ url('eliminarAlmacen/' . $Grupo_Almacen->cod_grupo_almacen) }}" type="button" class="btn btn-danger small">Eliminar</a>
                          <a type="button" class="btn btn-info small">Actualizar</a>
                      </td>
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
