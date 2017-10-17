<!-- create.blade.php -->

@extends('master')
@section('content')
<div class="container">
      <form method="post" action="{{action('AlumnoController@store')}}">
    <div class="form-group row">
          {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Nombre" name="nombre">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Apellido</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Apellido" name="apellido">
     </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary" name="Guardar">
    </div>
  </form>
</div>
@endsection