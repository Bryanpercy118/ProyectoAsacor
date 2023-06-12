@extends('layouts.app')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Cliente</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nombre : {{ $customers->name }}</h5>
        <h5 class="card-title">Telefono : {{ $customers->phone }}</h5>
        <h5 class="card-title">Direccion : {{ $customers->address }}</h5>
        <h5 class="card-title">Email : {{ $customers->email }}</h5>
        <h5 class="card-title">Cliente desde : {{ $customers->created_at }}</h5>
       
  </div>
  <a href="{{url('/customer')}}" class="btn btn-success btn-sm" title="Add New Student">
    Volver
</a>
  <hr>
  <hr>
  </div>
</div>

@endsection