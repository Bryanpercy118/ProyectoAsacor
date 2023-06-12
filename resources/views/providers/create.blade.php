@extends('layouts.app')
@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="card" >
  <div class="card-body">
    <form action="{{ url('provider') }}" method="post">
      {!! csrf_field() !!}
      <label>Nombre</label>
      <input type="text" name="name" id="name" class="form-control" required autocomplete="name" autofocus></br>
      <label>Telefono</label>
      <input type="text" name="phone" id="phone" class="form-control" required autocomplete="phone" autofocus></br>
      <label>Direccion</label>
      <input type="text" name="address" id="address" class="form-control" required autocomplete="address" autofocus></br>
      
      <label>Email</label>
      <input type="email" name="email" id="email" class="form-control  @error('email') is-invalid @enderror" required autocomplete="email" autofocus></br>

      
      <label>Nombre de Producto</label>
      <input type="text" name="nameProducto" id="nameProducto" class="form-control" required autocomplete="nameProducto" autofocus></br>
      <label>Descripcion</label>
      <input type="text" name="description" id="description" class="form-control" required autocomplete="description" autofocus></br>
      
      <input type="submit" value="Registrar Proveedor" class="btn btn-success"></br>
    </form>
  </div>
</div>
</div>
</div>
@endsection




