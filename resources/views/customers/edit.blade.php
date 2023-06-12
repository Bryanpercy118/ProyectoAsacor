@extends('layouts.app')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Actualizar Datos Cliente</div>
  <div class="card-body">
       
    <form action=" {{ url('customer/' .$customers->id) }} " method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$customers->id}}" id="id" />
        <label>Nombre</label></br>
        <input type="text" name="name" id="name" value="{{$customers->name}}" class="form-control"></br>
        <label>Telefono</label></br>
        <input type="text" name="phone" id="phone" value="{{$customers->phone}}" class="form-control"></br>
        <label>Direccion</label></br>
        <input type="text" name="address" id="address" value="{{$customers->address}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$customers->email}}" class="form-control  @error('email') is-invalid @enderror" required autocomplete="email" autofocus></br>
  
        <input type="submit" value="Actualizar" class="btn btn-success"></br>
      </form>
  
</div>
</div>
  
@stop