@extends('layouts.app')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Producto</div>
    <div class="card-body">
    <form action="{{ url('product') }}" method="post">
      {!! csrf_field() !!}
      <label>Nombre</label></br>
      <input type="text" name="name" id="name" class="form-control"></br>
      <label>Precio</label></br>
      <input type="text" name="price" id="price" class="form-control"></br>
      <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
    </div>
  </div>
@endsection




