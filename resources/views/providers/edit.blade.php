@extends('layouts.app')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Actualizar Datos Proovedor</div>
  <div class="card-body">
       
    <form action=" {{ url('provider/' .$providers->id) }} " method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$providers->id}}" id="id" />
        <label>Nombre</label></br>
        <input type="text" name="name" id="name" value="{{$providers->name}}" class="form-control"></br>
        <label>Telefono</label></br>
        <input type="text" name="phone" id="phone" value="{{$providers->phone}}" class="form-control"></br>
        <label>Direccion</label></br>
        <input type="text" name="address" id="address" value="{{$providers->address}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$providers->email}}" class="form-control  @error('email') is-invalid @enderror" required autocomplete="email" autofocus></br>
        <label>Nombre de Producto</label></br>
        <input type="text" name="nameProducto" id="nameProducto" value="{{$providers->nameProducto}}" class="form-control " required autocomplete="email" autofocus></br>
        <label>Descripcion</label></br>
        <input type="text" name="description" id="description" value="{{$providers->description}}" class="form-control " required autocomplete="email" autofocus></br>
  
        <input type="submit" value="Actualizar" class="btn btn-success"></br>
      </form>
  
</div>
</div>
  
@stop