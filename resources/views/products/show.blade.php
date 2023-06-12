@extends('layouts.app')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Producto</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nombre : {{ $products->name }}</h5>
        <h5 class="card-title">Precio: {{ $products->price }}</h5>
       
  </div>
  <a href="{{url('/product')}}" class="btn btn-success btn-sm" title="Add New Student">
    Volver
</a>
  <hr>
  <hr>
  </div>
</div>

@endsection