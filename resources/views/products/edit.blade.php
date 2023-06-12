@extends('layouts.app')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Actualizar Datos Producto</div>
  <div class="card-body">
       
    <form action=" {{ url('product/' .$products->id) }} " method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
        <label>Nombre</label></br>
        <input type="text" name="name" id="name" value="{{$products->name}}" class="form-control"></br>
        <label>Precio</label></br>
        <input type="text" name="phone" id="phone" value="{{$products->price}}" class="form-control"></br>
  
        <input type="submit" value="Actualizar" class="btn btn-success"></br>
      </form>
  
</div>
</div>
  
@stop