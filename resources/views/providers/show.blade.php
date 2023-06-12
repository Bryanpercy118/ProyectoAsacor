@extends('layouts.app')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Proveedor</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nombre : {{ $providers->name }}</h5>
        <h5 class="card-title">Telefono : {{ $providers->phone }}</h5>
        <h5 class="card-title">Direccion : {{ $providers->address }}</h5>
        <h5 class="card-title">Email : {{ $providers->email }}</h5>
        <h5 class="card-title">Nombre de Producto : {{ $providers->nameProducto }}</h5>
        <h5 class="card-title">Descripcion : {{ $providers->description }}</h5>
        <h5 class="card-title">Proveedor desde : {{ $providers->created_at }}</h5>
       
  </div>
  <a href="{{url('/provider')}}" class="btn btn-success btn-sm" title="Add New Student">
    Volver
</a>
  <hr>
  <hr>
  </div>
</div>

@endsection