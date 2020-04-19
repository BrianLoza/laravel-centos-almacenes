@extends('layouts.applogin')
@section('content')

<!-- Horizontal Form -->
<div class="row justify-content-center mt-5">
<div class="col-sm-6">
<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Login</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('autentificacion') }}" method="POST" class="form-horizontal">
        @csrf
    <div class="card-body">
        <div class="form-group row">

          <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" name="usuario" placeholder="Usuario">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="contrasenia" placeholder="Contraseña">
          </div>
        </div>
      </div>

      @isset($mensaje)
        <div class="col-sm-12 text-center">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <span>{{ $mensaje }}</span>
            </div>
        </div>
      @endisset

      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info">Ingresar</button>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
</div>
</div>
  <!-- /.card -->

@endsection
